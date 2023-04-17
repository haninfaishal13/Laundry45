@extends('_layout.main-admin')
@section('title', 'Dashboard')
@section('content')
    <div class="container mt-3">
        <h3 class="fw-bold mb-3">Dashboard</h3>
        <div class="row mb-3">
            <div class="col-md-4 col-sm-3 col-6">
                <div class="card">
                    <div class="card-body">
                        <h5 class="fw-bold">Total Laundry</h5>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-sm-3 col-6">
                <div class="card">
                    <div class="card-body">
                        <h5 class="fw-bold">Laundry Diambil</h5>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-sm-3 col-6">
                <div class="card">
                    <div class="card-body">
                        <h5 class="fw-bold">Laundry Belum Diambil</h5>
                    </div>
                </div>
            </div>
        </div>
        <div class="row mb-3">
            <div class="col-sm-6 col-12">
                <div class="card">
                    <div class="card-body">
                        Ini chart pemasukan per hari
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-12">
                <div class="card">
                    <div class="card-body">
                        Ini chart pengeluaran
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
