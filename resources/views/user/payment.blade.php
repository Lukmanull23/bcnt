@extends('user.layout.layout')
@include('sweetalert::alert')
@section('header')
        <header class="atas py-5 shadow p-3 mb-5 bg-body rounded">
                <div  class="row g-o">
                    
                    <h6 class="text-center fw-bolder mt-5 fs-1 text-white"><br><br>Payment</h6>
                </div>
            <style type="text/css">
                .atas {
                    background-image: url("assets/images/bg-training.png");
                    height: 411px;
                }
            </style>
            <meta charset="UTF-8">
            <meta http-equiv="X-UA-Compatible" content="IE=edge">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
                integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
            <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
            <title>Contoh Penggunaan SweetAlert</title>
        </header>
@endsection

@section('content')
        <section class="py-5">
        <div class="container px-4 px-lg-5 mt-5">
                <div class="row gx-4 gx-lg-5 row-cols-2 row-cols-md-3 row-cols-xl-4 justify-content-center">
                    <div class="col mb-5">
                        <div class="card h-100">
                            <img class="card-img-top" src="assets/images/Group 608.png" alt="..." />
                            <!-- Product details-->
                            <div class="card-body p-4">
                                <div class="text-center">
                                    <!-- Product name-->
                                    <h5 class="fw-bolder">Bayar Via QRIS</h5>
                                </div>
                            </div>
                            <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                                <div class="text-center"><a class="btn btn-outline-dark mt-auto" onclick="pilihqris()">Pilih</a></div>
                            </div>
                        </div>
                    </div>
                    <div class="col mb-5">
                        <div class="card h-100">
                            <!-- Product image-->
                            <img class="card-img-top" src="assets/images/approval_delegation.png" alt="..." />
                            <!-- Product details-->
                            <div class="card-body p-4">
                                <div class="text-center">
                                    <!-- Product name-->
                                    <h5 class="fw-bolder">Bayar Via COD</h5>
                                </div>
                            </div>
                            <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                                <div class="text-center"><a class="btn btn-outline-dark mt-auto" onclick="pilihcod()">Pilih</a></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="vstack gap-2 col-md-5 mx-auto">
                <button type="button" class="btn btn-outline-danger">Cancel</button>
            </div>

            <script type="text/javascript">
                function pilihqris() {
                    swal({
                        title: "Pembayaran Via QRIS!",
                        text: "Scan Kode Ini",
                        imageUrl: "assets/images/Group 608.png",
                        imageWidth: 550,
                        imageHeight: 225,
                        button: true
                    });
                }
            </script>
            <script type="text/javascript">
                function pilihcod() {
                swal({
                        title: "Pembayaran Via COD!",
                        text: "Silahkan siapkan uang kamu dan tunggu petugas kami datang",
                        icon: "success",
                        button: true
                    });
                }
            </script>
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
                integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
                crossorigin="anonymous">
            </script>
        </section>
@endsection
