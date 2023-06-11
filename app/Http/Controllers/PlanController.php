<?php

namespace App\Http\Controllers;

use App\Models\PageContent;
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
        $enhanced = Plan::where('uniqe_name', 'enhanced')->get()->first();
        $annualEnhanced = Plan::where('uniqe_name', 'annual-enhanced')->get()->first();
        $starter = Plan::where('uniqe_name', 'starter')->get()->first();
        $annualStarter = Plan::where('uniqe_name', 'annual-starter')->get()->first();
        $page = PageContent::where('name', 'plan')->get()->first();
        return view('plans', compact('enhanced', 'annualEnhanced', 'starter', 'annualStarter', 'page'));
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
