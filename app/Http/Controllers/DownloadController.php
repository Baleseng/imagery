<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\FileUpload;
use App\Models\Download;
use App\Models\Payment;
use App\Models\Admin;
use App\Models\Save;
use App\Models\Feed;
use App\Models\User;
use DB;

class DownloadController extends Controller
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



    public function checkout(FileUpload $id,  Request $request){      
        
        $url = 'user';
        FileUpload::find($id);
        
        return view('/download', compact('url','id'));
    }

     /**
    * Create a new controller instance.
    *
    * @return void
    */
    public function store(Request $request){
        
        $ckeck = new Download();

        $ckeck->user_id = $request->user_id;
        $ckeck->file_id= $request->file_id;
        $ckeck->file = $request->file;
        $ckeck->title = $request->title;
        $ckeck->description = $request->description;
        $ckeck->quantity = $request->quantity;
        $ckeck->price = $request->price;

        $ckeck->save();
        return redirect()->route('download', $ckeck->id);
        //return response()->json(['success'=>'Data is successfully added']);
    }
}
