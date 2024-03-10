<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\Payment;
use App\Models\Like;
use Illuminate\Support\Facades\Auth;
use App\Helpers\Http;

class PostController extends Controller
{

    public function gotopay($id)
    {

        return view('paymoney')->with('id', $id);



    }
    public function helpform(Request $req)
    {
        // dd($req);
        $uid = Auth::user()->id;
        $Post = new Post();
        $citizenNames = [];
        $officialdoc = [];
        $photos = [];
        if ($req->file('citizenship'))
            foreach ($req->file('citizenship') as $img) {

                $imgname = time() . '.' . $img->getClientOriginalName();
                $img->storeAs('public/citizenships', $imgname);
                $citizenNames[] = $imgname;
            }
        $citizenship = json_encode($citizenNames);
        if ($req->file('officialdocs'))
            foreach ($req->file('officialdocs') as $img) {

                $imgname = time() . '.' . $img->getClientOriginalName();
                $img->storeAs('public/officialdocs', $imgname);
                $officialdoc[] = $imgname;
            }
        $officialdocs = json_encode($officialdoc);
        if ($req->file('photos'))
            foreach ($req->file('photos') as $img) {

                $imgname = time() . '.' . $img->getClientOriginalName();
                $img->storeAs('public/photos', $imgname);
                $photos[] = $imgname;
            }
        $photos = json_encode($photos);



        $des = $req->description;
        $title = $req->title;
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
        $Post->title = $title;
        $Post->lname = $lname;
        $Post->relation = $rel;
        $Post->pnumber = $pn;
        $Post->citizenship = $citizenship;
        $Post->photos = $photos;
        $Post->officialdocs = $officialdocs;

        $Post->targetamount = $tar;
        $Post->save();

        dd("Post submited successfully ! Wait for admin approval");






    }
    public function viewpost()
    {
        // $data = Post::with('like')->get();
        // foreach ($data as $i) {
        //     dd($i['relation']);
        //     dd($i['like']->likes);
        // }
        $post = Post::all();
        $like = like::all();

        return view('homepage.campaignPost')->with('post', $post)->with('like', $like);
    }

    public function viewpostdetail($id)
    {
        $postinfo = Post::find($id);
        $payment = Payment::where('postid', $id)->get()->first();
        $totalpayemtn = Payment::where('postid', $id)->get();
        $totalamount = 0;
        foreach ($totalpayemtn as $pay) {
            $totalamount = $pay['amount'] + $totalamount;

        }
        return view('campaignpage.campaignview')->with('campaindata', $postinfo, )->with('amount', $payment)->with('totalamount', $totalamount);

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
    public function payment(Request $req)
    {
        $paymentdata = ($req['data']);
        // dd($paymentdata);
        $decodeddata = json_decode(base64_decode($paymentdata), true);
        $exploded = explode('-', $decodeddata['transaction_uuid']);

        echo ($decodeddata['status']);
        echo '<br>';
        echo ($decodeddata['transaction_code']);
        echo '<br>';
        echo ($decodeddata['total_amount']);
        echo '<br>';
        echo ($decodeddata['transaction_uuid']);
        // echo ($exploded);
        $uidandpid = $decodeddata['transaction_uuid'];
        $string = $uidandpid;
        $secondHyphenPos = strpos($string, '-', strpos($string, '-') + 1);
        $thirdHyphenPos = strpos($string, '-', $secondHyphenPos + 1);
        $uid = substr($string, $secondHyphenPos + 1, $thirdHyphenPos - $secondHyphenPos - 1);
        $postid = substr($string, $thirdHyphenPos + 1);

        $payment = new Payment;
        if ($decodeddata['status'] === "COMPLETE") {
            $payment->amount = $decodeddata['total_amount'];
            $payment->uid = $uid;
            $payment->postid = $postid;
            $payment->transictionid = $uidandpid;
            $payment->paidtime = now();

            $payment->save();
            return redirect('/view-post/' . $postid);
        } else {
            echo 'payment status is ' + $decodeddata['status'];

        }

    }
    public function recomend($id)
    {
        // $records = DB::table('likes')->where('uid', $id)->get();
        // $flood = 0;
        // $landslide = 0;
        // $cancer = 0;
        // $tb = 0;
        // $physicalinjuries = 0;
        // $fire = 0;
        // foreach ($records as $r) {
        //     $post = Post::find($r->postid);
        //     $flood = $post::where('catagory', 'flood')->count();
        //     $landslide = $post::where('catagory', 'landslide')->count();
        //     $cancer = $post::where('catagory', 'cancer')->count();
        //     $tb = $post::where('catagory', 'tb')->count();
        //     $physicalinjuries = $post::where('catagory', 'physicalinjuries')->count();
        //     $fire = $post::where('catagory', 'fire')->count();

        // }

        // dd($flood > $landslide > $cancer);
        // $values = ['flood' => $flood, 'landslide' => $landslide, 'cancer' => $cancer, 'tb' => $tb, 'physicalinjuries' => $physicalinjuries, 'fire' => $fire];
        // $maxValue = max($values); // Find the highest value
        // $maxVariable = array_search($maxValue, $values); // Find the variable name containing that value

        // $post = DB::table('posts')->where('catagory', $maxVariable)->get();
        // return view('recomended')->with('post', $post);

        // $data = Http::get('http://127.0.0.1:7000/campaigns/$id');
        // $posts = json_decode($data->getBody()->getContents());
        // dd($posts);
        // $client = new \GuzzleHttp\Client();
        // $response = $client->get('https://jsonplaceholder.typicode.com/posts'); 
        // return $response;

        // $data = Http::get('http://127.0.0.1:7000/campaigns/', [
        //     'pk' => $id,
        //     // $data = Http::get()
        // ]);
        $data = Http::get('http://127.0.0.1:7000/campaigns/' . $id);
        $posts = json_decode($data->getBody()->getContents());
        $new_data = Post::all();
        return view('recomended')->with('allpost', $new_data)->with('recpost', $posts);
        // dd($posts);


    }
    public function donationinfo()
    {
        $totalAmounts = Payment::groupBy('postid')
            ->select('postid', DB::raw('sum(amount) as total_amount'))
            ->get();
        return view('superadmin/donationinfo')->with('donationamount', $totalAmounts);


    }
}