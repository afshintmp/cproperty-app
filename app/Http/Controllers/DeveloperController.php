<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DeveloperController extends Controller
{
    public function index()
    {
        return view('developer.index');
    }

    public function addProject()
    {
        return view('developer.project.add');
    }
}
