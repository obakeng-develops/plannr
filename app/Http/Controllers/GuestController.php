<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Plan;
use App\Guest;
use App\User;

class GuestController extends Controller
{
    public function store(Request $request) {
        $plan = $request['plan'];
        $user = $request['user'];

        $planInfo = Plan::where('user_id', $plan)->first();
        $userInfo = User::where('id', $user)->first();

        //for first guest
        $guest1 = $request['guest1'];
        $email1 = $request['email1'];

        //for first guest
        $guest2 = $request['guest2'];
        $email2 = $request['email2'];

        //for first guest
        $guest3 = $request['guest3'];
        $email3 = $request['email3'];

        //add first guest
        $guest1 = Guest::create([
            'guest_name' => $guest1,
            'guest_email' => $email1,
            'plans_id' => $plan,
        ]);

        //add second guest
        $guest2 = Guest::create([
            'guest_name' => $guest2,
            'guest_email' => $email2,
            'plans_id' => $plan,
        ]);

        //add third guest
        $guest1 = Guest::create([
            'guest_name' => $guest3,
            'guest_email' => $email3,
            'plans_id' => $plan,
        ]);

        return view('itinerary')->with([
            'plan' => $planInfo,
            'user' => $userInfo,
        ]);
    }
}
