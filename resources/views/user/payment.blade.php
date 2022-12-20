@extends('user.layout.layout')

@section('header')
        <header class="atas py-5 shadow p-3 mb-5 bg-body rounded">
                <div  class="row g-o">
                    
                    <h6 class="text-center fw-bolder mt-5 fs-1 text-white"><br><br>Treatment</h6>
                </div>
            <style type="text/css">
                .atas {
                    background-image: url("assets/images/bg-training.png");
                    height: 411px;
                }
            </style>
        </header>
@endsection

@section('content')
        <section class="py-5">
            <div class="input-group mb-3">
                <span class="input-group-text" id="dana"><img src="assets/images/dana.png" alt=""></span>
                <input type="text" class="form-control" placeholder="Username" aria-label="Username" aria-describedby="basic-addon1">
            </div>
            <div class="input-group mb-3">
                <span class="input-group-text" id="dana"><img src="assets/images/bni.png" alt=""></span>
                <input type="text" class="form-control" placeholder="Username" aria-label="Username" aria-describedby="basic-addon1">
            </div>
            <div class="input-group mb-3">
                <span class="input-group-text" id="dana"><img src="assets/images/ovo.png" alt=""></span>
                <input type="text" class="form-control" placeholder="Username" aria-label="Username" aria-describedby="basic-addon1">
            </div>
            <div class="input-group mb-3">
                <span class="input-group-text" id="dana"><img src="assets/images/mandiri.png" alt=""></span>
                <input type="text" class="form-control" placeholder="Username" aria-label="Username" aria-describedby="basic-addon1">
            </div>
            <div class="input-group mb-3">
                <span class="input-group-text" id="dana"><img src="assets/images/bri.png" alt=""></span>
                <input type="text" class="form-control" placeholder="Username" aria-label="Username" aria-describedby="basic-addon1">
            </div>
        </section>
@endsection
