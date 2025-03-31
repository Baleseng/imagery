<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\FileUpload;
use App\Models\savePost;
use App\Models\Creator;
use App\Models\Admin;
use App\Models\Feed;
use App\Models\User;
use DB;

class FeedController extends Controller
{
      /**
      * Create a new controller instance.
      *
      * @return void
      */
      public function __construct(){
        $this->middleware('auth');
      }

    
    /**
    * Create a new controller instance.
    *
    * @return void
    */
    public function post(Request $request){      
        
        $url = 'user';

        $feed = Feed::with('file')->orderBy('file_id', 'DESC')->get();
        
        return view('/feed',compact('url','feed'));

    }

    /**
    * Create a new controller instance.
    *
    * @return void
    */
    public function create(){
    
        // Create an input & Save to database
        Feed::create([   
            'users_id' => request('users_id'),
            'file_id' => request('file_id'), 
        ]);
        // Redirect
        return redirect('feed');
    }

    public function store(Request $request){
        
        $post = new Feed();
        $post->users_id = $request->users_id;
        $post->file_id= $request->file_id;
        $postcard->save();
        return response()->json(['success'=>'Data is successfully added']);
    }
}
