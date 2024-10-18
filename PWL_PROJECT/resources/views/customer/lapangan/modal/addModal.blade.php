<div class="modal inmodal fade" id="addModal" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-xs">
        <form name="form_add" id="form_add" class="form-horizontal" action="{{ route('booking.store') }}" method="POST"
            enctype="multipart/form-data">
            @csrf
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title" style="color:black">Pesan Lapangan</h4>
                    <button type="button" class="close" data-dismiss="modal">
                        <span aria-hidden="true">&times;</span>
                        <span class="sr-only">Close</span>
                    </button>

                </div>
                <div class="modal-body">
                    <div class="form-group mb-2">
                        <label for="date">pilih tanggal booking</label>
                        <input type="date" class="form-control @error('date') is-invalid @enderror" id="date"
                            name="date" value="{{ $jadwals }}" />
                    </div>
                </div>
                <div class="modal-body">
                    <div class="form-group mb-2">
                        <label for="start_time">{{ __('Jam Mulai') }}</label>
                        <input type="time" class="form-control @error('start_time') is-invalid @enderror"
                            id="start_time" name="start_time" value="{{ old('start_time') }}" />
                    </div>
                </div>

                <div class="modal-body">
                    <div class="form-group mb-2">
                        <label for="end_time">{{ __('Jam Selesai') }}</label>
                        <input type="time" class="form-control @error('end_time') is-invalid @enderror"
                            id="end_time" name="end_time" value="{{ old('end_time') }}" />
                    </div>
                </div>

                <input type="hidden" id="arenas_id" name="arenas_id" value="{{ $arenas->id }}">
                <div class="modal-footer">
                    <button type="button" class="btn btn-white" data-dismiss="modal">Tutup</button>
                    <button type="submit" class="btn btn-primary">Simpan</button>
                </div>
            </div>
        </form>
    </div>
</div>
