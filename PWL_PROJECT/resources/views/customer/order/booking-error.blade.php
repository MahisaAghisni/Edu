@extends('customer.layouts.app')
@section('content')
    <div class="bg-light py-3">
        <div class="container">
            <div class="row">
                <div class="col-md-12 mb-0"><a href="{{ route('home') }}">Home</a> <span class="mx-2 mb-0">/</span> <strong
                        class="text-black">Order</strong></div>
            </div>
        </div>
    </div>

    <div class="site-section">
        <div class="container">
            <div class="row">
                <div class="container-fluid">

                    <div class="col-md-12 text-center">
                        <img src="{{ asset('shopper') }}/images/warning.png" width="120px" alt="">
                        <h2 class="display-3 text-black">Maaf!!</h2>
                        <p class="lead mb-5">Pemesanan anda gagal karena lapangan sudah dibooking</p>
                        <p><a href="{{ route('home') }}" class="btn btn-sm btn-primary">BACK</a></p>
                    </div>

                </div>
            </div>

        </div>
    </div>
@endsection
