<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\FileUpload;
use App\Models\Payment;
use App\Models\Admin;
use App\Models\Save;
use App\Models\Feed;
use App\Models\User;
use DB;

class PaymentController extends Controller
{
    /**
    * Create a middleware instance.
    *
    * @return void
    */
    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
    * Show the application dashboard.
    *
    * @return \Illuminate\Contracts\Support\Renderable
    */



    public function checkout(Payment $id,  Request $request){      
        
        $url = 'user';
        Payment::find($id);
        
        return view('/payment', compact('url','id'));
    }

     /**
    * Create a new controller instance.
    *
    * @return void
    */
    public function store(Request $request){
        
        $ckeck = new Payment();

        $ckeck->user_id = $request->user_id;
        $ckeck->creator_id = $request->creator_id;
        $ckeck->file_id= $request->file_id;
        $ckeck->file = $request->file;
        $ckeck->title = $request->title;
        $ckeck->description = $request->description;
        $ckeck->quantity = $request->quantity;
        $ckeck->type = $request->type;
        $ckeck->price = $request->price;

        
        $ckeck->cardholdername = $request->cardholdername;
        /**$ckeck->cardholdernumber = $request->cardholdernumber;
        $ckeck->cardholderexpire = $request->cardholderexpire;
        $ckeck->cardholdercvv = $request->cardholdercvv;
        $ckeck->cardholderaddress = $request->cardholderaddress;
        $ckeck->cardholderaddressopt = $request->cardholderaddressopt;
        $ckeck->cardholdercountry = $request->cardholdercountry;
        $ckeck->cardholderprovince = $request->cardholderprovince;
        $ckeck->cardholderzip = $request->cardholderzip;
        **/


        $ckeck->save();

        return redirect()->route('payment', $ckeck->id.'=?title'.$ckeck->title);
        //return response()->json(['success'=>'Data is successfully added']);
    }
}
