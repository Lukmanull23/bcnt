<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Beauty Care And Treatment</title>
        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="assets/images/logo.png" />
        <!-- Bootstrap icons-->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css">
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="css/styles.css" rel="stylesheet" />
        <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
  </head>
</head>
<body>
<nav class="navbar fixed-top navbar-expand-lg navbar-light bg-light mb-5">
            <div class="container px-4 px-lg-5">
                <img src="assets/images/logo.png" alt="..." width="80px"/>
                <div class="row g-o">
                   <h6 class="fw-bolder mb-0">Beauty Care</h6>
                   <h6 class="fw-bolder">and Treatment</h6>
                </div>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0 ms-lg-4">
                        <li class="nav-item"><a class="nav-link " aria-current="page" href="/">Home</a></li>
                        <li class="nav-item"><a class="nav-link" href="/training">Menu</a></li>
                        <li class="nav-item"><a class="nav-link" href="/history">History</a></li>
                    </ul>

                    <ul class="navbar-nav ms-auto">
                        
                        <button class="btn btn-outline-dark" type="submit" >
                            <i class="bi-cart-fill me-1"></i>
                            <a class="nav-cart" href="/cart" style="text-decoration:none">Cart</a>
        
                            <span class="badge bg-dark text-white ms-1 rounded-pill">0</span>
                        </button>

                        @auth
                        <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarScrollingDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            {{ auth()->user()->name }}
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarScrollingDropdown">
                            <li><a class="dropdown-item" href="/profile"><i class="bi bi-person"></i>Profile</a></li>
                            <li><hr class="dropdown-divider"></li>
                            <li>
                                <form action="/logout" method="post">
                                    @csrf
                                    <button type="submit" class="dropdown-item">
                                        <i class="bi bi-box-arrow-right"></i>Logout</a>
                                    </button>
                                </form>
                            </li>
                        </ul>
                        </li>
                        @else
                        <li class="nav-item">
                            <a class="nav-link" href="/login"><i class="bi bi-box-arrow-in-right"></i>Login</a>
                        </li>
                        @endauth
                    </ul>

                    
                </div>
            </div>
        </nav>
    <br><br>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
            <div class="card mt-5">
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-6">
                            <img src="{{url('uploads')}}/{{$product->gambar}}" class="rounded mx-auto" width="100%" alt="">
                        </div>
                        <div class="col-md-6">
                            <h3>{{ $product->nama_product }}</h3>
                            <table class="table">
                                <tbody>
                                    <tr>
                                        <td>Harga</td>
                                        <td>:</td>
                                        <td>Rp. {{number_format ($product->harga)}} </td>
                                    </tr>
                                    <tr>
                                        <td>Tiket</td>
                                        <td>:</td>
                                        <td>{{ $product->tiket }} </td>
                                    </tr>
                                    <tr>
                                        <td>Deskripsi</td>
                                        <td>:</td>
                                        <td>{{ $product->deskripsi }} </td>
                                    </tr>
                                    <tr>
                                        <td>Jumlah Pesan</td>
                                        <td>:</td>
                                        <td>
                                            <form method="post" action="{{url('pesan')}}/{{$product->id}}">
                                            @csrf
                                                <input type="text" name="jumlah_pesan" class="from-control" required="">
                                                <button type="submit" class="btn btn-danger ms-5"><i class="bi bi-cart" onclick="masukKeranjang()"></i> Masukkan Keranjang</button>
                                            </form>
                                        </td>
                                        
                                    
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <script type="text/javascript">
                            function masukKeranjang() {
                            swal({
                                    title: "Sukses",
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

                        <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
                        @include('sweetalert::alert')
                    </div>
                </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>