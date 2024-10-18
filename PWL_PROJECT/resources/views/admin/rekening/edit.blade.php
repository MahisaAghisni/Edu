@extends('admin.layouts.main')

@section('content')
    <div class="container-fluid">

        <!-- Page Heading -->


        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <!-- Content Row -->
        <div class="card shadow">
            <div class="card-header">
                <div class="d-sm-flex align-items-center justify-content-between mb-4">
                    <h1 class="h3 mb-0 text-gray-800">{{ __('create arena') }}</h1>
                    <a href="/admin/arena" class="btn btn-primary btn-sm shadow-sm">{{ __('Go Back') }}</a>
                </div>
            </div>
            <div class="card-body">
                <form name="form_add" id="form_add" class="form-horizontal" action="{{ route('admin.rekening.update', $rekening->id) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                        <div class="modal-content">
                            <div class="modal-header">
                                <h4 class="modal-title">Tambah Kategori</h4>
                                <button type="button" class="close" data-dismiss="modal">
                                    <span aria-hidden="true">&times;</span>
                                    <span class="sr-only">Close</span>
                                </button>
                                
                            </div>
                            <div class="modal-body">
                                <div class="form-group">
                                    <label for="exampleInputUsername1">Name</label>
                                    <input id="nama" type="text" class="form-control @error('nama') is-invalid @enderror" name="nama" value="{{ $rekening->nama }}" required autocomplete="nama" autofocus>
            
                                    @error('nama')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="modal-body">
                                <div class="form-group">
                                    <label for="exampleInputUsername1">Nama Bank</label>
                                    <input id="nama_bank" type="text" class="form-control @error('nama_bank') is-invalid @enderror" name="nama_bank" value="{{ $rekening->nama_bank }}" required autocomplete="nama_bank" autofocus>
            
                                    @error('nama_bank')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="modal-body">
                                <div class="form-group">
                                    <label for="exampleInputUsername1">Nomor Rekening</label>
                                    <input id="no_rekening" type="text" class="form-control @error('no_rekening') is-invalid @enderror" name="no_rekening" value="{{ $rekening->no_rekening }}" required autocomplete="no_rekening" autofocus>
            
                                    @error('no_rekening')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-white" data-dismiss="modal">Tutup</button>
                                <button type="submit" class="btn btn-primary">Simpan</button>
                            </div>
                        </div>
                    </form>
            </div>
        </div>
    </div>
@endsection
