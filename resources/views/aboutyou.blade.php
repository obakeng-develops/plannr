@extends('layouts.app')

@section('content')
<div class="container-fluid">
    <form>
        <div class="row justify-content-center mt-5">
            <div class="col-md-4">
                <h1 class="text-center pt-3">Tell us about yourself</h1>
                <div class="col-md-12 pb-3">
                    <div class="card shadow mt-3">
                        <div class="pt-3 pb-3 pl-3 pr-3">
                            <div class="form-group">
                                <label>Name:</label>
                                <input type="text" class="form-control border-top-0 border-left-0 border-right-0" />
                                <p class="small text-muted pt-2">What does the government know you as?</p>
                            </div>
                            <div class="form-group">
                                <label>Email:</label>
                                <input type="text" class="form-control border-top-0 border-left-0 border-right-0" />
                                <p class="small text-muted pt-2">Let's see what your 2005 self came up with.</p>
                            </div>
                            <div class="form-group">
                                <label>Nickname:</label>
                                <input type="text" class="form-control border-top-0 border-left-0 border-right-0" />
                                <p class="small text-muted pt-2">What can we call you?</p>
                            </div>
                            <button class="btn btn-lg btn-danger" type="submit">Let's start planning</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>
</div>
@endsection