<?php

namespace App\Http\Controllers\api;

// namespace App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Post;


class Clubcontroller extends Controller
{
    public function addclub(Request $req)
    {
        // $Post = new Post();
        $clubname = $req->cname;
        $clatitude = $req->latitude;
        $clongitude = $req->longitude;
        $ccatagory = $req->catagory;

        // $rel = $req->relation;
        // $app = $req->approvedstatus;
        // $pn = $req->phoneno;
        // $targ = $req->target;
        // $Post->description = $des;
        // $Post->relation = $rel;
        // $Post->approvedstatus = $app;
        // $Post->pnumber = $pn;
        // $Post->targetamount = $targ;
        // $Post->save();
        return response()->json([

            'data' => $req->all()
        ], 200);






    }
    // public function like(Request $req)
    // {

    //     $likedData = $req->json()->all();

    //     // Here, you can process the liked data, save it to a database, etc.
    //     // For demonstration purposes, let's just log the data.
    //     // Log::info('Liked Data:', $likedData);

    //     // Respond with a success message
    //     return response()->json(['message' => 'Like received successfully']);
    // }
}