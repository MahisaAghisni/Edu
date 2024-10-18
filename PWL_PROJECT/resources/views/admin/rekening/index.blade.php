@extends('admin.layouts.main')

@section('content')
    <div class="container-fluid">
        <!-- Content Row -->
        <div class="card">
            <div class="card-header py-3 d-flex">
                <h6 class="m-0 font-weight-bold text-primary">
                    {{ __('Rekening') }}
                </h6>
                <div class="ml-auto">
                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#addModal">
                        Tambah
                    </button>
                </div>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered table-striped table-hover" cellspacing="0" width="100%">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Nama</th>
                                <th>Nama Bank</th>
                                <th>No Rekening</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @if(count($rekenings))
                            @foreach ($rekenings as $rekening)
                                <tr>
                                    <td>{{ $rekening->id }}</td>
                                    <td>{{ $rekening->nama }}</td>
                                    <td>{{ $rekening->nama_bank }}</td>
                                    <td>{{ $rekening->no_rekening }}</td>
                                    {{-- <td>
                                        <div class="btn-group" role="group" aria-label="Basic example">
                                            <a href="/admin/jenis/{{ $jenis->id }}" class="btn btn-info">
                                                <i class="fa fa-pencil-alt"> Edit </i>
                                            </a>
                                            <a href="/admin/jenis/{{ $jenis->id }}"
                                                onclick="return confirm('Yakin Hapus data')" class="btn btn-danger btn-sm">
                                                <i class="fa fa-trash">Delete</i>
                                            </a>
                                        </div>
                                    </td> --}}
                                    <td>
                                        <div class="btn-group btn-group-sm">
                                            <a href="{{ route('admin.rekening.edit', $rekening->id) }}" class="btn btn-info">
                                                <i class="fa fa-pencil-alt"> Edit </i>
                                            </a>
                    
                                            <a href="{{ route('admin.rekening.destroy', $rekening->id) }}" class="btn btn-danger"
                                                style="border-top-left-radius: 0;border-bottom-left-radius: 0;">
                                                <i class="fa fa-trash">Delete</i>
                                            </a>
                                        </div>
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
        <!-- Content Row -->
    </div>
    <!-- modal add data-->
    @include('admin.rekening.modal.addModal')

    {{-- @include('admin.rekening.modal.editModal') --}}
@endsection
