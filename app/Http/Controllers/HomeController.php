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

     /**
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

        $popu = DB::table('file_uploads')
        ->where('status','submit')
        ->where('usage','paiddownload')
        ->orderBy('updated_at', 'desc')->get();
        
        $atc = DB::table('file_uploads');

        $categories = DB::table('file_uploads')->select('category')->get();
        
        return view('/home',compact('url','subs','free','paid','popu','atc','categories'));
    }
    **/
    
    public function index(FileUpload $id, Request $request)
    {
        $url = 'user';
        
        $subs = DB::table('file_uploads')
        ->where('file_status','submit')
        ->where('file_usage','licensing')
        ->orderBy('updated_at', 'desc')
         ->get();

        $free = DB::table('file_uploads')
        ->where('file_status','submit')
        ->where('file_usage','freedownload')
        ->orderBy('updated_at', 'desc')->get();

         $paid = DB::table('file_uploads')
        ->where('file_status','submit')
        ->where('file_usage','paiddownload')
        ->orderBy('updated_at', 'desc')->get();

        $popular = DB::table('file_uploads')
        ->where('file_status','submit')
        ->where('file_usage','paiddownload')
        ->orderBy('updated_at', 'desc')->get();
        
        $atc = DB::table('file_uploads');

        $categories = DB::table('file_uploads')->select('file_category')->get();
        
        return view('/home',compact('url','subs','free','paid','popular','atc','categories'));
    }
}
