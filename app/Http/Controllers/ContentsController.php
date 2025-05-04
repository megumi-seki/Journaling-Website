<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreContentRequest;
use App\Models\Content;
use App\Models\Hashtag;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;

class ContentsController
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $contents = Content::where("user_id", 1)
            ->orderBy("created_at","desc")
            ->with(["hashtags", "sentHugUsers", "sentHeartUsers"])
            ->paginate(15);
        return view("content.index", ["contents" => $contents]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Request $request)
    {
        $contentId = $request->query("content_id");
        $content = Content::find($contentId);
        return view("content.create", ["content" => $content]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreContentRequest $request)
    {
        $data = $request->validated();

        // TODO make function to pickup hashtag
        // TODO change after making authentification
        $data["public"] = $request->has("public");
        $data["user_id"] = User::first()->id;
        Content::create($data);

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
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(StoreContentRequest $request, Content $content)
    {
        $data = $request->validated();
        $data["public"] = $request->has("public");
        $content->update($data);

        return redirect()->route("contents.index")->with("success", "the content was updated successfully");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Content $content)   {
        $content->delete();
        // TODO update to confirm for delete 
        return redirect()->route("contents.index")->with("success","the content was successdully deleted");
    }

    public function filter(Request $request) {
        $hashtag = $request->input("hashtag");
        $keyword = $request->input("keyword");
        $year = $request->input("year");
        $month = $request->input("month");
        $dayOfWeek = $request->input("day-of-week");
        $tag = $request->input("tag");
        $order = $request->input("order", "desc");

        $query = Content::where("user_id", 1)
            ->with(["hashtags"]);

            //TODO fix here about hashtag after creating function to add hashtags
       if ($hashtag) {
            $query->where("content_text", "like", "%{$hashtag}%");
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

        return view("content.index", ["contents" => $contents]);

    }

    public function restoreTag(Content $content) {
       
        $content->tag = !$content->tag;
        $content->save();

        return response()->json(["success" => true]);
    }
}
