<?php

// namespace App\Http\Controllers;

namespace App\Http\Controllers;

use App\Models\socialorg;
use Carbon\Carbon;
use Illuminate\Http\Request;

class Socialorgization extends Controller
{
    public function registerorg(Request $req)
    {

        // dd($req);
        $socialorg = new Socialorg();
        $clubname = $req->title;
        $catagory = $req->catagory;
        $desc = $req->description;
        $province = $req->province;
        $district = $req->district;
        $item1 = $req->item1 ?? '';
        $item2 = $req->item2 ?? '';
        $item3 = $req->item3 ?? '';
        $latitude = $req->latitude;
        $longitude = $req->longitude;
        ;



        $socialorg->name = $clubname;
        $socialorg->province = $province;
        $socialorg->district = $district;
        $socialorg->catagory = $catagory;
        $socialorg->description = $desc;
        $socialorg->registerdate = Carbon::now()->toDateString();
        $socialorg->latitude = $latitude;
        $socialorg->longitude = $longitude;
        $items = [];
        array_push($items, $item1, $item2, $item3);
        $newitems = json_encode($items);

        $socialorg->itemsaccepted = $newitems;


        // $Post->relation = $rel;
        // $Post->approvedstatus = $app;
        // $Post->pnumber = $pn;
        // $Post->targetamount = $targ;
        $socialorg->save();
        return view('socialorg.registerClubForm')->with('clubadded', "Social Organization added successfully !");

    }
    public function clubmanagment()
    {
        $clubs = socialorg::all();
        return view('socialorg.socialorgapprove')->with('clubdata', $clubs);
    }
    public function approveorg($id)
    {
        $posttoapprove = socialorg::find($id);
        // dd($posttoapprove);
        $posttoapprove['approvedstatus'] = 1;
        $posttoapprove->save();

        return redirect('/superadmin/clubmanagment');
    }
    public function vieworgs()
    {
        $socialorgs = socialorg::all();
        return view('socialorg.clubs')->with('socialorg', $socialorgs);

    }
    public function getdistance($unit = 'K', Request $req)
    {
        $lat1 = $req['latitude'];
        $lon1 = $req['longitude'];
        $distance = [];
        $socialclub = socialorg::all();

        foreach ($socialclub as $k) {
            if ($k['approvedstatus'] == 1) {
                $lat2 = $k['latitude'];
                $lon2 = $k['longitude'];
                $theta = $lon1 - $lon2;
                $dist = sin(deg2rad($lat1)) * sin(deg2rad($lat2)) + cos(deg2rad($lat1)) * cos(deg2rad($lat2)) * cos(deg2rad($theta));
                $dist = acos($dist);
                $dist = rad2deg($dist);
                $miles = $dist * 60 * 1.1515;
                $unit = strtoupper($unit);
                $distance[] = ["$k" => $miles * 1.609344];



            }
            # code...
        }
        sort($distance);
        // dd($distance);
        return view('socialorg/nearlocation')->with('nearclub', $distance);
    }


    public function vieworg($id)
    {
        $org = socialorg::find(($id));

        return view('socialorg/clubDetails')->with('data', $org);
    }
}