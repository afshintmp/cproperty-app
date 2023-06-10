<?php

namespace App\Http\Controllers;

use App\Services\Uploader\Uploader;
use Illuminate\Http\Request;

class FileController extends Controller
{
    private $uploader;

    public function __construct(Uploader $uploader)
    {
        $this->uploader = $uploader;
    }

    public function create()
    {
        return view('test.upload');
    }


    public function upload(Request $request)
    {
        $this->validateFile($request);
        $this->uploader->upload();
        dd($request->file);
    }

    private function validateFile($request)
    {
        $request->validate([
            'file' => ['required', 'file', 'mimetypes:image:jpeg,image/png']
        ]);
    }
}
