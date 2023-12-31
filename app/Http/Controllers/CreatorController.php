<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class CreatorController extends Controller
{
    /**
    * Create a middleware instance.
    *
    * @return void
    */
    public function __construct()
    {
        $this->middleware('auth:creator');
    }

    /*|-------------------------------- INDEX PAPGE ----------------------------------|*/
    public function index(Request $request){      
        $url = 'creator';
        return view('creator/index', compact('url'));
    }
}
