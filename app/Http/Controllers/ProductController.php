<?php

namespace App\Http\Controllers;

use DB;
use App\Models\User;
use App\Models\Product;
use App\Models\FileUpload;
use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;

class ProductController extends Controller
{

    public function subscription()
    {
        return view('subscription');
    }

    public function commercial()
    {
        return view('commercial');
    }

    public function fileList()
    {
        $files = FileUpload::all();
        return view('files', compact('files'));
    }

    public function file(FileUpload $id, User $user, Request $request)
    {
        $url = DB::table('users')->select('users.*')->get();
        return view('/file', compact('url','id'));
    }

    public function addWatermark(){
        // Open the original image file
        $image = Image::make(public_path('images/original.jpg'));
        // Add the watermark image on top of the original image
        $watermark = Image::make(public_path('images/watermark.png'))
            ->opacity(50)
            ->resize($image->width() / 2, $image->height() / 2);
        $image->insert($watermark, 'center');
        // Save the watermarked image
        $image->save(public_path('images/watermarked.jpg'));
        // Return a response with the watermarked image
        return response()->file(public_path('images/watermarked.jpg'));
    }
}

