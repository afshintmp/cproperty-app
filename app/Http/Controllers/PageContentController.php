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

        if (isset($request->deleteImage)) {
            $data = [
                'image' => Null
            ];

        } else {
            if($request->file){

                $data = ['title' => $request->title,
                    'content' => $request->description,
                    'image' => 'image' . DIRECTORY_SEPARATOR . $request->file->getClientOriginalName()
                ];
                $this->uploader->upload();


            }else{
                $data = ['title' => $request->title,
                    'content' => $request->description,
                    'image' => Null
                ];
            }


        }
        $page = DB::table('page_content')->where('name', 'plan')->update($data);
        return back()->with('success', 'page was updated');
    }


    public function updateCheckout(Request $request)
    {
        $page = DB::table('page_content')
            ->where('name', 'checkout')->updateOrInsert(['name' => 'checkout', 'content' => $request->description]);
        return back()->with('success', 'page was updated');
    }

    public function editCheckout()
    {
        $page = DB::table('page_content')->where('name', 'checkout')->first();
        return view('admin.pages.checkout', compact('page'));
    }

}
