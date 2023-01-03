@extends('user.layout.layout')
 
@section('header')
        <header class="jumbotron atas py-5 shadow p-3 mb-5 bg-body rounded mt-3">
            <br>
            <div  class="row g-o">
                <h6 class="text-center fw-bolder mt-5 fs-1 text-white">Chart List</h6>
            </div>
           
            <style type="text/css">
                .atas {
                    background-image: url("assets/images/resepsionis.jpeg");
                    height: 300px;
                }
                .row{
                    text-align: center;
                }
                col{
                    text-align: center;
                }
            </style>
        </header>
 
       
@endsection
@section('content')
<!-- Section-->
        <section class="py-5">
        <div class="container">
            <div class="row ">
                <div class="col-md-12">
                
                    <div class="card-body"></div>
                    
                        <table class="table table-dark">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Product</th>
                                <th>Tanggal</th>
                                <th>Harga</th>
                                <th>Jumlah</th>
                                <th>Total</th>
                                <th>Hapus</th>
                            </tr>
                        </thead>
                        <tbody>
                       
                            <?php $no = 1; ?>
                            @foreach($pesanan_details as $pesanan_detail)
                            <tr>
                                <td>{{ $no++}}</td>
                                <td>{{ $pesanan_detail->product->nama_product }}</td>
                                <td>{{ $pesanan->tanggal }}</td>
                                <td>Rp. {{ number_format($pesanan_detail->product->harga) }}</td>
                                <td>{{ $pesanan_detail->jumlah }}</td>
                                <td>Rp. {{ number_format($pesanan_detail->jumlah_harga) }}</td>
                                <td>
                                    <form action="{{url('cart')}}/ {{$pesanan_detail->id}}" method="post">
                                        @csrf
                                        {{ method_field('Delete')}}
                                        <button type="submit" class="btn btn-danger"><i class="bi bi-trash3-fill" onclick="return confirm('Anda yakin akan menghapus data ?');"></i></button>
                                    </form>
                                </td>
                            </tr>
                            @endforeach
                            <tr>
                                <td colspan="5" align="right"><strong>Total Harga : </strong></td>
                                <td align="right"><strong>Rp. {{ number_format($pesanan->jumlah_harga) }}</strong></td>
                                <td>
                                    <a href="{{url('konfirmasi-cart')}}" class="btn btn-success" align="right>
                                        <i class="bi bi-cart-dash-fill">Check Out</i>
                                    </a>
                                </td>
                            </tr>
                     
                        </tbody>
                        
                        </table>
                    
                    </div>
                
              
            </div>  
        </div>
        </section>
@endsection
