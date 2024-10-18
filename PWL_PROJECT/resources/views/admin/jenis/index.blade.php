@extends('admin.layouts.main')

@section('content')
    <div class="container-fluid">
        <!-- Content Row -->
        <div class="card">
            <div class="card-header py-3 d-flex">
                <h6 class="m-0 font-weight-bold text-primary">
                    {{ __('Jenis') }}
                </h6>
                <div class="ml-auto">
                    <a href="{{ route('jenis.create') }}" class="btn btn-primary">
                        <span class="icon text-white-50">
                            <i class="fa fa-plus"></i>
                        </span>
                        <span class="text"> New Jenis </span>
                    </a>
                </div>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered table-striped table-hover" cellspacing="0" width="100%">
                        <thead>
                            <tr>
                                <th> No </th>
                                <th> Nama </th>
                                <th> Deskrpisi </th>
                                <th> Gambar </th>
                                <th> Action </th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($jenisLap as $jenis)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $jenis->nama }}</td>
                                    <td>{{ $jenis->deskripsi }}</td>
                                    <td><img src="{{ asset('storage/' . $jenis->images) }}" alt=""></td>
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
                                            <a href="{{ route('jenis.edit', $jenis->id) }}" class="btn btn-info">
                                                <i class="fa fa-pencil-alt"> Edit </i>
                                            </a>
                                            <form action="/admin/jenis/{{ $jenis->id }}" class="d-inline"
                                                method="POST">
                                                @csrf
                                                @method('delete')
                                                <button class="btn btn-danger"
                                                    style="border-top-left-radius: 0;border-bottom-left-radius: 0;">
                                                    <i class="fa fa-trash"> Delete </i>
                                                </button>
                                            </form>
                                        </div>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <!-- Content Row -->
    </div>
@endsection
