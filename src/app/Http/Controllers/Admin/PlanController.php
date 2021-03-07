<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreUpdatePlan;
use App\Models\Plan;
use Illuminate\Http\Request;

class PlanController extends Controller
{
    protected $plan;

    public function __construct(Plan $plan)
    {
        $this->plan = $plan;
    }

    public function index()
    {
        $plans = $this->plan->latest()->paginate();

        return view('admin.pages.plans.index', [
            'plans' => $plans
        ]);
    }

    public function create()
    {
        return view('admin.pages.plans.create');
    }

    public function store(StoreUpdatePlan $request)
    {
        $this->plan->create($request->all());

        return redirect()->route('plans.index');
    }

    public function destroy(String $url)
    {
        $plan = $this->plan->where('url', $url)->first();

        if (!$plan) {
            return redirect()->route('plans.index');
        }

        $plan->delete();

        return redirect()->route('plans.index');

    }

    public function showByUrl(String $url)
    {
        $plan = $this->plan->where('url', $url)->first();

        if (!$plan) {
            return redirect()->route('plans.index');
        }

        return view('admin.pages.plans.show', ['plan' => $plan]);
    }

    public function edit(String $url)
    {
        $plan = $this->plan->where('url', $url)->first();

        if (!$plan) {
            return redirect()->route('plans.index');
        }

        return view('admin.pages.plans.edit', ['plan' => $plan]);
    }

    public function search(Request $request)
    {
        $plans = $this->plan->search($request->filter);
        $filters = $request->all();

        return view('admin.pages.plans.index', [
            'plans' => $plans,
            'filters' => $filters
        ]);
    }

    public function update(StoreUpdatePlan $request, String $url)
    {
        $plan = $this->plan->where('url', $url)->first();

        if (!$plan) {
            return redirect()->route('plans.index');
        }

        $plan->update($request->all());

        return redirect()->back();
    }

}
