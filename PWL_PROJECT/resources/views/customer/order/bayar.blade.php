@extends('customer.layouts.app')
@section('content')

<div class="bg-light py-3">
    <div class="container">
    <div class="row">
        <div class="col-md-12 mb-0"><a href="{{ route('home') }}">Home</a> <span class="mx-2 mb-0">/</span> <strong class="text-black">Order</strong></div>
    </div>
    </div>
</div>

<div class="site-section">
    <div class="container">
        <div class="row">
            <div class="col-md-12 text-center">
            <span class="icon-check_circle display-3 text-success"></span>
            <h2 class="display-3 text-black">Pembayaran!</h2>
            <p class="lead mb-5">Pilih salah satu nomor rekening di bawah ini untuk melakukan pembayaran</p>
            <div class="table-responsive">
                <table class="table table-bordered table-hovered" id="table">
                    <thead>
                        <tr>
                            <th width="5%">No</th>
                            <th>Nama</th>
                            <th>Nama Bank</th>
                            <th>Nomor Rekening</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($rekenings as $rekening)
                            <tr>
                                <td align="center">{{ $rekening->id }}</td>
                                <td>{{ $rekening->nama }}</td>
                                <td>{{ $rekening->nama_bank }}</td>
                                <td>{{ $rekening->no_rekening }}</td>
                            </tr>
                        @endforeach
                        

                    </tbody>
                </table>
            </div>
            <button type="button" class="btn btn-sm btn-primary" data-toggle="modal" data-target="#addModal">Kirim bukti pembayaran</button>
            </div>
        </div>

    </div>
</div>

@include('customer.order.modal.addBuktiTransaksi')
@endsection
