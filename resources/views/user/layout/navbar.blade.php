<!-- Navigation-->
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
                            <?php
                            $pesanan_utama = \App\Models\Pesanan::where('user_id', auth()->user()->id)->where('status',0)->first();
                            if(!empty($pesanan_utama))
                                {
                                $notif = \App\Models\PesananDetail::where('pesanan_id', $pesanan_utama->id)->count();
                                }
                                ?>
                                
                            <a class="nav-cart" href="/cart" style="text-decoration:none">Cart</a>
                            @if(!empty($notif))
                            <span class="badge bg-dark text-white ms-1 rounded-pill">{{$notif}}</span>
                            @endif
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