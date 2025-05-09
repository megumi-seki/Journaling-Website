<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreContentRequest;
use App\Models\Content;
use App\Models\Hashtag;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Http\Request;

class ContentsController
{
    /**
     * Display a listing of the resource.
     */
    use AuthorizesRequests;

    public function index(Request $request)
    {
        $user = $request->user();
        $contents = Content::where("user_id", $user->id)
            ->orderBy("created_at","desc")
            ->with(["hashtags", "sentHugUsers", "sentHeartUsers"])
            ->paginate(15);
            
        return view("content.index", ["contents" => $contents, "user" => $user]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Request $request)
    {
        $user = $request->user();
        return view("content.create", ["user" => $user]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreContentRequest $request)
    {
        $user = $request->user();
        $data = $request->validated();
        $data["public"] = $request->has("public");
        $data["user_id"] = $user->id;

        $content = Content::create($data);


        preg_match_all("/#\w+/u", $data["content_text"],$matches);
        foreach($matches[0] as $hashtag) {
            if (mb_strlen($hashtag) > 40) continue;
            $hashtag = Hashtag::firstOrCreate(["name" => $hashtag]);
            $exists = $content->hashtags()->where("hashtags.id", $hashtag->id)->exists();
            if (!$exists) { $content->hashtags()->attach($hashtag); }
        }

        return redirect()->route("contents.index")->with("success", "new journal was saved successfully");
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Content $content)
    {
        $this->authorize('edit', arguments: $content);

        $user = $content->user;
        return view("content.edit", ["content" => $content ,"user" => $user]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(StoreContentRequest $request, Content $content)
    {
        $this->authorize(ability: 'update', arguments: $content);

        $data = $request->validated();
        $data["public"] = $request->has("public");
        $content->update($data);

        preg_match_all("/#\w+/u", $data["content_text"],$matches);
        foreach($matches[0] as $hashtag) {
            $hashtag = Hashtag::firstOrCreate(["name" => $hashtag]);
            $exists = $content->hashtags()->where("hashtags.id", $hashtag->id)->exists();
            if (!$exists) { $content->hashtags()->attach($hashtag); }
        }

        return redirect()->route("contents.index")->with("success", "the content was updated successfully");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Content $content)   
    {
        $this->authorize(ability: 'destroy', arguments: $content);

        $hashtags = $content->hashtags;
        $content->hashtags()->detach();
        $content->delete();
        foreach($hashtags as $hashtag) {
            if ($hashtag->contents()->count() === 0) {
             $hashtag->delete();
            }
        }
        // TODO update to confirm for delete 
        return redirect()->route("contents.index")->with("success","the content was successdully deleted");
    }

    public function filter(Request $request) 
    {
        $user = $request->user();
        
        $hashtag = $request->input("hashtag");
        $keyword = $request->input("keyword");
        $year = $request->input("year");
        $month = $request->input("month");
        $dayOfWeek = $request->input("day-of-week");
        $tag = $request->input("tag");
        $order = $request->input("order", "desc");

        $query = Content::where("user_id", $user->id)
            ->with(["hashtags"]);

        if ($hashtag) {
            $query->whereHas("hashtags", function ($q) use ($hashtag) {
                $q->where("name", $hashtag);
            });
        } 
        
        if ($keyword) {
            $query->where("content_text", "like", "%{$keyword}%");
        }

        if ($year) {
            $query->whereRaw("strftime('%Y', created_at) = ?", [$year]);
        }

        if ($month) {
            $query->whereRaw("strftime('%m', created_at) = ?", [str_pad($month, 2, "0", STR_PAD_LEFT)]);
        }

        if ($dayOfWeek) {
            $query->whereRaw("strftime('%w', created_at) = ?", [$dayOfWeek]);
        }

        if ($tag) {
            $query->where("tag", $tag);
        }

        $query->orderBy("created_at", $order);

        $contents = $query->paginate(15)->withQueryString();

        return view("content.index", ["contents" => $contents, "user" => $user]);

    }

    public function restoreTag(Content $content) 
    {
        $this->authorize(ability: 'restoreTag', arguments: $content);

        $content->tag = !$content->tag;
        $content->save();

        return response()->json(["success" => true]);
    }
}
