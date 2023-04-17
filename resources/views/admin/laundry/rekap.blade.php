@extends('_layout.main-admin')
@section('title', 'Rekap Transaksi Laundry')
@section('content')
    <div class="container mt-3">
        <h3 class="fw-bold mb-3">Riwayat Transaksi Laundry</h3>
        <div class="card">
            <div class="card-body">
                <table class="table table-stripped">
                    <tr>
                        <th>Tanggal</th>
                        <th>Total Kilo</th>
                        <th>Paket Durasi</th>
                        <th>Total Harga</th>
                        <th>Status Diambil</th>
                        <th>#</th>
                    </tr>
                    <tr>
                        <td>6 April 2023</td>
                        <td>10 kg</td>
                        <td>Kilat</td>
                        <td>Rp 50.000,00</td>
                        <td>Diambil</td>
                        <td></td>
                    </tr>
                </table>
            </div>
        </div>
    </div>
@endsection
