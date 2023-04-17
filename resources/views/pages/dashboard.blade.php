@extends('_layout.main')
@section('content')
<div class="container">
    <div class="mt-3">
        Dashboard
    </div>
    <div class="mt-2">
        <div class="d-flex justify-content-around">
            <a href="{{url('tambah-transaksi')}}" class="btn btn-light">
                <img src="{{asset('assets/image/icon/laundry.png')}}" class="img-fluid mt-3" style="width:60px" alt="">
                <p>Tambah Transaksi Laundry</p>
            </a>
            <button class="btn btn-light">
                <img src="{{asset('assets/image/icon/list.png')}}" class="img-fluid mt-3" style="width:60px" alt="">
                <p>Lihat Transaksi Laundry</p>
            </button>
            <button class="btn btn-light">
                <img src="{{asset('assets/image/icon/user_add.png')}}" class="img-fluid mt-3" style="width:60px" alt="">
                <p>Tambah Customer</p>
            </button>
        </div>
    </div>
</div>
@endsection
