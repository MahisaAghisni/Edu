<div class="modal inmodal fade" id="addModal" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-xs">
        <form name="form_add" id="form_add" class="form-horizontal" action="<?php echo e(route('order.bayar.store',$transactions->id)); ?>" method="POST" enctype="multipart/form-data">
        <?php echo csrf_field(); ?>
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

                        <?php $__errorArgs = ['bukti_pembayaran'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                            <span class="invalid-feedback" role="alert">
                                <strong><?php echo e($message); ?></strong>
                            </span>
                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                    </div>
                </div> 
                <div class="modal-footer">
                    <button type="button" class="btn btn-white" data-dismiss="modal">Tutup</button>
                    <button type="submit" class="btn btn-primary">Simpan</button>
                </div>
            </div>
        </form>
    </div>
</div><?php /**PATH C:\xampp\htdocs\PWL_PROJECT\resources\views/customer/order/modal/addBuktiTransaksi.blade.php ENDPATH**/ ?>