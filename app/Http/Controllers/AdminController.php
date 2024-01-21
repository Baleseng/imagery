<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use App\Models\FileUpload;
use App\Models\Creator;
use App\Models\Admin;
use App\Models\User;
use DB;

class AdminController extends Controller
{
    /**
    * Create a middleware instance.
    *
    * @return void
    */
    public function __construct()
    {
        $this->middleware('auth:admin');
    }

    /*|-------------------------------- INDEX PAPGE ----------------------------------|*/
    public function index(Request $request){      
        
        $url = 'admin';
        
        $reviews = DB::table('file_uploads')
        ->where('status','review')->get();

        $submits = DB::table('file_uploads')
        ->where('status','submit')->get();

        $archives = DB::table('file_uploads')
        ->where('status','archive')->get();
        
        return view('/admin/dashboard', compact('url','reviews','submits','archives'));
    }

    public function edit(FileUpload $id, Admin $admin, Request $request){ 
        $url = 'admin';
        FileUpload::find($id);
        $admin = Admin::first();
        return view('admin.edit',compact('url','id','admin'));
    }
    public function update(FileUpload $id, Request $request){
        $url = 'admin';
        FileUpload::find($id);
        $id->description = $request->get('description');
        $id->keywords = $request->get('keywords');
        $id->category = $request->get('category');
        $id->status = $request->get('status');
        $id->usage = $request->get('usage');
        $id->save(); 
        return redirect('admin');    
    }

     /*|-------------------------------- PAPGE ----------------------------------|*/
    public function files(FileUpload $id, Admin $admin, Request $request){      
        
        $url = 'admin';
        FileUpload::find($id);
        $creator= Admin::first();

        return view('/admin/preview', compact('url','id','admin'));
    }

    /*|-------------------------------- LOCATION ----------------------------------|*/
    public function region(FileUpload $id, Admin $admin, Request $request){      
        
        $url = 'admin';
        FileUpload::find($id);
        $creator= Admin::first();

        return view('/admin/region', compact('url','id','admin'));
    }
}
