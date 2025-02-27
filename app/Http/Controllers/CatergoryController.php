<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\FileUpload;
use App\Models\User;
use DB;

class CatergoryController extends Controller
{
    /**
    * Create a new controller instance.
    *
    * @return void
    */
    public function __construct(){
        $this->middleware('auth');
    }

    public function index(Request $request){      
        
        $url = 'user';
        $holidays = DB::table('file_uploads')->where('file_category','Holidays')->get();
        
        return view('/catergories', compact('url','holidays'));
    }
}
