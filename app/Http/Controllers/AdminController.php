<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use App\Models\FileUpload;
use App\Models\Popular;
use App\Models\Creator;
use App\Models\Admin;
use App\Models\User;
use App\Models\Track;
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
        
        $live = DB::table('tracks')->orderBy('id','desc')->get();

        $reviews = DB::table('file_uploads')
        ->where('file_status','review')->get();

        $submits = DB::table('file_uploads')
        ->where('file_status','submit')->get();

        $archives = DB::table('file_uploads')
        ->where('file_status','archive')->get();

        $popular = DB::table('populars')->get();
        
        return view('/admin/dashboard', compact('url','live','reviews','submits','popular','archives'));
    }
    /*|-------------------------------- EDIT PAPGE ----------------------------------|*/
    public function edit(FileUpload $id, Admin $admin, Request $request){ 
        
        $url = 'admin';
        FileUpload::find($id);
        $admin = Admin::first();
        return view('admin.edit',compact('url','id','admin'));
    }
    public function update(FileUpload $id, Request $request){
        
        $url = 'admin';
        
        FileUpload::find($id);

        $id->status = $request->get('file_status');

        $id->admin_id = $request->get('admin_id');
        $id->creator_id = $request->get('creator_id');

        $id->file_name = $request->get('file_name');
        $id->description = $request->get('file_description');
        $id->keywords = $request->get('file_keywords');
        $id->category = $request->get('file_category');

        $id->usage = $request->get('file_usage');
        $id->orientation = $request->get('file_orientation');

        $id->standard = $request->get('file_standard');
        $id->extended = $request->get('file_extended');
        $id->enhance = $request->get('file_enhance');
        $id->editorial = $request->get('file_editorial');

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

    /*|-------------------------------- ARCHIVE PAPGE ----------------------------------|*/

    public function archived(FileUpload $id, Request $request){
        
        $url = 'admin';
        
        FileUpload::find($id);

        $id->admin_id = $request->get('admin_id');
        $id->creator_id = $request->get('creator_id');

        $id->file_name = $request->get('file_name');
        
        $id->file_status = $request->get('file_status');
        $id->file_type = $request->get('file_type');
        $id->file_title = $request->get('file_title');
        $id->file_usage = $request->get('file_usage');
        $id->file_country = $request->get('file_country');
        $id->file_category = $request->get('file_category');
        $id->file_description = $request->get('file_description');
        $id->file_orientation = $request->get('file_orientation'); 
        $id->file_keywords = $request->get('file_keywords');
        $id->file_standard = $request->get('file_standard');
        $id->file_extended = $request->get('file_extended');
        $id->file_enhance = $request->get('file_enhance');
        $id->file_editorial = $request->get('file_editorial');
        
        $id->save(); 
        return redirect('admin');    
    }

    /*|-------------------------------- LOCATION ----------------------------------|*/
    public function region(FileUpload $id, Admin $admin, Request $request){      
        
        $url = 'admin';
        FileUpload::find($id);
                $creator= Admin::first();

        return view('/admin/region', compact('url','id','admin'));
    }

    /*|-------------------------------- EARNINGS ----------------------------------|*/
    public function earning(Request $request){      
        $url = 'admin';
        return view('/admin/earnings', compact('url'));
    }
    /*|-------------------------------- PORTFOLIO ----------------------------------|*/
    public function portfolio(Request $request){      
        $url = 'admin';
        return view('/admin/portfolio', compact('url'));
    }
    /*|-------------------------------- INSIGHT ----------------------------------|*/
    public function insight(Request $request){      
        $url = 'admin';
        return view('/admin/insight', compact('url'));
    }

    /*|-------------------------------- PAPGE ----------------------------------|*/
    public function profile(Admin $id, Request $request){      
        
        $url = 'admin';
        Admin::find($id);

        return view('/admin/profile', compact('url','id'));
    }
}
