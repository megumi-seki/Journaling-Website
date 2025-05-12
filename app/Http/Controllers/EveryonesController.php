<?php

namespace App\Http\Controllers;

use App\Models\Content;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;

class EveryonesController
{
    public function index(Request $request)
    {
        $user = $request->user()->load("setting");
        $contents = Content::where("public", 1)
            ->whereHas("user.setting", function($query) {
                $query->where("public_mode", 1);
            })
            ->orderBy("created_at","desc")
            ->with(["user.userIcon", "user.setting", "publicTaggedUsers",  "sentHugUsers", "sentHeartUsers"])
            ->paginate(15);
        return view("everyones.index", ["contents" => $contents, "user" => $user]);
    }

    public function filter(Request $request) 
    {
        $user = $request->user();
        $hashtag = $request->input("hashtag");
        $keyword = $request->input("keyword");
        $heart = $request->input("heart");
        $hug = $request->input("hug");
        $tag = $request->input("tag");
        $order = $request->input("order", "desc");

        $query = Content::with(["sentHeartUsers", "sentHugUsers", "publicTaggedUsers", 
            "user.setting", "user.userIcon"])
            ->where("public", 1)
            ->whereHas("user.setting", function($query) {
                $query->where("public_mode", 1);
            });

       if ($hashtag) {
            $query->whereHas("hashtags", function ($q) use ($hashtag) {
                $q->where("name", $hashtag);
            });
        } 

        if ($keyword) {
            $query->where("content_text", "like", "%{$keyword}%");
        }

        $contentIds = $user->heartSentContents()->pluck("content_id")->toArray();
        if ($heart === "0") {$query->whereNotIn("id", $contentIds);} 
        elseif($heart === "1") {$query->whereIn("id", $contentIds);}

        $contentIds = $user->hugSentContents()->pluck("content_id")->toArray();
        if ($hug === "0") {$query->whereNotIn("id", $contentIds);} 
        elseif($hug === "1") {$query->whereIn("id", $contentIds);}

        $contentIds = $user->publicTaggedContents()->pluck("content_id")->toArray();
        if ($tag === "0") {$query->whereNotIn("id", $contentIds);} 
        elseif($tag === "1") {$query->whereIn("id", $contentIds);}


        $contents = $query->orderBy("created_at", $order);

        $contents = $query->paginate(15)->withQueryString();

        return view("everyones.index", ["contents" => $contents, "user" => $user]);

    }

    public function restorePublicTag(Request $request, Content $content) 
    {
        if (!$content->public) abort( 403);

        $user = $request->user();
        $content->isTagged($user) ? $content->publicTaggedUsers()->detach($user->id) :
            $content->publicTaggedUsers()->attach($user->id);

        return response()->json(["success" => true]);
    }
    
    public function restoreHeart(Request $request, Content $content)
    {
        if (!$content->public) abort( 403);

        $user = $request->user();
        $content->isSentHeart($user) ? $content->sentHeartUsers()->detach($user->id) :
            $content->sentHeartUsers()->attach($user->id);
        
        return response()->json(["success" => true]);
    }
    
    public function restoreHug(Request $request, Content $content) 
    {
        if (!$content->public) abort( 403);

        $user = $request->user();
        $content->isSentHug($user) ? $content->sentHugUsers()->detach($user->id) :
            $content->sentHugUsers()->attach($user->id);
        
        return response()->json(["success" => true]);
    }
}
