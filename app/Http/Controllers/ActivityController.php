<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Models\Activity;
use App\Models\Event;
use Session;

class ActivityController extends Controller
{
    public function add(){
        $r=request(); 

        $addActivity=Activity::create([
            'EventID'=>$r->eventID,
            'date'=>$r->activityDate,
            'time'=>$r->activityTime,
            'description'=>$r->activityDescription,
            'location'=>$r->activityLocation,
        ]);
        Session::flash('success',"Activity create successfully!");
        return redirect()->route('viewActivity');
    }

    public function view(){
        /* $viewActivity=Activity::all(); */

        $viewActivity=DB::table('activities')
        ->leftjoin('events','events.id','=','activities.EventID')
        ->select('activities.*','events.name as eventID')
        ->get();

        return view('showActivity')->with('activities',$viewActivity);
    }

    public function edit($id){
        $activities=Activity::all()->where('id',$id);
        return view('editActivity')->with('activities',$activities)
                                  ->with('eventID', Event::all());
    }

    public function update(){
        $r=request(); // get value from input text. Add event 
        // $r request will receive anything submit from the form.
        $activities=Activity::find($r->id);
        $activities->date=$r->activityDate;
        $activities->time=$r->activityTime;
        $activities->description=$r->activityDescription;
        $activities->location=$r->activityLocation;
        $activities->EventID=$r->eventID;
        $activities->save();
        
        Session::flash('success',"Activity update successfully!");
        return redirect()->route('viewActivity');
    }

    public function delete($id){
        $deleteActivity=Activity::find($id);
        $deleteActivity->delete();
         Session::flash('success',"Activity delete successfully!");
        return redirect()->route('viewActivity');
    }
}