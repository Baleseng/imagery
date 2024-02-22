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
    public function index(Admin $admin, Request $request){      
        
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

        $id->admin_id = $request->get('admin_id');
        $id->description = $request->get('description');
        $id->keywords = $request->get('keywords');
        $id->category = $request->get('category');

        $id->usage = $request->get('usage');
        $id->standard = $request->get('standard');
        $id->extended = $request->get('extended');
        $id->enhance = $request->get('enhance');
        $id->editorial = $request->get('editorial');

        $id->status = $request->get('status');
        
        $id->save(); 
        return redirect('admin');    
    }

     /*|-------------------------------- PAPGE ----------------------------------|*/
    public function preview(FileUpload $id, Admin $admin, Request $request){      
        
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

    /*|-------------------------------- PAPGE ----------------------------------|*/
    public function profile(Admin $id, Request $request){      
        
        $url = 'admin';
        Admin::find($id);

        return view('/admin/profile', compact('url','id'));
    }
}
