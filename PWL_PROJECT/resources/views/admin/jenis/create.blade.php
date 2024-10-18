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
                    <a href="{{ route('jenis.index') }}" class="btn btn-primary btn-sm shadow-sm">Go Back</a>
                </div>
            </div>
            <div class="card-body">
                <form action="{{ route('jenis.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label for="nama"> Nama </label>
                        <input type="text" name="nama" class="form-control" id="nama" aria-describedby="nama">
                    </div>
                    <div class="form-group">
                        <label for="deskripsi"> Deskripsi </label>
                        <textarea name="deskripsi" class="form-control" id="deskripsi" deskripsi cols="30" rows="10"></textarea>
                    </div>
                    <div class="form-group">
                        <label for="images"> Gambar </label>
                        <input type="file" class="form-control" required="required" name="images">
                    </div>
                    <button type="submit" class="btn btn-primary btn-block"> Submit </button>
                </form>
            </div>
        </div>


        <!-- Content Row -->

    </div>
@endsection
