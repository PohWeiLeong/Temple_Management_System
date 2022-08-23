<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Models\Maintenance;
use App\Models\Provider;
use Session;

class MaintenanceController extends Controller
{
    public function add(){
        $r=request(); // get value from input text. Add product 
        // $r request will receive anything submit from the form.

        $addMaintenance=Maintenance::create([
            'ProviderID'=>$r->providerID,
            'date'=>$r->maintenanceDate,
            'time'=>$r->maintenanceTime,
            'location'=>$r->maintenanceLocation,
        ]);
        Session::flash('success',"Maintenance added successfully!");
        return redirect()->route('viewMaintenance');
    }
    public function view(){
        /* $viewMaintenance=Maintenance::all(); */

        $viewMaintenance=DB::table('maintenances')
        ->leftjoin('providers','providers.id','=','maintenances.ProviderID')
        ->select('maintenances.*','providers.name as providerID')
        ->get();

        return view('showMaintenance')->with('maintenances',$viewMaintenance);
    }

}
