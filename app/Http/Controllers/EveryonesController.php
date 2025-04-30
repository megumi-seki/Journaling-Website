<?php

namespace App\Http\Controllers;

use App\Models\Content;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class EveryonesController
{
    public function index()
    {
        $user = User::first();
        $contents = Content::orderBy("created_at","desc")
            ->take(10)
            ->with(["hashtags", "user", "publicTaggedUsers",  "sentHugUsers", "sentHeartUsers"])
            ->paginate(15);
        return view("everyones.index", ["contents" => $contents, "user" => $user]);
    }

}
