<?php

namespace App\Http\Controllers\Laravel;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use File;

class UploadFileController extends Controller
{
    public function index()
    {
	    return view('upload_file');
    }

    public function uploadfile(Request $request)
    {
    	$upload_file=$request->file();

    }
}