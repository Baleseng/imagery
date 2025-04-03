<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

use App\Models\FileUpload;
use App\Models\Save;
use App\Models\Popular;
use App\Models\Creator;
use App\Models\Admin;
use App\Models\Cart;
use App\Models\User;
use DB;

class UserController extends Controller
{
    /**
    * Create a middleware instance.
    *
    * @return void
    */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    
    public function default(FileUpload $id, Request $request)
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

        $popular = Popular::with('file')->orderBy('file_id', 'DESC')->get();
        
        $atc = DB::table('file_uploads');

        $categories = DB::table('file_uploads')->select('file_category')->get();

        return view('/home',compact('url','subs','free','paid','popular','atc','categories'));
    }
    
    
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

        $popular = Popular::with('file')->orderBy('file_id', 'DESC')->get();
        
        $atc = DB::table('file_uploads');

        $categories = DB::table('file_uploads')->select('file_category')->get();
        
        return view('/home',compact('url','subs','free','paid','popular','atc','categories'));
    }

        /*|-------------------------------- AI Generate ----------------------------------|*/
    public function ai(){
        $url = 'user';
        return view('/ai-img-gen', compact('url'));
    }


    public function store(Request $request){
        $url = 'user';
        Feed::create(request(['model','description','title','file_name','user_id',]));
        return redirect('/feed');
    }

    /**
    * Show the application dashboard.
    *
    * @return \Illuminate\Contracts\Support\Renderable
    */
    public function test()
    {
        $url = 'user';

        $live = DB::table('file_uploads')
        ->where('file_status','submit')
        ->orderBy('updated_at', 'desc')
         ->get();

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

        return view('/tester/tiltrobertson', compact('url','subs','free','paid','live',));
    }

        /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function profile(Request $request)
    {
        $url = 'user';
        
        return view('/profile',compact('url'));
    }

       /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function creative(Request $request)
    {
        $url = 'user';
        return view('/tester/nivea',compact('url'));
    }

}
