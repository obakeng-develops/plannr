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

        $user = new User;
        $user->name = $name;
        $user->email = $email;
        $user->nick_name = $nick_name;
        $plan->save();

        $plan = new Plan;
        $plan->plan_type = $planType;
        $plan->user_id = $user->id;

        return redirect()->route('/');
    }
}
