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

    /*|-------------------------------- ADD FEED ----------------------------------|*/
    public function add(Request $request){
        $url = 'user';
        return view('/feed', compact('url','taxi','owner'));
    }

    public function store(Request $request){
        $url = 'user';
        Feed::create(request(['model','description','title','file_name','user_id',]));
        return redirect('/feed');
    }

    public function addToCart(FileUpload $id, User $user, Request $request)
    {
        $url = 'user';
        
        Cart::add([
            'id' => $request->id,
            'user_id' => $request->user_id,
            'admin_id' => $request->admin_id,
            'creator_id' => $request->creator_id,

            'file_id' => $request->file_id,
            'file_title' => $request->file_title,
            'file_name' => $request->file_name,
            'file_quantity' => $request->file_quantity,
            'file_price' => $request->file_price,

        ]);
        return redirect('/cart', compact('url','id'));
    }

    /**
    * Show the application dashboard.
    *
    * @return \Illuminate\Contracts\Support\Renderable
    */
    public function proceeds()
    {
        $url = 'user';
        return view('/proceed');
    }

}
