<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Response;
use Illuminate\Support\Facades\Storage;

class DownloadController extends Controller
{
    // public function downloadFile($filename){
    //     $filepath = 'app/'.$filename;
    //     return response()->download(storage_path($filepath), $filename);
    // }

    public function downloadFile($filename){
    return response()->download(public_path("downloads/{$filename}"));
}

}

