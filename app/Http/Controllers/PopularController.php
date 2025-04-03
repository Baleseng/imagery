<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\FileUpload;
use App\Models\Creator;
use App\Models\Admin;
use App\Models\Popular;
use App\Models\User;
use DB;

class PopularController extends Controller
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
    

    public function create(){
        $url = 'admin';

        // Create an input & Save to database
        Popular::create([   
            'file_id' => request('file_id'), 
            'file_popular' => request('file_popular'), 
        ]);
        // Redirect
        
        return redirect('/admin');
    }

    public function store(Request $request){    
        $post = new Popular();
        $post->file_id= $request->file_id;
        $post->file_popular= $request->file_popular;
        $post->save();
        return response()->json(['success'=>'Data is successfully added']);
    }
}
