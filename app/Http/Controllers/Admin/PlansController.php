<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Plans;
use Illuminate\Http\Request;

class PlansController extends Controller
{
    //

    public function index()
    {
        # code...
        $plans = Plans::latest()->get();

        return view('admin.plans', compact('plans'));
    }

    public function add(Request $dt)
    {
        $dt->validate([
            'invest_amount' => 'required',
            'returns' => 'required'
        ]);

        Plans::create([
            'invest' => $dt->invest_amount,
            'returns' => $dt->returns
        ]);

        return back()->with('success', 'Plan added successfully');
    }

    public function edit(Request $dt)
    {
        # code...

        $plan = Plans::find($dt->plan_id);
        $plan->invest = $dt->invest_amount;
        $plan->returns = $dt->returns;
        $plan->save();

        return back()->with('success', 'plan edited successfully');
    }

    public function delete($id)
    {
        # code...
        $plan = Plans::find($id)->delete();

        return back()->with('success', 'plan deleted successfully');

    }
}
