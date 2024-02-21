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
        $posts = DB::table('feeds')->latest()->get();
        return view('/feed',compact('url','posts'));

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
          'file_name' => request('file_name'),
          'file_title' => request('file_title'),
          'file_description' => request('file_description'),
          
        ]);
        // Redirect

        return redirect('feed');
    }

    public function store(Request $request){
        
        $post = new Feed();

        $post->users_id = $request->users_id;
        $post->file_id= $request->file_id;
        $post->file_name = $request->file_name;
        $post->file_title = $request->file_title;
        $post->file_description = $request->file_description;

        $postcard->save();

        return response()->json(['success'=>'Data is successfully added']);
    }
}
