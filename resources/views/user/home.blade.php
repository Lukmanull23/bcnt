@extends('user.layout.layout')

@section('header')
    @include('user.layout.header')
@endsection
@section('content')
<!-- Section-->
        <section class="py-5">
            <div class="container px-4 px-lg-5">
                <div class="row gx-4 gx-lg-5 row-cols-2 row-cols-md-3 row-cols-xl-4 justify-content-center">
                    <div class="col mb-5">
                        <div class="card h-90">
                            <!-- Product image-->
                            <img class="card-img-top" src="assets/images/top1.png" alt="..." height="404px" width="308px"/>
                        </div>
                    </div>
                    <div class="col mb-2">
                        <div class="card h-90">
                            <!-- Product image-->
                            <img class="card-img-top" src="assets/images/top2.png" alt="..." height="404px" width="326px"/>
                        </div>
                    </div>
                    <div class="col mb-5">
                        <div class="card h-90">
                            <!-- Product image-->
                            <img class="card-img-top" src="assets/images/top3.png" alt="..." height="404px" width="311px" />
                        </div>
                    </div>
                    <div class="col mb-2">
                        <div class="card h-90">
                            <!-- Product image-->
                            <img class="card-img-top" src="assets/images/top4.png" alt="..." height="404px" width="310px"/>
                        </div>
                    </div>
                </div>
            </div>
        </section>
@endsection