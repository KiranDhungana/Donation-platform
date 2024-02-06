<?php

namespace App\Http\Controllers;

use App\Models\Post;

use Illuminate\Http\Request;

class Superadmin extends Controller
{

    public function viewdocuments($id)
    {
        $postdata = Post::find($id)->get();
        dd($postdata);
    }

}