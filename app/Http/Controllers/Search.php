<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class Search extends Controller
{
    public function search(Request $request)
    {
        $query = $request->get('query');

        $results = Post::where('title', 'like', '%' . $query . '%')->orwhere('description', 'like', '%' . $query . '%')->get();

        return response()->json($results);
    }

}