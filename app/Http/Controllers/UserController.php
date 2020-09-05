<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Plan;

class UserController extends Controller
{
    public function addUserPlan(Request $request)
    {
        $name = $request['name'];
        $email = $request['email'];
        $nick_name = $request['nick_name'];

        $planType = $request['plan_type'];

        $plan = new Plan;
        $plan->plan_type = $planType;
        $plan->save();

        $user = new User;
        $user->name = $name;
        $user->email = $email;
        $user->nick_name = $nick_name;
        $plan->save();

        return redirect()->route('/');
    }
}
