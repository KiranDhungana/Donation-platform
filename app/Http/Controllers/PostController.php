<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;


class PostController extends Controller
{

    public function like()
    {

        // $find = (Post::find(1));
        $data = Post::with('like')->get();
        foreach ($data as $i) {
            echo ($i['description']);
            echo ($i['like']->likes);
        }


    }

}