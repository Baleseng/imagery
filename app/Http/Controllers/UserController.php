<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

use App\Models\FileUpload;
use App\Models\savePost;
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
    public function index(Request $request)
    {
        $url = 'user';
        
        $data = DB::table('file_uploads')
        ->where('status','submit')->get();
        return view('/home',compact('url','data'));
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function feed()
    {
        $url = 'user';
        return view('/feed');
    }

    /*|-------------------------------- ADD FEED ----------------------------------|*/
    public function add(Request $request){
        $url = 'user';
        return view('/feed', compact('url'));
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
        ->where('status','submit')
        ->orderBy('updated_at', 'desc')
         ->get();

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

        return view('/tester/carousel', compact('url','subs','free','paid','live',));
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

}
