<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Plan;

class PlanController extends Controller
{
    public function updatePlan(Request $request, $id)
    {
        /*$plan = Plan::where('user_id', $user)->first();
        $plan->plan_name = $request['plan_name'];
        $plan->country = $request['location'];
        $plan->duration = 1;
        $plan->number_of_people = $request['number_of_people'];
        $plan->update();
        
        
        return view('activities')->with([
            'plan' => $plan,
        ]);
        */

        print($user);
    }
}
