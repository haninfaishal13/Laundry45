<nav class="navbar navbar-expand-lg bg-white shadow-sm py-3 main-content sticky-top">
    <div class="container-fluid">
        <button class="btn px-1 py-0 d-mb d-block" id="btn-sidebar-toggle">
            <i class="fas fa-stream"></i>
        </button>
        <div class="dropdown ms-auto">
            <a href="" class="nav-link dropdown-toggle" id="navbarDropdown" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                {{ Auth::user() ? Auth::user()->name : 'Faishal Hanin' }}
            </a>
            <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                <div class="d-flex justify-content-center mb-2">
                    <img src="{{asset('assets/image/default-user-image.jpeg')}}" class="img-circle img-icon img-fluid" alt="">
                </div>
                <div class="d-flex justify-content-center">
                    <button class="btn btn-danger btn-sm" id="logout">
                        <i class="fas fa-sign-out-alt"></i>
                        Logout
                    </button>
                </div>
            </div>
        </div>
    </div>
</nav>
