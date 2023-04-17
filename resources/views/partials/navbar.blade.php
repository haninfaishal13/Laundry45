<nav class="navbar navbar-expand-lg bg-primary navbar-dark shadow-sm py-3 sticky-sm-bottom sticky-md-top">
    <div class="container">
        @if(Auth::guest())
            <a class="navbar-brand fw-semibold" href="{{url('/')}}">Laundry 45</a>
        @else
            <a class="navbar-brand fw-semibold" href="{{url('dashboard')}}">Laundry 45</a>
        @endif
        {{-- <ul class="flex-row navbar-nav ms-auto align-items-center">
            <li class="nav-item me-2">
                <a class="nav-link active" aria-current="page" href="#">About</a>
            </li>
            <li class="nav-item me-2">
                <a class="nav-link" aria-current="page" href="#">Portofolio</a>
            </li>
            <li class="nav-item me-2">
                <a class="nav-link" aria-current="page" href="#">Contact</a>
            </li>
            <li class="nav-item me-2">
                <a class="nav-link" href="#">Login</a>
            </li>
        </ul> --}}
        @if (!Auth::guest())
            <div class="dropdown">
                <a href="" class="text-light nav-link dropdown-toggle" id="navbarDropdown" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                    {{ Auth::user()->name }}
                </a>
                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                    {{-- <div class="d-flex justify-content-center mb-4">
                        <img src="{{asset('assets/image/default-user-image.jpeg')}}" class="img-circle img-icon img-fluid" alt="">
                    </div> --}}
                    <div class="d-flex flex-column justify-content-center">
                        @if(Auth::user()->role == 'admin')
                            {{-- <a href="{{route('backsite.profile')}}" class="btn btn-success btn-sm">
                                Dashboard
                            </a> --}}
                            <a href="#" class="btn btn-success btn-sm">
                                Halaman Admin
                            </a>
                        @endif
                        <button class="btn btn-danger btn-sm" id="logout">
                            <i class="fas fa-sign-out-alt"></i>
                            Logout
                        </button>
                    </div>
                </div>
            </div>
        @else
            <button type="button" class="btn btn-success btn-sm" data-bs-toggle="modal" data-bs-target="#auth-modal">
                <i class="fas fa-sign-in-alt"></i>Login
            </button>
        @endif
    </div>
</nav>
