<?php

namespace App\Http\Controllers;
use DB;
use App\Models\User;
use Session;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function view(){
        $viewUser=User::all(); // generate SQL select * from User
        return view('showUser')->with('users',$viewUser);
    }

    public function delete($id){
        $deleteUser=User::find($id);
        $deleteUser->delete();
         Session::flash('success',"User delete successfully!");
        return redirect()->route('viewUser');
    }
}
