@extends('admin.layouts.main')
@section('content')
    <div class="content-wrapper">
        <div class="page-header">
            <h3 class="page-title">
                <span class="page-title-icon bg-gradient-primary text-white mr-2">
                    <i class="mdi mdi-home"></i>
                </span> Pesanan
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
                                <h4 class="card-title">Detail Pesanan {{ $transactions->nama }} </h4>
                            </div>
                            <div class="col text-right">
                                <a href="javascript:void(0)" onclick="window.history.back()"
                                    class="btn btn-primary">Kembali</a>
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-md-7">
                                <table>
                                    <tr>
                                        <td>No Invoice</td>
                                        <td>:</td>
                                        <td class="p-2">{{ $transactions->invoice }}</td>
                                    </tr>
                                    <tr>
                                        <td>Metode Pembayaran</td>
                                        <td>:</td>
                                        <td class="p-2">{{ $transactions->metode_pembayaran }}</td>
                                    </tr>
                                    <tr>
                                        <td>Status Pesanan</td>
                                        <td>:</td>
                                        <td class="p-2">{{ $transactions->status->nama }}</td>
                                    </tr>
                                    <tr>
                                        <td>Tanggal</td>
                                        <td>:</td>
                                        <td class="p-2">
                                            {{ date('d-m-Y', strtotime(\Carbon\Carbon::parse($transactions->start_time))) }}
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Waktu Mulai</td>
                                        <td>:</td>
                                        <td class="p-2">
                                            {{ date('H:i:s', strtotime(\Carbon\Carbon::parse($transactions->start_time))) }}
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Waktu Selesai</td>
                                        <td>:</td>
                                        <td class="p-2">
                                            {{ date('H:i:s', strtotime(\Carbon\Carbon::parse($transactions->end_time))) }}
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Total</td>
                                        <td>:</td>
                                        <td class="p-2">Rp{{ number_format($transactions->sub_total, 2, ',', '.') }}
                                        </td>
                                    </tr>
                                    @if ($transactions->bukti_pembayaran != null)
                                        <tr>
                                            <td>Bukti Pembayaran</td>
                                            <td>:</td>
                                            <td class="p-2"><img
                                                    src="{{ asset('storage/' . $transactions->bukti_pembayaran) }}"
                                                    alt="" srcset="" class="img-fluid" width="300"></td>
                                        </tr>
                                        @if ($transactions->status_id == 1)
                                            <tr>
                                                <td></td>
                                                <td></td>
                                                <td class="p-2"><a
                                                        href="{{ route('transaksi.konfirmasi', $transactions->id) }}"
                                                        onclick="return confirm('Yakin ingin mengonfirmasi pesanan ini?')"
                                                        class="btn btn-primary mt-1">Konfirmasi Telah Bayar</a><br>
                                                    <small>Klik tombol ini jika pembeli sudah terbukti melakukan
                                                        pembayaran</small>
                                                </td>
                                            </tr>
                                        @endif
                                    @elseif($transactions->status_id == 1)
                                        <tr>
                                            <td></td>
                                            <td></td>
                                            <td class="p-2"><a href=""
                                                    onclick="return confirm('Yakin ingin mengonfirmasi pesanan ini?')"
                                                    class="btn btn-primary mt-1 disabled">Konfirmasi Telah Bayar</a><br>
                                                <small>Klik tombol ini jika pembeli sudah terbukti melakukan
                                                    pembayaran</small>
                                            </td>
                                        </tr>
                                    @endif
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
