<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\FileUpload;
use App\Models\Creator;
use App\Models\Admin;
use App\Models\User;
use DB;

use Illuminate\Http\Request;

class PopularController extends Controller
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
}
