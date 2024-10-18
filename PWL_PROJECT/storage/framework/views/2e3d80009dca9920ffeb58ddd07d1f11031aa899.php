<?php $__env->startSection('content'); ?>
    <div class="container">
        <div class="content-wrapper">
            <div class="row" style="margin-top:20px">
                <div class="col-12 grid-margin">
                    <div class="card">
                        <div class="card-body">
                            <div class="row mb-3">
                                <div class="col">
                                    <h4 class="card-title">Detail Pesanan <?php echo e($transactions->nama); ?> </h4>
                                </div>
                                <div class="col text-right">
                                    <a href="javascript:void(0)" onclick="window.history.back()"
                                        class="btn btn-primary">Kembali</a>
                                </div>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-md-7">
                                    <table>
                                        <tr>
                                            <td>No Invoice</td>
                                            <td>:</td>
                                            <td class="p-2"><?php echo e($transactions->invoice); ?></td>
                                        </tr>
                                        <tr>
                                            <td>Metode Pembayaran</td>
                                            <td>:</td>
                                            <td class="p-2"><?php echo e($transactions->metode_pembayaran); ?></td>
                                        </tr>
                                        <tr>
                                            <td>Status Pesanan</td>
                                            <td>:</td>
                                            <td class="p-2"><?php echo e($transactions->status->nama); ?></td>
                                        </tr>
                                        <tr>
                                            <td>Tanggal</td>
                                            <td>:</td>
                                            <td class="p-2">
                                                <?php echo e(date('d-m-Y', strtotime(\Carbon\Carbon::parse($transactions->start_time)))); ?>

                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Waktu Mulai</td>
                                            <td>:</td>
                                            <td class="p-2">
                                                <?php echo e(date('H:i:s', strtotime(\Carbon\Carbon::parse($transactions->start_time)))); ?>

                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Waktu Selesai</td>
                                            <td>:</td>
                                            <td class="p-2">
                                                <?php echo e(date('H:i:s', strtotime(\Carbon\Carbon::parse($transactions->end_time)))); ?>

                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Total</td>
                                            <td>:</td>
                                            <td class="p-2">
                                                Rp<?php echo e(number_format($transactions->sub_total, 2, ',', '.')); ?></td>
                                        </tr>
                                        <?php if($transactions->bukti_pembayaran != null): ?>
                                            <tr>
                                                <td>Bukti Pembayaran</td>
                                                <td>:</td>
                                                <td class="p-2"><img
                                                        src="<?php echo e(asset('storage/' . $transactions->bukti_pembayaran)); ?>"
                                                        alt="" srcset="" class="img-fluid" width="300"></td>
                                            </tr>
                                        <?php endif; ?>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('customer.layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\PWL_PROJECT\resources\views/customer/order/details.blade.php ENDPATH**/ ?>