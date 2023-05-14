<?php

namespace App\Http\Controllers;

use App\Models\Build;
use Illuminate\Http\Request;

class BuildController extends Controller
{

    public function show()
    {

        return view('builds-archive',
            [
                'builds' => Build::all()
            ]);
    }

    public function sample()
    {

        return view('builds-single');
    }
}
