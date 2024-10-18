@extends('customer.layouts.app')
@section('content')
    <div class="bg-light py-3">
        <div class="container">
            <div class="row">
                <div class="col-md-12 mb-0"><a href="{{ route('home') }}">Home</a> <span class="mx-2 mb-0">/</span>
                    <strong class="text-black">Cart</strong>
                </div>
            </div>
        </div>
    </div>

    <div class="site-section">
        <div class="container">

            <div class="container">
                <div class="row mb-3">
                    <div class="col-md-12">
                        <h2 class="btn btn-warning text-white">Pending</h2>
                        <p>note:Harap melakukan pembayaran dp sebelum jadwal pemesanan lapangan</p>
                    </div>
                </div>
                <div class="row mb-5">
                    <div class="col-md-12">
                        <div class="table-responsive">
                            <div class="table-responsive">
                                <table class="table table-bordered">
                                    <thead>
                                        <tr>
                                            <th class="product-thumbnail">tanggal</th>
                                            <th class="product-name">jam mulai</th>
                                            <th class="product-price">jam selesai</th>
                                            <th class="product-name">Lapangan</th>
                                            <th class="product-name">Jenis Lapangan</th>
                                            <th class="product-quantity" width="20%">Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>

                                        @if (count($bookings))
                                            @foreach ($bookings as $booking)
                                                <tr>
                                                    <td>{{ $booking->date }}</td>
                                                    <td>{{ $booking->start_time }}</td>
                                                    <td>{{ $booking->end_time }}</td>
                                                    <td>{{ $booking->arenas->id }}</td>
                                                    <td>{{ $booking->arenas->jenis->nama }}</td>
                                                    <td>
                                                        <a href="{{ route('order.checkout', $booking->id) }}"
                                                            class="btn btn-success">Bayar</a>
                                                        <a href="{{ route('booking.batal', $booking->id) }}"
                                                            onclick="return confirm('Yakin ingin membatalkan pesanan')"
                                                            class="btn btn-danger">Batalkan</a>
                                                    </td>

                                                </tr>
                                            @endforeach
                                        @else
                                            <tr>
                                                <td colspan="6" align="center">Tidak ada data</td>
                                            </tr>
                                        @endif
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


            <div class="container">
                <div class="row mb-3">
                    <div class="col-md-12">
                        <h2 class="btn btn-warning text-white">Belum Dibayar</h2>
                    </div>
                </div>
                <div class="row mb-5">
                    <div class="col-md-12">
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th class="product-thumbnail">Nama</th>
                                    <th class="product-name">Tanggal</th>
                                    <th class="product-name">jam mulai</th>
                                    <th class="product-price">jam selesai</th>
                                    <th class="product-quantity" width="20%">Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @if (count($transactions))
                                    @foreach ($transactions as $transaction)
                                        @if ($transaction->status_id == 1)
                                            <tr>
                                                <td>{{ $transaction->nama }}</td>
                                                <td>{{ date('d-m-Y', strtotime(Carbon\Carbon::parse($transaction->start_time))) }}
                                                </td>
                                                <td>{{ date('H:i:s', strtotime(Carbon\Carbon::parse($transaction->start_time))) }}
                                                </td>
                                                <td>{{ date('H:i:s', strtotime(Carbon\Carbon::parse($transaction->end_time))) }}
                                                </td>
                                                <td>
                                                    @if ($transaction->bukti_pembayaran == null)
                                                        <a href="{{ route('order.bayar', $transaction->id) }}"
                                                            class="btn btn-success">
                                                            Bayar
                                                        </a>
                                                    @else
                                                        <a href="" class="btn btn-warning disabled">
                                                            Menunggu Konfirmasi
                                                        </a>
                                                    @endif
                                                    <a href="{{ route('order.details', $transaction->id) }}"
                                                        class="btn btn-outline-success">
                                                        detail
                                                    </a>
                                                </td>
                                            </tr>
                                        @endif
                                    @endforeach
                                @else
                                    <tr>
                                        <td colspan="5" align="center">Tidak ada data</td>
                                    </tr>
                                @endif
                            </tbody>
                        </table>

                    </div>

                    <div class="container">
                        <div class="row mb-3">
                            <div class="col-md-12">
                                <h2 class="btn btn-warning text-white">Booking</h2>
                            </div>
                        </div>
                        <div class="row mb-5">
                            <div class="col-md-12">
                                <div class="table-responsive">
                                    <table class="table table-bordered">
                                        <thead>
                                            <tr>
                                                <th class="product-thumbnail">Nama</th>
                                                <th class="product-name">Tanggal</th>
                                                <th class="product-name">jam mulai</th>
                                                <th class="product-price">jam selesai</th>
                                                <th class="product-price">status</th>
                                                <th class="product-price">Bukti</th>
                                                <th class="product-quantity" width="20%">Aksi</th>
                                            </tr>
                                        </thead>
                                        <tbody>

                                            @if (count($transactions))
                                                @foreach ($transactions as $transaction)
                                                    @if ($transaction->status_id == 2)
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
                                                                <a href="{{ route('order.pdf', $transaction->id) }}"
                                                                    class="btn btn-outline-danger">
                                                                    Cetak PDF
                                                                </a>
                                                            </td>
                                                            <td>
                                                                <a href="{{ route('order.details', $transaction->id) }}"
                                                                    class="btn btn-outline-success">
                                                                    detail
                                                                </a>
                                                            </td>
                                                        </tr>
                                                    @endif
                                                @endforeach
                                            @else
                                                <tr>
                                                    <td colspan="6" align="center">Tidak ada data</td>
                                                </tr>
                                            @endif
                                        </tbody>
                                    </table>
                                </div>

                            </div>

                        </div>
                    </div>

                    <div class="container">
                        <div class="row mb-3">
                            <div class="col-md-12">
                                <h2 class="btn btn-warning text-white">Riwayat Transaksi</h2>
                            </div>
                        </div>
                        <div class="row mb-5">
                            <div class="col-md-12">
                                <div class="table-responsive">
                                    <table class="table table-bordered">
                                        <thead>
                                            <tr>
                                                <th class="product-thumbnail">Nama</th>
                                                <th class="product-name">Tanggal</th>
                                                <th class="product-name">jam mulai</th>
                                                <th class="product-price">jam selesai</th>
                                                <th class="product-price">Status</th>
                                                <th class="product-quantity" width="20%">Aksi</th>
                                            </tr>
                                        </thead>
                                        <tbody>

                                            @if (count($transactions))
                                                @foreach ($transactions as $transaction)
                                                    @if ($transaction->status_id == 3 || $transaction->status_id == 4)
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
                                                                <a href="{{ route('order.details', $transaction->id) }}"
                                                                    class="btn btn-outline-success">
                                                                    detail
                                                                </a>
                                                            </td>
                                                        </tr>
                                                    @endif
                                                @endforeach
                                            @else
                                                <tr>
                                                    <td colspan="6" align="center">Tidak ada data</td>
                                                </tr>
                                            @endif
                                        </tbody>
                                    </table>
                                </div>

                            </div>

                        </div>
                    </div>
                @endsection
