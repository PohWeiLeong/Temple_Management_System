<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Models\Sponsor;
use App\Models\User;
use Session;

class SponsorController extends Controller
{
    public function add(){
        $r=request(); // get value from input text. Add product 
        // $r request will receive anything submit from the form.

        $addSponsor=Sponsor::create([
            'UserID'=>$r->userID,
            'name'=>$r->sponsorName,
            'amount'=>$r->sponsorAmount,
            'description'=>$r->sponsorDescription,
        ]);
        Session::flash('success',"Sponsor added successfully!");
        return redirect()->route('viewSponsor');
    }
    public function view(){

        $viewSponsor=DB::table('sponsors')
        ->leftjoin('users','users.id','=','sponsors.UserID')
        ->select('sponsors.*','users.name as userID')
        ->get();

        return view('showSponsor')->with('sponsors',$viewSponsor);
    }

    public function delete($id){
        $deleteSponsor=Sponsor::find($id);
        $deleteSponsor->delete();
         Session::flash('success',"Sponsor delete successfully!");
        return redirect()->route('viewSponsor');
    }
}
