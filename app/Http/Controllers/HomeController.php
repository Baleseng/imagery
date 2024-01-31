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
    public function default(Request $request)
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
    public function test()
    {
        return view('/tester');
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
    public function files(FileUpload $id, User $user, Request $request){      

        $url = DB::table('users')->select('users.*')->get();
        
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

    /*|-------------------------------- ADD TAXI ----------------------------------|*/
    public function add(sa $taxi, User $user){
        $url = 'owner';
        return view('owner.add', compact('url','taxi','owner'));
    }

    public function store(Taxi $taxi, Owner $owner, Request $request){
        $url = 'owner';
        Taxi::create(request(['model','registration','seater','status','driver','owner_id',]));
        return redirect('owner');
    }

    /**
    * Show the application dashboard.
    *
    * @return \Illuminate\Contracts\Support\Renderable
    */
    public function proceeds()
    {
        return view('/proceed');
    }

}
