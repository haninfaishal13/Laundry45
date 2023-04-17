@extends('_layout.main-admin')
@section('title', 'Pelanggan')
@section('content')
    <div class="container mt-3">
        <h3 class="fw-bold mb-3">Daftar Pelanggan</h3>
        <div class="card mb-3">
            <div class="card-body">
                <table class="table table-stripped">
                    <tr>
                        <th>Nama</th>
                        <th>Pertama Laundry</th>
                        <th>Terakhir Laundry</th>
                        <th>Total Laundry</th>
                    </tr>
                    <tr>
                        <td>Hanin</td>
                        <td>6 April 2023</td>
                        <td>6 April 2023</td>
                        <td>10 kg</td>
                    </tr>
                </table>
            </div>
        </div>
    </div>
@endsection
