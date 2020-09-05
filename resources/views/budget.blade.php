@extends('layouts.app')

@section('content')
<div class="container-fluid">
    <form method="GET" action="{{ route('updatePlan', $user->user_id) }}">
    @csrf
        <div class="row justify-content-center mt-5">
            <div class="col-md-4">
                <h1 class="text-center pt-3">Tell us a little bit about your {{ $plan->plan_type }}.</h1>
                <div class="col-md-12 pb-3">
                    <div class="card shadow mt-3">
                        <div class="pt-3 pb-3 pl-3 pr-3">
                            <div class="form-group">
                                <label>Name:</label>
                                <input type="text" name="plan_name" class="form-control border-top-0 border-left-0 border-right-0" />
                                <p class="small text-muted pt-2">Name your fun time out. (e.g Fun Activity Day)</p>
                            </div>
                            <div class="form-group">
                                <label>Budget:</label>
                                <input type="text" name="budget" class="form-control border-top-0 border-left-0 border-right-0" />
                                <p class="small text-muted pt-2">What's the damage?</p>
                            </div>
                            <div class="form-group">
                                <label>Date:</label>
                                <input type="date" name="date" class="form-control border-top-0 border-left-0 border-right-0" />
                                <p class="small text-muted pt-2">When do you want to go?</p>
                            </div>
                            <div class="form-group">
                                <label>Location:</label>
                                <input type="text" name="location" class="form-control border-top-0 border-left-0 border-right-0" />
                                <p class="small text-muted pt-2">That place you fought for during planning.</p>
                            </div>
                            <div class="form-group">
                                <label>Number of people:</label>
                                <input type="text" name="number_of_people" class="form-control border-top-0 border-left-0 border-right-0" />
                                <p class="small text-muted pt-2">Let's be honest, how many people are really going?</p>
                            </div>
                            <button class="btn btn-lg mt-3 btn-danger" type="submit">Continue</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>
</div>
@endsection