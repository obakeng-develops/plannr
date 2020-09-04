@extends('layouts.app')

@section('content')
<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-md-4">
            <h1 class="text-center">Here's everything about your trip.</h1>
            <p class="text-muted text-center">Print this and send to all your people.</p>
            <div class="col-md-12 pb-3">
                <div class="card shadow mt-3">
                    <button class="btn btn-lg mt-3 btn-danger" type="submit">Print</button>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection