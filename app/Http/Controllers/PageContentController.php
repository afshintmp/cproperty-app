<?php

namespace App\Http\Controllers;

use App\Models\PageContent;
use App\Services\Uploader\Uploader;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PageContentController extends Controller
{
    private $uploader;

    public function __construct(Uploader $uploader)
    {
        $this->uploader = $uploader;
    }

    public function edit()
    {
        $page = DB::table('page_content')->where('name', 'plan')->first();

        return view('admin.pages.plan', compact('page'));

    }

    public function update(Request $request)
    {

        $data = ['title' => $request->title,
            'content' => $request->description,
            'image' => 'image' . DIRECTORY_SEPARATOR . $request->file->getClientOriginalName()
        ];
        $this->uploader->upload();

        $page = DB::table('page_content')->where('name', 'plan')->update($data);

    }
}
