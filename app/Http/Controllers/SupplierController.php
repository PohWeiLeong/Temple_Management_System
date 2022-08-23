<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Models\Supplier;
use Session;

class SupplierController extends Controller
{
    public function add(){
        $r=request(); // get value from input text. Add product 
        // $r request will receive anything submit from the form.

        $addSupplier=Supplier::create([
            'name'=>$r->supplierName,
            'email'=>$r->supplierEmail,
        ]);

        Session::flash('success',"Supplier added successfully!");
        return redirect()->route('viewSupplier');
    }
    public function view(){
        $viewSupplier=Supplier::all(); // generate SQL select * from Supplier
        return view('showSupplier')->with('suppliers',$viewSupplier);
    }
}
