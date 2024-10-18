@extends('admin.layouts.main')
@section('content')
    <div class="content-wrapper">
        <div class="page-header">
            <h3 class="page-title">
                <span class="page-title-icon bg-gradient-primary text-white mr-2">
                    <i class="mdi mdi-home"></i>
                </span> Dashboard
            </h3>
            <nav aria-label="breadcrumb">
                <ul class="breadcrumb">
                    <li class="breadcrumb-item active" aria-current="page">
                        <span></span>Overview <i class="mdi mdi-alert-circle-outline icon-sm text-primary align-middle"></i>
                    </li>
                </ul>
            </nav>
        </div>
        <div class="row">
            <div class="col-md-4 stretch-card grid-margin">
                <div class="card bg-gradient-danger card-img-holder text-white">
                    <div class="card-body">
                        {{-- <img src="{{ asset('adminassets') }}/assets/images/dashboard/circle.svg" class="card-img-absolute"
                            alt="circle-image" /> --}}
                        <h4 class="font-weight-normal mb-3">Total Pendapatan <i
                                class="mdi mdi-chart-line mdi-24px float-right"></i>
                        </h4>
                        <h2 class="mb-5">Rp. {{ number_format($pendapatan->penghasilan, 2, ',', '.') }}</h2>
                    </div>
                </div>
            </div>
            <div class="col-md-4 stretch-card grid-margin">
                <div class="card bg-gradient-info card-img-holder text-white">
                    <div class="card-body">
                        {{-- <img src="{{ asset('adminassets') }}/assets/images/dashboard/circle.svg" class="card-img-absolute"
                            alt="circle-image" /> --}}
                        <h4 class="font-weight-normal mb-3">Jumlah Transaksi <i
                                class="mdi mdi-bookmark-outline mdi-24px float-right"></i>
                        </h4>
                        <h2 class="mb-5">{{ $transaksi->total_order }}</h2>
                    </div>
                </div>
            </div>
            <div class="col-md-4 stretch-card grid-margin">
                <div class="card bg-gradient-success card-img-holder text-white">
                    <div class="card-body">
                        {{-- <img src="{{ asset('adminassets') }}/assets/images/dashboard/circle.svg" class="card-img-absolute"
                            alt="circle-image" /> --}}
                        <h4 class="font-weight-normal mb-3">Jumlah Lapangan<i
                                class="mdi mdi-diamond mdi-24px float-right"></i>
                        </h4>
                        <h2 class="mb-5">{{ $lapangan->lapangan }}</h2>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12 grid-margin">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">10 Transaksi Terbaru</h4>
                        <div class="table-responsive">
                            <table class="table table-bordered table-hovered" id="table">
                                <thead>
                                    <tr>
                                        <th class="product-thumbnail">Nama</th>
                                        <th class="product-thumbnail">tanggal</th>
                                        <th class="product-name">jam mulai</th>
                                        <th class="product-price">jam selesai</th>
                                        <th class="product-price">status</th>
                                        <th class="product-quantity" width="20%">Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @if (count($transaksi_terbaru))
                                        @foreach ($transaksi_terbaru as $transaction)
                                            <tr>
                                                <td>{{ $transaction->nama }}</td>
                                                <td>{{ date('d-m-Y', strtotime(Carbon\Carbon::parse($transaction->start_time))) }}
                                                </td>
                                                <td>{{ date('H:i:s', strtotime(Carbon\Carbon::parse($transaction->start_time))) }}
                                                </td>
                                                <td>{{ date('H:i:s', strtotime(Carbon\Carbon::parse($transaction->end_time))) }}
                                                </td>
                                                @if ($transaction->bukti_pembayaran != null)
                                                    <td>
                                                        <a href="" class="btn btn-outline-warning disabled">
                                                            menunggu konfirmasi
                                                        </a>
                                                    </td>
                                                @else
                                                    <td>
                                                        <a href="" class="btn btn-outline-warning disabled">
                                                            {{ $transaction->status->nama }}
                                                        </a>
                                                    </td>
                                                @endif
                                                <td>
                                                    <a href="{{ route('transaksi.detail', $transaction->id) }}"
                                                        class="btn btn-outline-success">
                                                        detail
                                                    </a>
                                                </td>
                                            </tr>
                                        @endforeach
                                    @else
                                        <tr>
                                            <td colspan="4" align="center">Tidak ada data</td>
                                        </tr>
                                    @endif

                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
