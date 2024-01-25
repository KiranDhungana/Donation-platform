<?php

namespace App\Http\Controllers\api;

// namespace App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Post;


class PostController extends Controller
{
    public function addpost(Request $req)
    {
        $Post = new Post();
        $des = $req->description;
        $rel = $req->relation;
        $app = $req->approvedstatus;
        $pn = $req->phoneno;
        $targ = $req->target;
        $Post->description = $des;
        $Post->relation = $rel;
        $Post->approvedstatus = $app;
        $Post->pnumber = $pn;
        $Post->targetamount = $targ;
        $Post->save();
        return response()->json([
            'status' => 200,
            'msg ' => 'created successfully',
        ], 200);






    }
}