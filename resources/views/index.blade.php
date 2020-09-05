@extends('layouts.app')

@section('content')
<div class="container-fluid">
    <div class="row justify-content-center mt-5">
        <div class="col-md-8 text-center">
            <h1 class="display-3">Plannr</h1>
            <p class="lead text-muted">What are you planning to do?</p>
                <div class="form-group justify-content-center d-flex">
                <a href="{{ route('you') }}"><button class="btn btn-lg bg-success ml-3 text-white rounded-0" type="submit">Start planning</button>
                </div>
        </div>
    </div>
</div>
@endsection