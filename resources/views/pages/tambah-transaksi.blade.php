@extends('_layout.main')
@section('content')
    <div class="container">
        <div class="mt-3">
            <a href="{{url('dashboard')}}">Dashboard</a> > Tambah Transaksi
        </div>
        <div class="mt-2">
            <h3 class="mb-3">Tambah Transaksi Laundry</h3>
            <form id="form-tambah-transaksi">
                <span class="fw-semibold">Tipe:</span>
                <div class="row mb-2">
                    <div class="col-md-2 col-sm-3 col-4">
                        <input type="radio" name="type" id="cuci" value="1">
                        Cuci
                    </div>
                    <div class="col-md-2 col-sm-3 col-4">
                        <input type="radio" name="type" id="setrika" value="2">
                        Setrika
                    </div>
                    <div class="col-md-2 col-sm-3 col-4">
                        <input type="radio" name="type" id="cuci-setrika" value="3">
                        Cuci Setrika
                    </div>
                </div>
                <hr>
                <span class="fw-semibold">Durasi:</span>
                <div class="row mb-2">
                    <div class="col-md-2 col-sm-3 col-4">
                        <input type="radio" name="duration" id="reguler" value="1">
                        Reguler
                    </div>
                    <div class="col-md-2 col-sm-3 col-4">
                        <input type="radio" name="duration" id="cepat" value="2">
                        Cepat
                    </div>
                    <div class="col-md-2 col-sm-3 col-4">
                        <input type="radio" name="duration" id="kilat" value="3">
                        Kilat
                    </div>
                </div>
                <hr>
                <div class="mb-2">
                    <label for="namaCustomer" class="fw-semibold">Nama:</label>
                    <div class="row">
                        <div class="col-7 col-sm-10">
                            {{-- <input type="text" name="customer" id="nama-customer" style="width:100%; padding:3px;"> --}}
                            <select name="customer" id="nama-customer" class="select2" style="width:100%"></select>
                        </div>
                        <div class="col-5 col-sm-2">
                            <button type="button" class="btn btn-primary btn-sm" data-bs-toggle="modal" data-bs-target="#tambah-customer-modal">
                                <i class="fas fa-plus"></i>
                                Pelanggan Baru
                            </button>
                        </div>
                    </div>
                </div>
                <hr>
                <div class="row">
                    <div class="col-7">
                        <span class="fw-semibold">Daftar produk Laundry</span>
                    </div>
                    <div class="col-4"></div>
                    <div class="col-1">
                        <button type="button" class="btn btn-primary btn-sm" id="tambah-produk">
                            <i class="fas fa-plus"></i>
                        </button>
                    </div>
                </div>
                <div class="row">
                    <div class="col-7">Nama</div>
                    <div class="col-4">Jumlah</div>
                </div>
                <div id="product-choose-all">
                    <div class="row product-choose mb-2" data-id="1">
                        <div class="col-7">
                            <select name="nama_produk[]" class="nama-produk" style="width:100%;padding:3px;"></select>
                        </div>
                        <div class="col-4">
                            <input type="number" class="jumlah-produk" name="jumlah_produk[]" id="" style="width:100%;padding:3px;">
                        </div>
                        <div class="col-1">
                            <button class="btn btn-danger btn-sm product-delete" type="button" data-id="1">
                                <i class="fas fa-minus"></i>
                            </button>
                        </div>
                    </div>
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
    @include('partials.modal.tambah-customer')
@endsection
@section('after-script')
<script src="{{ asset('js/pages/tambah-transaksi.js') }}"></script>
@endsection
