<div class="modal inmodal fade" id="addModal" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-xs">
        <form name="form_add" id="form_add" class="form-horizontal" action="<?php echo e(route('booking.store')); ?>" method="POST"
            enctype="multipart/form-data">
            <?php echo csrf_field(); ?>
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
                        <input type="date" class="form-control <?php $__errorArgs = ['date'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" id="date"
                            name="date" value="<?php echo e($jadwals); ?>" />
                    </div>
                </div>
                <div class="modal-body">
                    <div class="form-group mb-2">
                        <label for="start_time"><?php echo e(__('Jam Mulai')); ?></label>
                        <input type="time" class="form-control <?php $__errorArgs = ['start_time'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>"
                            id="start_time" name="start_time" value="<?php echo e(old('start_time')); ?>" />
                    </div>
                </div>

                <div class="modal-body">
                    <div class="form-group mb-2">
                        <label for="end_time"><?php echo e(__('Jam Selesai')); ?></label>
                        <input type="time" class="form-control <?php $__errorArgs = ['end_time'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>"
                            id="end_time" name="end_time" value="<?php echo e(old('end_time')); ?>" />
                    </div>
                </div>

                <input type="hidden" id="arenas_id" name="arenas_id" value="<?php echo e($arenas->id); ?>">
                <div class="modal-footer">
                    <button type="button" class="btn btn-white" data-dismiss="modal">Tutup</button>
                    <button type="submit" class="btn btn-primary">Simpan</button>
                </div>
            </div>
        </form>
    </div>
</div>
<?php /**PATH C:\xampp\htdocs\laravel\PWL_PROJECT\resources\views/customer/lapangan/modal/addModal.blade.php ENDPATH**/ ?>