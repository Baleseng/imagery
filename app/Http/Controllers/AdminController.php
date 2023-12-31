<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class AdminController extends Controller
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

    /*|-------------------------------- INDEX PAPGE ----------------------------------|*/
    public function index(Request $request){      
        $url = 'admin';
        return view('admin/index', compact('url'));
    }
}
