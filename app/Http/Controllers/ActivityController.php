<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Activity;
use App\Plan;
use App\User;

class ActivityController extends Controller
{
    public function store(Request $request)
    {
        $plan = $request['plan'];
        $user = $request['user'];

        $planInfo = Plan::where('user_id', $plan)->first();
        $userInfo = User::where('id', $user)->first();

        //for first activity
        $activity1 = $request['activity1'];
        $location1 = $request['location1'];
        $time1 = $request['time1'];

        //for second activity
        $activity2 = $request['activity2'];
        $location2 = $request['location2'];
        $time2 = $request['time2'];

        //for third activity
        $activity3 = $request['activity3'];
        $location3 = $request['location3'];
        $time3 = $request['time3'];

        //add first activity
        $activity1 = Activity::create([
            'activity_name' => $activity1,
            'activity_time' => $time1,
            'activity_location' => $location1,
            'plans_id' => $plan,
        ]);

        //add second activity
        $activity2 = Activity::create([
            'activity_name' => $activity2,
            'activity_time' => $time2,
            'activity_location' => $location2,
            'plans_id' => $plan,
        ]);

        //add third activity
        $activity3 = Activity::create([
            'activity_name' => $activity3,
            'activity_time' => $time3,
            'activity_location' => $location3,
            'plans_id' => $plan,
        ]);

        return view('guests')->with([
            'plan' => $planInfo,
            'user' => $userInfo
        ]);
    }
}
