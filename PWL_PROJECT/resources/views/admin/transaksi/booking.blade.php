@extends('admin.layouts.main')
@section('content')
    <div class="content-wrapper">
        <div class="page-header">
            <h3 class="page-title">
                <span class="page-title-icon bg-gradient-primary text-white mr-2">
                    <i class="mdi mdi-home"></i>
                </span> transaction
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
            <div class="col-12 grid-margin">
                <div class="card">
                    <div class="card-body">
                        <div class="row mb-3">
                            <div class="col">
                                <h4 class="card-title">Data Transaction</h4>
                            </div>
                        </div>
                        <div class="table-responsive">
                            <table class="table table-bordered table-hovered" id="table">
                                <thead>
                                    <tr>
                                        <th class="product-thumbnail">Nama</th>
                                        <th class="product-thumbnail">tanggal</th>
                                        <th class="product-name">jam mulai</th>
                                        <th class="product-price">jam selesai</th>
                                        <th class="product-price">Status</th>
                                        <th class="product-quantity" width="20%">Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @if (count($transactions))
                                        @foreach ($transactions as $transaction)
                                            <tr>
                                                <td>{{ $transaction->nama }}</td>
                                                <td>{{ date('d-m-Y', strtotime(Carbon\Carbon::parse($transaction->start_time))) }}
                                                </td>
                                                <td>{{ date('H:i:s', strtotime(Carbon\Carbon::parse($transaction->start_time))) }}
                                                </td>
                                                <td>{{ date('H:i:s', strtotime(Carbon\Carbon::parse($transaction->end_time))) }}
                                                </td>
                                                <td>
                                                    <a href="" class="btn btn-outline-warning disabled">
                                                        {{ $transaction->status->nama }}
                                                    </a>
                                                </td>
                                                <td>
                                                    <a href="{{ route('transaksi.detail', $transaction->id) }}"
                                                        class="btn btn-outline-success">
                                                        detail
                                                    </a>
                                                    <a href="{{ route('transaksi.success', $transaction->id) }}"
                                                        class="btn btn-outline-primary">
                                                        Selesai
                                                    </a>
                                                    <a href="{{ route('transaksi.batal', $transaction->id) }}"
                                                        class="btn btn-outline-danger">
                                                        Batal
                                                    </a>
                                                </td>
                                            </tr>
                                        @endforeach
                                    @else
                                        <tr>
                                            <td colspan="5" align="center">Tidak ada data</td>
                                        </tr>
                                    @endif

                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>


        @endsection
