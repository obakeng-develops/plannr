@extends('layouts.app')

@section('content')
<div class="container-fluid">
    <form method="POST" action="{{ route('addUserPlan') }}">
    @csrf
        <div class="row justify-content-center mt-5">
            <div class="col-md-4">
                <h1 class="text-center pt-3">Tell us about yourself</h1>
                <div class="col-md-12 pb-3">
                    <div class="card shadow mt-3">
                        <div class="pt-3 pb-3 pl-3 pr-3">
                            <div class="form-group">
                                <label>Name:</label>
                                <input type="text" name="name" class="form-control border-top-0 border-left-0 border-right-0" />
                                <p class="small text-muted pt-2">What does the government know you as?</p>
                            </div>
                            <div class="form-group">
                                <label>Email:</label>
                                <input type="text" name="email" class="form-control border-top-0 border-left-0 border-right-0" />
                                <p class="small text-muted pt-2">Let's see what your 2005 self came up with.</p>
                            </div>
                            <div class="form-group">
                                <label>Nickname:</label>
                                <input type="text" name="nick_name" class="form-control border-top-0 border-left-0 border-right-0" />
                                <p class="small text-muted pt-2">What can we call you?</p>
                            </div>
                            <div class="form-group">
                                <label>Type of day:</label>
                                <select class="form-control form-control-lg w-50 border-top-0 border-right-0 border-left-0" name="plan_type">
                                <option name="night_out">night out</option>
                                <option name="day_out">day out</option>
                                </select>
                                <p class="small text-muted pt-2">Are you a night-owl or day-walker?</p>
                            </div>
                            <button class="btn btn-lg mt-3 btn-danger" type="submit">Let's start planning</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>
</div>
@endsection