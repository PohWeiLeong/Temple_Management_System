<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Models\Event;
use App\Models\Supplier;
use Session;

class EventController extends Controller
{
    public function add(){
        $r=request(); // get value from input text. Add event 
        // $r request will receive anything submit from the form.

        $addEvent=Event::create([
            'SupplierID'=>$r->supplierID,
            'name'=>$r->eventName,
            'title'=>$r->eventTitle,
            'date'=>$r->eventDate,
            'time'=>$r->eventTime,
            'description'=>$r->eventDescription,
            'location'=>$r->eventLocation,
        ]);
        Session::flash('success',"Event create successfully!");
        return redirect()->route('viewEvent');
    }

    public function view(){
        /* $viewEvent=Event::all(); */

        $viewEvent=DB::table('events')
        ->leftjoin('suppliers','suppliers.id','=','events.SupplierID')
        ->select('events.*','suppliers.name as supplierID')
        ->get();

        return view('showEvent')->with('events',$viewEvent);
    }

    public function edit($id){
        $events=Event::all()->where('id',$id);
        return view('editEvent')->with('events',$events)
                                  ->with('supplierID', Supplier::all());
    }

    public function update(){
        $r=request(); // get value from input text. Add event 
        // $r request will receive anything submit from the form.
        $events=Event::find($r->id);
        $events->name=$r->eventName;
        $events->title=$r->eventTitle;
        $events->date=$r->eventDate;
        $events->time=$r->eventTime;
        $events->description=$r->eventDescription;
        $events->location=$r->eventLocation;
        $events->SupplierID=$r->supplierID;
        $events->save();
        
        Session::flash('success',"Event update successfully!");
        return redirect()->route('viewEvent');
    }

    public function delete($id){
        $deleteEvent=Event::find($id);
        $deleteEvent->delete();
         Session::flash('success',"Event delete successfully!");
        return redirect()->route('viewEvent');
    }
}
