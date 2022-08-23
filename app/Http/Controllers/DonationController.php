<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DonationController extends Controller
{
    public function __construct(){
        $this->middleware('auth');
    }

    public function add(){
        $r=request(); // get value from input text. Add product 
        // $r request will receive anything submit from the form.

        $image=$r->file('productImage');
        $image->move('images',$image->getClientOriginalName());
        $imageName=$image->getClientOriginalName();

        $addProduct=Product::create([
            'CategoryID'=>$r->categoryID,
            'name'=>$r->productName,
            'description'=>$r->productDescription,
            'price'=>$r->productPrice,
            'quantity'=>$r->productQuantity,
            'image'=>$imageName,
        ]);
        Session::flash('success',"Product create successfully!");
        return redirect()->route('viewProduct');
    }

    public function paymentPost(Request $request)
    {
	       
	Stripe\Stripe::setApiKey(env('STRIPE_SECRET'));
        Stripe\Charge::create ([
            "amount"=>$request->sub*100,
            "currency"=>"MYR",
            "source"=>$request->stripeToken,
            "description"=>"This payment is testing purpose of southern online",
        ]);
 
        $newOrder=myOrder::Create([
            'paymentStatus'=>'Done',
            'userID'=>Auth::id(), 
            'amount'=>$request->sub,
        ]);

        $orderID=DB::table('my_orders')->where('userID','=',Auth::id())->orderBy('created_at','desc')->first(); // get the order ID just now created

        $items=$request->input('cid');
        foreach($items as $item=>$value){
            $carts=myCart::find($value);   //get the cart item record
            $carts->orderID=$orderID->id;  //binding the orderID value with record
            $carts->save();
        }
        (new CartController)->cartItem();
        $email="weileong0217@gmail.com";
        Notification::route('mail',$email)->notify(new \App\Notifications\orderPaid($email));
        
        return back();
    }
}
