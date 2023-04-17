@extends('_layout.main')
@section('content')
<div class="container">
    <div class="mt-5">
        <div class="row">
            <div class="col-sm-6 col-12 order-sm-1 order-2">
                <img src="{{asset('assets/image/laundry.avif')}}" class="img-fluid" alt="">
            </div>
            <div class="col-sm-6 col-12 order-sm-2 order-1">
                <h1 class="fw-bold text-sm-start text-center">Laundry 45</h1>
            </div>
        </div>
    </div>
</div>
@include('partials.modal.auth')
@endsection
@section('after-script')
<script src="{{asset('js/welcome.js')}}"></script>
@endsection
