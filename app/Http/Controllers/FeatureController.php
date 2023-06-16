<?php

namespace App\Http\Controllers;

use App\Models\Feature;
use Illuminate\Http\Request;

class FeatureController extends Controller
{
    public function list()
    {
        $features = Feature::all();
        return view('admin.features.list', compact('features'));
    }

    public function create(Request $request)
    {
        $request->validate([
            'name' => ['required'],
        ]);
        Feature::create($request->all());
        return back()->with('success', 'Feature was create');
    }

    public function delete(Request $request)
    {
        Feature::find($request->featureId)->delete();
        return back()->with('success', 'Feature was delete');
    }

}
