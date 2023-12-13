<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FileController extends Controller
{
    public function index()
   {
       return view('fileUpload');
   }

   public function store(Request $request)
    {
        $request->validate([
            'file' => 'required|mimes:txt,pdf,xlx,csv|max:2048',
        ]);

        $fileName = time().'.'.$request->file->extension();  


        $request->file->move(public_path('uploads'), $fileName);
        return back()
        ->with('success','You have successfully upload file.')
        ->with('file', $fileName);







        
    }
}
