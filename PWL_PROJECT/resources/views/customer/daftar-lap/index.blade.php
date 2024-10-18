@extends('customer.layouts.app')
@section('content')
    <div class="bg-light py-3">
        <div class="container">
            <div class="row">
                <div class="col-md-12 mb-0"><a href="">Home</a> <span class="mx-2 mb-0">/</span> <strong
                        class="text-black">Sewa Lapangan</a></strong></div>
            </div>
        </div>
    </div>

    <div class="site-section">
        <div class="container">
            <h2 style="color: black">Jenis Lapangan</h2>
            <div class="row mb-5">
                <div class="col-md-9 order-2">
                    <div class="row mb-5">
                        @foreach ($arenas as $arena)
                            <div class="col-sm-6 col-lg-4 mb-4" data-aos="fade-up">
                                <div class="block-4 text-center border">
                                    <a href="">
                                        <img src="{{ asset('storage/' . $arena->images) }}" alt="Image placeholder"
                                            class="img-fluid" width="100%" style="height:200px">
                                    </a>
                                    <div class="block-4-text p-4">
                                        <h3 style="color: black">{{ $arena->nama }}</h3>
                                        <p class="mb-0"></p>
                                        <a href="{{ route('detail-lapangan', $arena->id) }}"
                                            class="btn btn-primary mt-2">Cek Detail</a>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
