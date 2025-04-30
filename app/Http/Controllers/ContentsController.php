<?php

namespace App\Http\Controllers;

use App\Models\Content;
use App\Models\User;
use Illuminate\Http\Request;


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
            ->get();
        return view("journal.index", ["contents" => $contents]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("journal.create");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
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
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
