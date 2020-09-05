<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Plan;
use App\User;

class PlanController extends Controller
{
    public function updatePlan(Request $request)
    {
        $user_id = $request['user'];
        $user = User::where('id', $user_id)->first();

        $plan = Plan::where('user_id', $user_id)->first();
        $plan->budget = $request['budget'];
        $plan->plan_name = $request['plan_name'];
        $plan->country = $request['location'];
        $plan->duration = 1;
        $plan->number_of_people = $request['number_of_people'];
        $plan->update();
        
        
        return view('activities')->with([
            'plan' => $plan,
            'user' => $user,
        ]);
    }
}
