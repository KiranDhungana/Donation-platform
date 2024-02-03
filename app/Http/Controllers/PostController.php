<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\Like;
use Illuminate\Support\Facades\Auth;


class PostController extends Controller
{

    // public function like()
    // {

    //     // $find = (Post::find(1));
    //     $data = Post::with('like')->get();
    //     foreach ($data as $i) {
    //         echo ($i['description']);
    //         echo ($i['like']->likes);
    //     }



    // }
    public function helpform(Request $req)
    {
        // dd($req);
        $uid = Auth::user()->id;
        $Post = new Post();
        $citizenNames = [];
        if ($req->file('citizenship'))
            foreach ($req->file('citizenship') as $img) {

                $imgname = time() . '.' . $img->getClientOriginalName();
                $img->storeAs('public/citizenships', $imgname);
                $citizenNames[] = $imgname;
            }
        $uplo_file = json_encode($citizenNames);
        $des = $req->description;
        $fname = $req->fname;
        $lname = $req->lname;
        $mname = $req->mname;
        $rel = $req->relation;
        $pn = $req->phonenumber;
        $tar = $req->amounta;
        // $citizenship = $req->citizenship;
        // $officialdocs = $req->officialdocs;
        // $photo = $req->photo;
        $Post->description = $des;
        $Post->fname = $fname;
        $Post->uid = $uid;
        $Post->mname = $mname;
        $Post->lname = $lname;
        $Post->relation = $rel;
        $Post->pnumber = $pn;
        $Post->citizenship = $uplo_file;

        $Post->targetamount = $tar;
        $Post->save();

        dd("Saved");






    }
    public function viewpost()
    {
        // $data = Post::with('like')->get();
        // foreach ($data as $i) {
        //     dd($i['relation']);
        //     dd($i['like']->likes);
        // }
        $post = Post::all();
        return view('homepage.campaignPost')->with('post', $post);
    }

    public function viewpostdetail($id)
    {
        $postinfo = Post::find($id);
        return view('campaignpage.campaignview')->with('campaindata', $postinfo);

    }
    public function like(Request $req)
    {

        $likedData = $req->json()->all();
        $liked = $req->input('liked');
        $postid = $req->input('postid');
        $userid = Auth::user()->id;
        // $post = Post::find($postid);
        // $post = DB::table('likes')->where('postid', $postid)->first();
        $checkexist = Like::where('postid', $postid)->where('uid', $userid)->exists();
        if ($checkexist) {
            $updatelike = Like::where('postid', $postid)->where('uid', $userid)->first();
            if ($liked == 'true') {
                $updatelike->likes = 1;
                // $updatelike->uid = $userid;
                $updatelike->save();


            } else if ($liked == 'false') {
                $updatelike->likes = 0;
                // $updatelike->uid = $userid;
                $updatelike->save();
            } else {
                // $updatelike->likes = $updatelike->likes ;

            }
        } else {
            $post = new Like();
            $post->uid = $userid;
            $post->postid = $postid;
            if ($liked == 'true') {
                $post->likes = 1;
                // $updatelike->uid = $userid;
                $post->save();


            } else if ($liked == 'false') {
                $post->likes = 0;
                // $post->uid = $userid;
                $post->save();
            } else {
                // $updatelike->likes = $updatelike->likes ;

            }

        }




        $userid = $req->input('userid');


        // Here, you can process the liked data, save it to a database, etc.
        // For demonstration purposes, let's just log the data.
        // Log::info('Liked Data:', $likedData);

        // Respond with a success message
        return response()->json([$liked, $postid, $userid]);
    }

    public function getlikes($id)
    {
        $userid = Auth::user()->id;
        if (Like::where('postid', $id)->where('uid', $userid)->exists()) {
            $liked = Like::where('postid', $id)->where('likes', 1)->get();
        }
        // $likedstatus =
        $postlikes = Like::where('postid', $id)->where('likes', 1)->count();

        return response()->json([$postlikes, $liked]);
    }
}