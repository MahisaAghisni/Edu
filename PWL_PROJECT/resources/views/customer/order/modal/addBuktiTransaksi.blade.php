<div class="modal inmodal fade" id="addModal" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-xs">
        <form name="form_add" id="form_add" class="form-horizontal" action="{{ route('order.bayar.store',$transactions->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Kirim Bukti Pembayaran</h4>
                    <button type="button" class="close" data-dismiss="modal">
                        <span aria-hidden="true">&times;</span>
                        <span class="sr-only">Close</span>
                    </button>
                    
                </div>
                <div class="modal-body">
                    <div class="form-group">
                        <label for="exampleInputUsername1">Bukti Pembayaran</label>
                        <input class="form-control" type="file" id="bukti_pembayaran" name="bukti_pembayaran">

                        @error('bukti_pembayaran')
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