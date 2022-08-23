<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Models\Provider;

class ProviderController extends Controller
{
    public function add(){
        $r=request();
        $addProvider=Provider::create([
            'name'=>$r->providerName,
            'email'=>$r->providerEmail,
        ]);
        return redirect()->route('viewProvider');
    }

    public function view(){
        $viewProvider=Provider::all(); // generate SQL select * from Provider
        return view('showProvider')->with('providers',$viewProvider);
    }
}
