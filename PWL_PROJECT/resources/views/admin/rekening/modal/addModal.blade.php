<div class="modal inmodal fade" id="addModal" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-xs">
        <form name="form_add" id="form_add" class="form-horizontal" action="{{ route('admin.rekening.store') }}" method="POST" enctype="multipart/form-data">
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
                        <input id="nama" type="text" class="form-control @error('nama') is-invalid @enderror" name="nama" value="{{ old('nama') }}" required autocomplete="nama" autofocus>

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
                        <input id="nama_bank" type="text" class="form-control @error('nama_bank') is-invalid @enderror" name="nama_bank" value="{{ old('nama_bank') }}" required autocomplete="nama_bank" autofocus>

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
                        <input id="no_rekening" type="text" class="form-control @error('no_rekening') is-invalid @enderror" name="no_rekening" value="{{ old('no_rekening') }}" required autocomplete="no_rekening" autofocus>

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