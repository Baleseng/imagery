<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use App\Models\Admin;
use App\Models\User;
use App\Models\Creator;
use App\Models\FileUpload;
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
        return view('/creator/dashboard', compact('url'));
    }

    /*|-------------------------------- ADD & EDIT ----------------------------------|*/
    public function add(FileUpload $upload, Creator $creator){
        $url = 'creator';
        return view('creator.add', compact('url','upload','creator'));
    }
    public function store(FileUpload $upload, Creator $creator, Request $request){
        $url = 'creator';
        FileUpload::create(request([
            'type',
            'path',
            'usage',
            'description',
            'keywords',
            'category',
            'status',
            'location',
        ]));
        return redirect('creator');
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
