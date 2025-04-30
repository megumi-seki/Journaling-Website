<?php

namespace App\Http\Controllers;

use App\Models\Content;
use App\Models\User;
use Illuminate\Http\Request;

class PublicController
{
    public function index()
    {
        $user = User::first();
        $contents = Content::orderBy("created_at","desc")
            ->with(["hashtags", "user", "publicTaggedUsers"])
            ->get();
        return view("public.index", ["contents" => $contents, "user" => $user]);
    }
}
