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
                        <li class="nav-item"><a class="nav-link active" aria-current="page" href="/">Home</a></li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" id="navbarDropdown" href="/treatment" role="button" data-bs-toggle="dropdown" aria-expanded="false">Treatment</a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <li><a class="dropdown-item" href="/treatment">All Products</a></li>
                                <li><hr class="dropdown-divider" /></li>
                                <li><a class="dropdown-item" href="#spa">Spa/Massage</a></li>
                                <li><a class="dropdown-item" href="#scrub">Scrub</a></li>
                                <li><a class="dropdown-item" href="#hair">Hair Treatment</a></li>
                                <li><a class="dropdown-item" href="#facial">Facial</a></li>
                            </ul>
                        </li>
                        <li class="nav-item"><a class="nav-link" href="/training">Training</a></li>
                        <li class="nav-item"><a class="nav-link" href="/history">History</a></li>
                    </ul>

                    <ul class="navbar-nav ms-auto">
                        <button class="btn btn-outline-dark" type="submit">
                            <i class="bi-cart-fill me-1"></i>
                            Cart
                            <span class="badge bg-dark text-white ms-1 rounded-pill">0</span>
                        </button>

                        @auth
                        <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarScrollingDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Welcome back, {{ auth()->user()->name }}
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