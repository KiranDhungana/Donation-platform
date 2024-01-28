<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;


class PostController extends Controller
{

    public function like()
    {
        dd(Post::find(1)->like);
    }

}