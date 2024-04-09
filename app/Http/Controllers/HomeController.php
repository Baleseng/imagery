<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

use App\Models\FileUpload;
use App\Models\savePost;
use App\Models\Creator;
use App\Models\Admin;
use App\Models\User;
use DB;


class HomeController extends Controller
{

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function default(FileUpload $id, Request $request)
    {
        $url = 'user';
        
        $subs = DB::table('file_uploads')
        ->where('status','submit')
        ->where('usage','licensing')
        ->orderBy('updated_at', 'desc')
         ->get();

        $free = DB::table('file_uploads')
        ->where('status','submit')
        ->where('usage','freedownload')
        ->orderBy('updated_at', 'desc')->get();

         $paid = DB::table('file_uploads')
        ->where('status','submit')
        ->where('usage','paiddownload')
        ->orderBy('updated_at', 'desc')->get();
        
        $atc = DB::table('file_uploads');

        $holidays = DB::table('file_uploads')->where('category','Holidays')->get();
        
        return view('/home',compact('url','subs','free','paid','atc','holidays'));
    }


    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index(Request $request)
    {
        $url = 'user';
        
       $subs = DB::table('file_uploads')
        ->where('status','submit')
        ->where('usage','licensing')
        ->orderBy('updated_at', 'desc')
         ->get();

        $free = DB::table('file_uploads')
        ->where('status','submit')
        ->where('usage','freedownload')
        ->orderBy('updated_at', 'desc')->get();

         $paid = DB::table('file_uploads')
        ->where('status','submit')
        ->where('usage','paiddownload')
        ->orderBy('updated_at', 'desc')->get();
       
    

        return view('/home',compact('url','subs','free','paid'));
    }

     /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function files(FileUpload $id, User $user, Request $request){      

        $url = DB::table('users')->select('users.*')->get();

        views($id)->record();
        
        return view('/file',compact('url','id'));
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function feed()
    {
        return view('/feed');
    }

}
