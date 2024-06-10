<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\FileUpload;
use App\Models\Creator;
use App\Models\Admin;
use App\Models\User;
use DB;

class FileUploadController extends Controller
{

    public function createForm(){
        return view('creator');
    }
    public function fileUpload(Request $request){
        
        $request->validate(['file' => 'required|mimes:pdf,jpg,jpeg,png|max:20000']);
        $fileModel = new FileUpload;

        $fileModel->creator_id=$request->post('creator_id');
        
        if($request->file()) {
            $fileName = time().'_'.$request->file->getClientOriginalName();
            $filePath = $request->file('file')->storeAs('uploads', $fileName, 'public');
            $fileModel->name = time().'_'.$request->file->getClientOriginalName();
            $fileModel->file_path = '/public/images/' . $filePath;    
            $fileModel->save();
            return redirect('creator/edit')
            ->with('success','File has been uploaded.')
            ->with('file', $fileName);
        }

    }

}