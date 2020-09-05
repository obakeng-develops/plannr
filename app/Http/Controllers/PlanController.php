<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Plan;

class PlanController extends Controller
{
    public function addPlan(Request $request)
    {
        $planType = $request['plan_type'];

        $plan = new Plan;
        $plan->plan_type = $planType;
        $plan->save();

        return redirect()->route('you');
    }
}
