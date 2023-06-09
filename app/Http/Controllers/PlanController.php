<?php

namespace App\Http\Controllers;

use App\Models\Plan;
use App\Services\Storage\Contracts\StorageInterface;
use App\Services\Storage\SessionStorage;
use http\Client\Curl\User;
use Illuminate\Http\Request;

class PlanController extends Controller
{
    public function adminIndex()
    {
        $plans = Plan::all();
        return view('admin.plans.list', compact('plans'));
    }

    public function index()
    {
        $plans = Plan::all();
        return view('plans', compact('plans'));
    }

    public function edit(Plan $plan)
    {
        return view('admin.plans.edit', compact('plan'));
    }

    public function update(Request $request, Plan $plan)
    {
        $plan->update($request->all());
        return back()->with('success', true);
    }
}
