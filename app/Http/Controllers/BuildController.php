<?php

namespace App\Http\Controllers;

use App\Models\City;
use Illuminate\Support\Facades\DB;
use App\Models\Build;
use Illuminate\Http\Request;

class BuildController extends Controller
{

    public function show1()
    {
        $builds = Build::paginate(9);
        $cities = City::all();
        return view('build.list', compact('builds' , 'cities'));
    }

    public function show(Request $request, int $id)
    {
        $build = Build::find($id);
        $build->load(['images', 'units', 'features']);

        return view('build.show', compact('build'));
    }
}
