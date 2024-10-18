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
                    <h1 class="h3 mb-0 text-gray-800">{{ __('create jenis') }}</h1>
                    <a href="/admin/jenis" class="btn btn-primary btn-sm shadow-sm">{{ __('Go Back') }}</a>
                </div>
            </div>
            <div class="card-body">
                <form action="/admin/jenis/{{ $jenis->id }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="form-group">
                        <label for="nama"> Nama </label>
                        <input type="text" name="nama" class="form-control" id="nama" value="{{ $jenis->nama }}" aria-
                            describedby="nama">
                    </div>
                    <div class="form-group">
                        <label for="deskripsi"> Deskripsi </label>
                        <input type="text" name="deskripsi" class="form-control" id="deskripsi"
                            value="{{ $jenis->deskripsi }}" aria- describedby="deskripsi">
                    </div>
                    <div class="form-group">
                        <label for="images"> Gambar </label>
                        <input type="file" class="form-control" required="required" name="images"
                            value="{{ $jenis->images }}">
                        <img width="150px" src="{{ asset('storage/' . $jenis->images) }}">
                    </div>
                    <button type="submit" class="btn btn-primary btn-block"> Save </button>
                </form>
            </div>
        </div>


        <!-- Content Row -->

    </div>
@endsection
