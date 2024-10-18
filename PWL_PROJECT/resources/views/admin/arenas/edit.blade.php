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
                <form action="/admin/arena/{{ $arena->id }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    {{-- <div class="form-group">
                        <label for="id">id</label>
                        <input type="text" class="form-control" id="id" value="{{ $arena->id }}" aria- describedby="id">
                    </div> --}}
                    <div class="form-group">
                        <label for="nama"> Nama </label>
                        <input type="text" name="nama" class="form-control" id="nama" value="{{ $arena->nama }}"
                            aria- describedby="nama">
                    </div>
                    <label for="exampleFormControlSelect1"> Jenis Arena </label>
                    <select class="form-control" id="jenis_id" name="jenis_id">
                        @foreach ($jenisLap as $jenis)
                            <option value="{{ $jenis->id }}">
                                {{ $arena->jenis_id ? '' : '' }}{{ $jenis->nama }}</option>
                        @endforeach
                    </select>
                    <div class="form-group">
                        <label for="price"> Harga </label>
                        <input type="price" name="price" class="form-control" id="price" value="{{ $arena->price }}"
                            aria- describedby="price">
                    </div>
                    <div class="form-group">
                        <label for="image"> Gambar </label>
                        <input type="file" class="form-control" name="image" value="{{ $arena->image }}">
                        <img width="150px" src="{{ asset('storage/' . $arena->image) }}">
                    </div>
                    <button type="submit" class="btn btn-primary btn-block"> Save </button>
                </form>
            </div>
        </div>
    </div>
@endsection
