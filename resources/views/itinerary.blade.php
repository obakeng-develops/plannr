@extends('layouts.app')

@section('content')
<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <h3 class="text-center display-4">Hi Obakeng</h3>
            <h1 class="text-center">Here's everything about your trip.</h1>
            <p class="text-muted text-center">Print this and send to all your people.</p>
            <div class="col-md-12 pb-3 justify-content-center d-flex">
                <div class="card shadow mt-3 d-flex flex-lg-row">
                    <div class="pt-3 pl-3 pb-3 pr-3">
                        <div class="form-group">
                            <label>Budget</label>
                            <p class="text-black"><strong>R5000</strong></p>
                        </div>
                        <div class="form-group">
                            <label>Date</label>
                            <p class="text-black"><strong>31 September 2020</strong></p>
                        </div>
                        <div class="form-group">
                            <label>Location</label>
                            <p class="text-black"><strong>Johannesburg, South Africa</strong></p>
                        </div>
                        <div class="form-group">
                            <label>Guests (3)</label>
                            <p class="text-black"><strong>Dennis Mawusi (d.mawusi@gmail.com)</strong></p>
                            <p class="text-black"><strong>Boichoko Seane (b.seane@gmail.com)</strong></p>
                            <p class="text-black"><strong>Mncedisi Magengelele (m.president@gmail.com)</strong></p>
                        </div>
                    </div>
                    <div class="pt-3 pl-3 pb-3 pr-3">
                        <div class="form-group">
                            <label>Activities (3)</label>
                            <p class="text-black"><strong>Acrobranch (@ 10:00)</strong></p>
                            <p class="text-black"><strong>Paintball (@ 13:00)</strong></p>
                            <p class="text-black"><strong>Tasha's (@ 16:00)</strong></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection