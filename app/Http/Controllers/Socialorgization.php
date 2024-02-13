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
}