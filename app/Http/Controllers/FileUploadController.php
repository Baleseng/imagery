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

    public function file(FileUpload $id, User $user, Request $request)
    {
        $url = DB::table('users')->select('users.*')->get();
        return view('/file', compact('url','id'));
    }

    public function logEvent(Request $request)
    {
        $validated = $request->validate([
            'element_id' => 'nullable|string', // e.g., 'buy-now-btn'
            'element_type' => 'nullable|string', // 'button' or 'anchor'
        ]);

        $trackingLog = FileUpload::firstOrCreate(
            [
                'element_id' => $validated['element_id'] ?? null,
            ],
            [
                'element_type' => $validated['element_type'] ?? null,
                'page_views' => 0,
                'button_clicks' => 0,
                'href_clicks' => 0,
            ]
        );

        // Increment counters based on element type
        if ($validated['element_type'] === 'button') {
            $trackingLog->increment('button_clicks');
        } elseif ($validated['element_type'] === 'anchor') {
            $trackingLog->increment('href_clicks');
        } else {
            $trackingLog->increment('page_views'); // Fallback for page views
        }

        return response()->json(['success' => true]);
    }

}