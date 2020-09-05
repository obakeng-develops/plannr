<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PlanController extends Controller
{
    public function addPlan(Request $request)
    {
        $planType = $request['plan_type'];
    }
}
