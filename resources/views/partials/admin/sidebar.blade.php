<div class="sidebar" id="side-nav">
    <div class="container-fluid header-box d-flex justify-content-between align-items-center mt-4">
        <h1 class="fs-4 mb-0">
            <span class="bg-white text-dark rounded shadow px-2 me-2">PB</span>
            <span class="text-white">Profile Blog</span>
        </h1>
        <button class="btn d-md-none d-block px-1 py-0 d-mb d-block text-white" id="close-btn"><i class="fas fa-stream"></i></button>
    </div>
    <hr class="mx-2 my-2 text-white">

    <ul class="list-unstyled mt-3 me-2">
        <li class="px-2 py-2 mb-1 {{ Request::segment(2) == 'dashboard' ? 'active' : '' }}">
            <a href="{{ route('admin.dashboard') }}" class="text-decoration-none d-block ms-2">
                <i class="fas fa-user me-2"></i>Dashboard
            </a>
        </li>
        <li class="px-2 py-2 mb-1 sidebar-dropdown {{ Request::segment(2) == 'laundry' ? 'active' : '' }}" dropdown-target="laundry-dropdown">
            <span class="text-decoration-none d-block ms-2">
                <i class="fas fa-user me-2"></i>Laundry
            </span>
        </li>
        <ul class="list-unstyled {{ Request::segment(2) != 'laundry' ? 'd-none' : '' }}" id="laundry-dropdown">
            <li class="pe-2 ps-3 py-2 mb-1 {{ Request::segment(3) == 'transaksi' ? 'active' : '' }}">
                <a href="{{ route('admin.laundry.transaksi') }}" class="text-decoration-none d-block ms-2">
                    <i class="fas fa-user me-2"></i>Transaksi
                </a>
            </li>
            <li class="pe-2 ps-3 py-2 mb-1 {{ Request::segment(3) == 'rekap' ? 'active' : '' }}">
                <a href="{{ route('admin.laundry.rekap') }}" class="text-decoration-none d-block ms-2">
                    <i class="fas fa-user me-2"></i>Rekap
                </a>
            </li>
        </ul>
        <li class="px-2 py-2 {{ Request::segment(2) == 'pelanggan' ? 'active' : '' }}" >
            <a href="{{ route('admin.pelanggan') }}" class="text-decoration-none d-block ms-2">
                <i class="fas fa-comment-alt me-2"></i>Pelanggan
            </a>
        </li>
    </ul>
    <hr class="mx-2 my-2 text-white">
    <div class="d-flex justify-content-center">
        <a href="{{route('dashboard')}}" class="btn btn-sm fw-semibold text-light" style="background: #ff8c00">Homepage</a>
        {{-- <button class="" style="background: #ff8c00">

        </button> --}}
    </div>
</div>
