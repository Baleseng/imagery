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

class CreatorController extends Controller
{
    /**
    * Create a middleware instance.
    *
    * @return void
    */
    public function __construct()
    {
        $this->middleware('auth:creator');
    }

    /*|-------------------------------- DASHBOARD ----------------------------------|*/
    public function dashboard(Request $request){      
        $url = 'creator';
        $reviews = DB::table('file_uploads')->where('status','review')->get();
        return view('/creator/dashboard', compact('url','reviews'));
    }

    /*|-------------------------------- ADD & EDIT ----------------------------------|*/
    public function add(){
        return view('creator/add');
    }
    public function store(Request $request){
        
        $request->validate(['file' => 'required|mimes:pdf,jpg,jpeg,png|max:2048']);
        $fileModel = new FileUpload;

        $fileModel->creator_id=$request->post('creator_id');
        $fileModel->status=$request->post('status');
        $fileModel->title=$request->post('title');
        $fileModel->description=$request->post('description');
        $fileModel->keywords=$request->post('keywords');
        $fileModel->category=$request->post('category');
        $fileModel->country=$request->post('country');
        $fileModel->usage=$request->post('usage');
        $fileModel->type=$request->post('type');

        
        if($request->file()) {
            $fileName = time().'_'.$request->file->getClientOriginalName();
            $filePath = $request->file('file')->storeAs('uploads', $fileName, 'public');
            $fileModel->name = time().'_'.$request->file->getClientOriginalName();
            $fileModel->file_path = '/public/' . $filePath;    
            $fileModel->save();
            return redirect('creator')
            ->with('success','File has been uploaded.')
            ->with('file', $fileName);
        }

    }

    public function edit(FileUpload $upload, Creator $creator, Request $request){ 
        $url = 'creator';
        FileUpload::find($upload);
        $creator = Creator::first();
        return view('creator.edit',compact('url','upload','creator'));
    }
    public function update(FileUpload $upload, Request $request){
        $url = 'creator';
        FileUpload::find($upload);
        $upload->usage = $request->get('usage');
        $upload->description = $request->get('description');
        $upload->keywords = $request->get('keywords');
        $upload->category = $request->get('category');
        $upload->status = $request->get('status');
        $upload->save(); 
        return redirect('creator');    
    }

     /*|-------------------------------- PAPGE ----------------------------------|*/
    public function files(Request $request){      
        $url = 'creator';
        return view('/creator/file', compact('url'));
    }
    /*|-------------------------------- LOCATIOn ----------------------------------|*/
    public function region(Request $request){      
        $url = 'creator';
        return view('/creator/region', compact('url'));
    }

    /*|-------------------------------- EARNINGS ----------------------------------|*/
    public function earning(Request $request){      
        $url = 'creator';
        return view('/creator/earnings', compact('url'));
    }
    /*|-------------------------------- PORTFOLIO ----------------------------------|*/
    public function portfolio(Request $request){      
        $url = 'creator';
        return view('/creator/portfolio', compact('url'));
    }
    /*|-------------------------------- INSIGHT ----------------------------------|*/
    public function insight(Request $request){      
        $url = 'creator';
        return view('/creator/insight', compact('url'));
    }
    /*|-------------------------------- INSIGHT ----------------------------------|*/
    public function profile(Request $request){      
        $url = 'creator';
        return view('/creator/profile', compact('url'));
    }

}
