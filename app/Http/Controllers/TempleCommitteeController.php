<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Models\TempleCommittee;
use Session;

class TempleCommitteeController extends Controller
{
    public function add(){
        $r=request(); 

        $addCommittee=TempleCommittee::create([
            'name'=>$r->TCommitteeName,
            'position'=>$r->TCommitteePosition,
            'temple'=>$r->TCommitteeTemple,
            'location'=>$r->TCommitteeLocation,
            'electedTime'=>$r->TCommitteeElectedTime,
            'numberOfTimesElection'=>$r->TCommitteeElectionTime,
        ]);
        Session::flash('success',"Committee create successfully!");
        return redirect()->route('viewCommittee');
    }

    public function view(){
        $viewCommittee=TempleCommittee::all();

        return view('showCommittee')->with('temple_committees',$viewCommittee);
    }

    public function edit($id){
        $committees=TempleCommittee::all()->where('id',$id);
        return view('editCommittee')->with('temple_committees',$committees);
    }

    public function update(){
        $r=request(); 
        
        $committees=TempleCommittee::find($r->id);
        $committees->name=$r->TCommitteeName;
        $committees->position=$r->TCommitteePosition;
        $committees->temple=$r->TCommitteeTemple;
        $committees->location=$r->TCommitteeLocation;
        $committees->electedTime=$r->TCommitteeElectedTime;
        $committees->numberOfTimesElection=$r->TCommitteeElectionTime;
        $committees->save();
        
        Session::flash('success',"Committee update successfully!");
        return redirect()->route('viewCommittee');
    }

}
