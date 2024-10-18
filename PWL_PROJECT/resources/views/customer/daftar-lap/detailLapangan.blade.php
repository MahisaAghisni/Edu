@extends('customer.layouts.app')
@section('content')
    <div class="bg-light py-3">
        <div class="container">
            <div class="row">
                <div class="col-md-12 mb-0"><a href="{{ route('home') }}">Home</a> <span class="mx-2 mb-0">/</span>
                    <strong class="text-black">{{ $jenisLap->nama }}</strong>
                </div>
            </div>
        </div>
    </div>

    <div class="site-section">
        <div class="container">
            <div class="image-header">
                <img src="{{ asset('storage/' . $jenisLap->images) }}" alt="">
                <h1>{{ $jenisLap->nama }}</h1>
                <p>Futsal Sport Centre</p>
            </div>

            <div class="daftar-lapangan">
                <h2 style="color: black; margin-top: 20px;">Daftar Lapangan</h2>
                <div class="row align-items-center">
                    @foreach ($arenas as $arena)
                        <div class="col-sm-6 col-lg-4 mb-4 mt-5" data-aos="fade-up">
                            <div class="block-4 text-center border">
                                <a href="">
                                    <img src="{{ asset('storage/' . $arena->image) }}" alt="Image placeholder"
                                        class="img-fluid" width="100%" style="height:200px">
                                </a>
                                <div class="block-4-text p-4">
                                    <h3 style="color: black">{{ $arena->nama }}</h3>
                                    <p class="mb-0" style="color: black">
                                        Rp.{{ number_format($arena->price, 2, ',', '.') }}/ Jam</p>
                                    <a href="{{ route('cek-lapangan', $arena->id) }}"
                                        class="btn btn-primary mt-2">booking</a>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>

                <div class="deskripsi">
                    <h2 style="color: black; margin-top: 30px;">Deskripsi</h2>
                    <p style="color: black">Silahkan memilih jenis lapangan futsal yang kamu minati
                        dan bikin kamu nyaman,iyaa senyaman kamu waktu bersamanya!.
                        Banyak jenis lapangan yang bisa kamu pilih, kita menyediakan jenis lapangan yang aman,nyaman,dan yang pasti
                        enak buat kamu untuk bermain futsal,
                        Dan ingat yaa! pilih lapangan yang sesuai dengan kemauan bersama dan yang paling penting pilih sesuai budget kamu! </p>
                </div>

            </div>
        </div>
    </div>
@endsection
