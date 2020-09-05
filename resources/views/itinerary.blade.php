@extends('layouts.app')

@section('content')
<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <h3 class="text-center display-4">Hi {{ $user->nick_name }}</h3>
            <h1 class="text-center">Here's everything about your trip.</h1>
            <p class="text-muted text-center">Print this and send to all your people.</p>
            <div class="col-md-12 pb-3 justify-content-center d-flex">
                <div class="card shadow mt-3 d-flex flex-lg-row">
                    <div class="pt-3 pl-3 pb-3 pr-3">
                        <div class="form-group">
                            <label>Budget</label>
                            <p class="text-black"><strong>R{{ $plan->budget }}</strong></p>
                        </div>
                        <div class="form-group">
                            <label>Date</label>
                            <p class="text-black"><strong>31 September 2020</strong></p>
                        </div>
                        <div class="form-group">
                            <label>Location</label>
                            <p class="text-black"><strong>{{ $plan->country }}</strong></p>
                        </div>
                        <div class="form-group">
                            <label>Guests (3)</label>
                            @foreach($guests as $guest)
                            <p class="text-black"><strong>{{ $guest->guest_name }} ({{ $guest->guest_email }})</strong></p>
                            @endforeach
                        </div>
                    </div>
                    <div class="pt-3 pl-3 pb-3 pr-3">
                        <div class="form-group">
                            <label>Activities (3)</label>
                            @foreach($activities as $activity)
                            <p class="text-black"><strong>{{ $activity->activity_name }} (@ {{ $activity->activity_time }})</strong></p>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection