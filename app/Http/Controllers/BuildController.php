<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use App\Models\Build;
use Illuminate\Http\Request;

class BuildController extends Controller
{

    public function show1()
    {

        return view('builds-archive',
            [
                'builds' => Build::all()
            ]);
    }

    public function show(Request $request, int $id)
    {
        $build = Build::find($id);
        $photos = Build::find($id)->photos;

        return view('build.show', compact('build', 'photos'));
    }
}
