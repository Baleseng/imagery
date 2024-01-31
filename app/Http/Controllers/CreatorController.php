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
    public function index(Request $request){      
        
        $url = 'creator';
        
        $reviews = DB::table('file_uploads')
        ->where('creator_id', auth()->id())
        ->where('status','review')->get();

        $submits = DB::table('file_uploads')
        ->where('creator_id', auth()->id())
        ->where('status','submit')->get();

        $archives = DB::table('file_uploads')
        ->where('creator_id', auth()->id())
        ->where('status','archive')->get();
        
        return view('/creator/dashboard', compact('url','reviews','submits','archives'));
    }

    /*|-------------------------------- ADD & EDIT ----------------------------------|*/
    public function add(){
        $url = 'admin';
        return view('creator/add', compact('url'));
    }
    public function store(Request $request){

        
        $request->validate([
            'file' => 'required|mimes:pdf,jpg,jpeg,png|max:2048',
            'title' => 'required',
            'description' => 'required',
            'keywords' => 'required',
            'category' => 'required',
            'country' => 'required',
        ]);

        $fileModel = new FileUpload;

        $fileModel->creator_id=$request->post('creator_id');
        $fileModel->status=$request->post('status');

        $fileModel->title=$request->post('title');
        $fileModel->type=$request->post('type');
        $fileModel->usage=$request->post('usage');
        $fileModel->description=$request->post('description');
        $fileModel->keywords=$request->post('keywords');
        $fileModel->category=$request->post('category');
        $fileModel->country=$request->post('country');
        
        if($request->file()) {
            $fileName = time().'_'.$request->file->getClientOriginalName();
            $filePath = $request->file('file')->storeAs('images', $fileName, 'public');
            $fileModel->file_name = time().'_'.$request->file->getClientOriginalName();
            $fileModel->file_path = '/storage/images/' . $filePath;    
            $fileModel->save();
            return redirect('creator')
            ->with('success','File has been uploaded.')
            ->with('file', $fileName);
        }

    }

    public function edit(FileUpload $id, Creator $creator, Request $request){ 
        $url = 'creator';
        FileUpload::find($id);
        $creator = Creator::first();
        return view('creator.edit',compact('url','id','creator'));
    }
    public function update(FileUpload $id, Request $request){
        $url = 'creator';
        FileUpload::find($id);
        
        if($request->file()) {
            $fileName = time().'_'.$request->file->getClientOriginalName();
            $filePath = $request->file('file')->storeAs('images', $fileName, 'public');
            $id->name = time().'_'.$request->file->getClientOriginalName();
            $id->file_path = '/storage/images/' . $filePath;    
            $id->save();
            return redirect('creator')
            ->with('success','File has been uploaded.')
            ->with('file', $fileName);
        }

        $id->usage = $request->get('usage');
        $id->description = $request->get('description');
        $id->keywords = $request->get('keywords');
        $id->category = $request->get('category');
        $id->status = $request->get('status');
        $id->save(); 
        return redirect('creator');    
    }

     /*|-------------------------------- PAPGE ----------------------------------|*/
    public function files(FileUpload $id, Creator $creator, Request $request){      
        
        $url = 'creator';
        FileUpload::find($id);
        $creator= Creator::first();

        return view('/creator/preview', compact('url','id','creator'));
    }

    /*|-------------------------------- LOCATION ----------------------------------|*/
    public function region(FileUpload $id, Creator $creator, Request $request){      
        
        $url = 'creator';
        FileUpload::find($id);
        $creator= Creator::first();

        return view('/creator/region', compact('url','id','creator'));
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
