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
use App\Models\Feed;
use App\Models\TrackingLog;
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
        ->where('file_status','review')->get();

        $submits = DB::table('file_uploads')
        ->where('creator_id', auth()->id())
        ->where('file_status','submit')->get();

        $archives = DB::table('file_uploads')
        ->where('creator_id', auth()->id())
        ->where('file_status','archive')->get();

        $popular = Popular::with('file')->orderBy('file_id', 'DESC')->get();

        $feed = Feed::with('file')->orderBy('file_id', 'DESC')->get();
        
        return view('/creator/dashboard', compact('url','reviews','submits','popular','archives','feed'));
    }

    /*|-------------------------------- ADD & EDIT ----------------------------------|*/
    public function add(){
        $url = 'creator';
        return view('creator/add', compact('url'));
    }
    public function store(Request $request){
        $request->validate([
            'file' => 'required|mimes:pdf,jpg,jpeg,png|max:20000',
            'file_usage' => 'required',
            'file_title' => 'required',
            'file_status' => 'required',
            'file_description' => 'required',
            'file_category' => 'required',
            'file_country' => 'required',      
        ]);

        $fileModel = new FileUpload;
        $fileModel->creator_id=$request->post('creator_id');
        $fileModel->file_status=$request->post('file_status');
        $fileModel->file_type=$request->post('file_type');
        $fileModel->file_title=$request->post('file_title');
        $fileModel->file_usage=$request->post('file_usage');
        $fileModel->file_description=$request->post('file_description');
        $fileModel->file_category=$request->post('file_category');
        $fileModel->file_country=$request->post('file_country');

        if($request->file()) {
            $fileName = time().'_'.$request->file->getClientOriginalName();
            $filePath = $request->file('file')->storeAs('images', $fileName, 'public');
            $fileModel->file_name = time().'_'.$request->file->getClientOriginalName();
            $fileModel->file_path = '/storage/images/' . $filePath;    
            $fileModel->save();
            return redirect('creator')->with('success','File has been uploaded.')->with('file', $fileName);
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

        $id->usage = $request->get('file_usage');
        $id->description = $request->get('file_description');
        $id->keywords = $request->get('file_keywords');
        $id->category = $request->get('file_category');
        $id->status = $request->get('file_status');
        $id->save(); 
        return redirect('creator');    
    }


    /*|-------------------------------- PAPGE ----------------------------------|*/
    public function files(FileUpload $id,  Request $request){      
        
        $url = 'creator';
        FileUpload::find($id);
        
        return view('/creator/preview', compact('url','id'));
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
    public function profile(Creator $id, Request $request){      
        
        $url = 'creator';
        Creator::find($id);
        
        return view('/admin/profile', compact('url','id'));
    }

}
