<?php

namespace App\Http\Controllers;

use App\Models\Build;
use App\Models\Unit;
use Illuminate\Http\Request;

class UnitController extends Controller
{
    public function create(Request $request, Build $build)
    {
        $request->validate([
            'floor' => ['required'],
            'price' => ['required'],
            'face' => ['required'],
            'size' => ['required'],
            'storage' => ['required'],
            'parking' => ['required'],
            'bedroom' => ['required'],
            'garden' => ['required'],
            'den' => ['required'],
            'flex' => ['required'],
        ]);
        Unit::create($request->all());
        dd($request->all());
    }

    public function add(Build $build)
    {

        $build->load('phases');

        return view('developer.units.add', compact('build'));
    }
}
