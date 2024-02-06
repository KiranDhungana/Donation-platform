<?php

namespace App\Http\Controllers;

use App\Models\Post;

use Illuminate\Http\Request;

class Superadmin extends Controller
{

    public function viewdocuments($id)
    {
        $postdata = Post::find($id);
        // dd($postdata);
        return view('superadmin/viewdocuments')->with('docs', $postdata);
    }
    public function approveform($id)
    {

        $posttoapprove = Post::find($id);
        $posttoapprove['approvedstatus'] = 1;
        $posttoapprove->save();

        return redirect('/post-to-approve');
    }
}