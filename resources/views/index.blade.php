@extends('layouts.app')

@section('content')
<div class="container-fluid">
    <div class="row justify-content-center mt-5">
        <div class="col-md-8 text-center">
            <h1 class="display-3">Plannr</h1>
            <p class="lead text-muted">What are you planning to do?</p>
            <form>
                <div class="form-group justify-content-center d-flex">
                <select class="form-control form-control-lg w-50 rounded-0">
                    <option>Night out</option>
                    <option>Day out</option>
                </select>
                <button class="btn btn-lg bg-success ml-3 text-white rounded-0">Start planning</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection