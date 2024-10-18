@extends('customer.layouts.app')
@section('content')

    <div class="site-section">
        <div class="container">
            <div class="image-header">
                <img src="{{ asset('storage/' . $arenas->image) }}" alt="">
                <h1>Futsal Sport Centre</h1>
            </div>
            <div class="lapangan">
                <div class="title">
                    <h2 style="color:black">{{ $arenas->nama }}</h2>
                    <h4><a href="{{ route('detail-lapangan', $arenas->jenis->id) }}">{{ $arenas->jenis->name }}</a>
                    </h4>
                </div>

                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
                        <li class="breadcrumb-item"><a
                                href="{{ route('detail-lapangan', $arenas->jenis_id) }}">{{ $arenas->jenis->nama }}</a>
                        </li>
                        <li class="breadcrumb-item active" aria-current="page">{{ $arenas->nama }}</li>
                    </ol>
                </nav>

                <div class="cek-jadwal">
                    <h4 style="color:black">Pilih Tanggal Booking : </h4>
                    <form action="{{ url()->current() }}" method="get">
                        <div class="form-group mb-2">
                            <label for="jadwals" style="color:black">pilih tanggal booking</label>
                            <input type="date" class="form-control " id="jadwals" name="jadwals"
                                value="{{ request('jadwals') }}" />
                        </div>
                        <button type="submit" class="btn btn-primary" value="jadwals">Cek Jadwal</button>
                    </form>
                    @if (isset($jadwals))
                        @if (count($transactions) > 0)
                            <div class="table-responsive" style="margin-top: 20px">
                                <table class="table table-bordered table-hovered" id="table">
                                    <thead>
                                        <tr>
                                            <th>Nama</th>
                                            <th>date</th>
                                            <th>start time</th>
                                            <th>end time</th>
                                            <th>Status</th>

                                        </tr>
                                    </thead>
                                    <tbody>

                                        @foreach ($transactions as $transaction)
                                            <tr>
                                                <td>{{ $transaction->nama }}</td>
                                                <td>{{ date('d-m-Y', strtotime(\Carbon\Carbon::parse($transaction->start_time))) }}
                                                </td>
                                                <td>{{ date('H:i:s', strtotime(\Carbon\Carbon::parse($transaction->start_time))) }}
                                                </td>
                                                <td>{{ date('H:i:s', strtotime(\Carbon\Carbon::parse($transaction->end_time))) }}
                                                </td>
                                                <td>
                                                    <a href="" class="btn btn-outline-warning disabled">
                                                        {{ $transaction->status->nama }}
                                                    </a>
                                                </td>
                                            </tr>
                                        @endforeach


                                    </tbody>
                                </table>
                            </div>
                        @else
                            <div class="alert alert-info" style="margin-top: 50px">
                                <strong>Belum ada jadwal </strong>
                            </div>
                        @endif
                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#addModal">
                            Booking Sekarang
                        </button>
                    @endif

                </div>
            </div>



        </div>
    </div>

    @include('customer.lapangan.modal.addModal')
@endsection
