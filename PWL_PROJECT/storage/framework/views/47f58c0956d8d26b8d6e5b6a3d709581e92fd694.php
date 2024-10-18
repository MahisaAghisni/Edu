<?php $__env->startSection('content'); ?>

<div class="bg-light py-3">
    <div class="container">
    <div class="row">
        <div class="col-md-12 mb-0"><a href="<?php echo e(route('home')); ?>">Home</a> <span class="mx-2 mb-0">/</span> <strong class="text-black">Order</strong></div>
    </div>
    </div>
</div>

<div class="site-section">
    <div class="container">
        <div class="row">
            <div class="col-md-12 text-center">
            <span class="icon-check_circle display-3 text-success"></span>
            <h2 class="display-3 text-black">Pembayaran!</h2>
            <p class="lead mb-5">Pilih salah satu nomor rekening di bawah ini untuk melakukan pembayaran</p>
            <div class="table-responsive">
                <table class="table table-bordered table-hovered" id="table">
                    <thead>
                        <tr>
                            <th width="5%">No</th>
                            <th>Nama</th>
                            <th>Nama Bank</th>
                            <th>Nomor Rekening</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $__currentLoopData = $rekenings; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $rekening): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <tr>
                                <td align="center"><?php echo e($rekening->id); ?></td>
                                <td><?php echo e($rekening->nama); ?></td>
                                <td><?php echo e($rekening->nama_bank); ?></td>
                                <td><?php echo e($rekening->no_rekening); ?></td>
                            </tr>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        

                    </tbody>
                </table>
            </div>
            <button type="button" class="btn btn-sm btn-primary" data-toggle="modal" data-target="#addModal">Kirim bukti pembayaran</button>
            </div>
        </div>

    </div>
</div>

<?php echo $__env->make('customer.order.modal.addBuktiTransaksi', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('customer.layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\PWL_PROJECT\resources\views/customer/order/bayar.blade.php ENDPATH**/ ?>