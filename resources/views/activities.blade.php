@extends('layouts.app')

@section('content')
<div class="container-fluid">
    <form method="POST" action="{{ route('create') }}">
    @csrf
        <div class="row justify-content-center">
            <div class="col-md-4">
                <h1 class="text-center pt-3">What are you off to do?</h1>
                <div class="col-md-12 pb-3">
                    <div class="card shadow mt-3">
                        <div class="pt-3 pb-3 pl-3 pr-3">
                            <div class="form-group">
                                <label>First activity:</label>
                                <input type="text" name="activity1" class="form-control border-top-0 border-left-0 border-right-0" placeholder="Activity 1" />
                                <input type="text" name="location1" class="form-control border-top-0 border-left-0 border-right-0" placeholder="Location" />
                                <input type="time" name="time1" class="form-control border-top-0 border-left-0 border-right-0" placeholder="Time" />
                            </div>
                            <div class="form-group">
                                <label>Second activity:</label>
                                <input type="text" name="activity2" class="form-control border-top-0 border-left-0 border-right-0" placeholder="Activity 2" />
                                <input type="text" name="location2" class="form-control border-top-0 border-left-0 border-right-0" placeholder="Location" />
                                <input type="time" name="time2" class="form-control border-top-0 border-left-0 border-right-0" placeholder="Time" />
                            </div>
                            <div class="form-group">
                                <label>Third activity:</label>
                                <input type="text" name="activity3" class="form-control border-top-0 border-left-0 border-right-0" placeholder="Activity 3" />
                                <input type="text" name="location3" class="form-control border-top-0 border-left-0 border-right-0" placeholder="Location" />
                                <input type="time" name="time3" class="form-control border-top-0 border-left-0 border-right-0" placeholder="Time" />
                            </div>
                            <input type="hidden" name="plan" value="{{ $plan->id }}">
                            <input type="hidden" name="user" value="{{ $user->id }}">
                            <button class="btn btn-lg mt-3 btn-danger" type="submit">Continue</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>
</div>
@endsection