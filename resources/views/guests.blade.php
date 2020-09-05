@extends('layouts.app')

@section('content')
<div class="container-fluid">
    <form method="POST" action="{{ route('guest.create') }}">
    @csrf
        <div class="row justify-content-center">
            <div class="col-md-4">
                <h1 class="text-center pt-3">Who are you taking with?</h1>
                <p class="text-muted text-center">This is the last part of your journey with us.</p>
                <div class="col-md-12 pb-3">
                    <div class="card shadow mt-3">
                        <div class="pt-3 pb-3 pl-3 pr-3">
                            <div class="form-group">
                                <label>Guest 1:</label>
                                <input type="text" name="guest1" class="form-control border-top-0 border-left-0 border-right-0" placeholder="Guest Name"/>
                                <input type="email" name="email1" class="form-control border-top-0 border-left-0 border-right-0" placeholder="Guest Email" />
                                <p class="small text-muted pt-2">Who agreed to the plan first?</p>
                            </div>
                            <div class="form-group">
                                <label>Guest 2:</label>
                                <input type="text" name="guest2" class="form-control border-top-0 border-left-0 border-right-0" placeholder="Guest Name"/>
                                <input type="email" name="email2" class="form-control border-top-0 border-left-0 border-right-0" placeholder="Guest Email" />
                                <p class="small text-muted pt-2">Who did you have to convince?</p>
                            </div>
                            <div class="form-group">
                                <label>Guest 3:</label>
                                <input type="text" name="name3" class="form-control border-top-0 border-left-0 border-right-0" placeholder="Guest Name"/>
                                <input type="email" name="email3" class="form-control border-top-0 border-left-0 border-right-0" placeholder="Guest Email" />
                                <p class="small text-muted pt-2">Who brings the energy to the trip?</p>
                            </div>
                            <input type="hidden" name="plan" value="{{ $plan->id }}">
                            <input type="hidden" name="user" value="{{ $user->id }}">
                            <button class="btn btn-lg mt-3 btn-danger" type="submit">And you're done</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>
</div>
@endsection