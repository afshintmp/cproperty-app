<?php

namespace App\Http\Controllers;

use App\Models\Build;
use Illuminate\Http\Request;

class UnitController extends Controller
{
    public function add(Build $build)
    {

        $build->load('phases');

        return view('developer.units.add' , compact('build'));
    }
}
