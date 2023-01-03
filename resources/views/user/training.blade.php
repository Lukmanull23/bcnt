@extends('user.layout.layout')


@section('header')
        <header class="jumbotron atas py-5 shadow p-3 mb-5 bg-body rounded mt-3">
            <div  class="row g-o">
                <h6 class="text-center fw-bolder mt-5 fs-1 text-white">MENU</h6>
            </div>
            
            <style type="text/css">
                .atas {
                    background-image: url("assets/images/photos1.png");
                    height: 300px;
                }
            </style>
        </header>

        
@endsection
@section('content')
<!-- Section-->
        
        <section class="mb-5">
            <div class="container">
                <div class="row justify-content-center">
                     @foreach($products as $product)
                        <div class="col-4 p-4">
                            <div class="card">
                                <img  src="{{url('uploads')}}/{{$product->gambar}}"  class="card-img-top" width="200px" alt="... ">
                                <div class="card-body">
                                    <h5 class="card-title">{{$product->nama_product}}</h5>
                                    <p class="card-text">
                                        <strong>Harga :</strong> Rp. {{number_format ($product->harga)}}    
                                    </p>
                                    
                                    <a href="{{ url('pesan') }}/{{ $product->id }}" class="btn btn-danger"><i class="bi bi-cart"></i> Order</a>
                                </div>
                            </div>
                         </div>
                    @endforeach
                </div>
            </div>
        </section>
       
@endsection