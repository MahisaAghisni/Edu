<?php $__env->startSection('content'); ?>
    <div class="bg-light py-3">
        <div class="container">
            <div class="row">
                <div class="col-md-12 mb-0"><a href="<?php echo e(route('home')); ?>">Home</a> <span class="mx-2 mb-0">/</span>
                    <strong class="text-black">Cart</strong>
                </div>
            </div>
        </div>
    </div>

    <div class="site-section">
        <div class="container">

            <div class="container">
                <div class="row mb-3">
                    <div class="col-md-12">
                        <h2 class="btn btn-warning text-white">Pending</h2>
                        <p>note:Harap melakukan pembayaran dp sebelum jadwal pemesanan lapangan</p>
                    </div>
                </div>
                <div class="row mb-5">
                    <div class="col-md-12">
                        <div class="table-responsive">
                            <div class="table-responsive">
                                <table class="table table-bordered">
                                    <thead>
                                        <tr>
                                            <th class="product-thumbnail">tanggal</th>
                                            <th class="product-name">jam mulai</th>
                                            <th class="product-price">jam selesai</th>
                                            <th class="product-name">Lapangan</th>
                                            <th class="product-name">Jenis Lapangan</th>
                                            <th class="product-quantity" width="20%">Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>

                                        <?php if(count($bookings)): ?>
                                            <?php $__currentLoopData = $bookings; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $booking): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                <tr>
                                                    <td><?php echo e($booking->date); ?></td>
                                                    <td><?php echo e($booking->start_time); ?></td>
                                                    <td><?php echo e($booking->end_time); ?></td>
                                                    <td><?php echo e($booking->arenas->id); ?></td>
                                                    <td><?php echo e($booking->arenas->jenis->nama); ?></td>
                                                    <td>
                                                        <a href="<?php echo e(route('order.checkout', $booking->id)); ?>"
                                                            class="btn btn-success">Bayar</a>
                                                        <a href="<?php echo e(route('booking.batal', $booking->id)); ?>"
                                                            onclick="return confirm('Yakin ingin membatalkan pesanan')"
                                                            class="btn btn-danger">Batalkan</a>
                                                    </td>

                                                </tr>
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                        <?php else: ?>
                                            <tr>
                                                <td colspan="6" align="center">Tidak ada data</td>
                                            </tr>
                                        <?php endif; ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


            <div class="container">
                <div class="row mb-3">
                    <div class="col-md-12">
                        <h2 class="btn btn-warning text-white">Belum Dibayar</h2>
                    </div>
                </div>
                <div class="row mb-5">
                    <div class="col-md-12">
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th class="product-thumbnail">Nama</th>
                                    <th class="product-name">Tanggal</th>
                                    <th class="product-name">jam mulai</th>
                                    <th class="product-price">jam selesai</th>
                                    <th class="product-quantity" width="20%">Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php if(count($transactions)): ?>
                                    <?php $__currentLoopData = $transactions; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $transaction): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <?php if($transaction->status_id == 1): ?>
                                            <tr>
                                                <td><?php echo e($transaction->nama); ?></td>
                                                <td><?php echo e(date('d-m-Y', strtotime(Carbon\Carbon::parse($transaction->start_time)))); ?>

                                                </td>
                                                <td><?php echo e(date('H:i:s', strtotime(Carbon\Carbon::parse($transaction->start_time)))); ?>

                                                </td>
                                                <td><?php echo e(date('H:i:s', strtotime(Carbon\Carbon::parse($transaction->end_time)))); ?>

                                                </td>
                                                <td>
                                                    <?php if($transaction->bukti_pembayaran == null): ?>
                                                        <a href="<?php echo e(route('order.bayar', $transaction->id)); ?>"
                                                            class="btn btn-success">
                                                            Bayar
                                                        </a>
                                                    <?php else: ?>
                                                        <a href="" class="btn btn-warning disabled">
                                                            Menunggu Konfirmasi
                                                        </a>
                                                    <?php endif; ?>
                                                    <a href="<?php echo e(route('order.details', $transaction->id)); ?>"
                                                        class="btn btn-outline-success">
                                                        detail
                                                    </a>
                                                </td>
                                            </tr>
                                        <?php endif; ?>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                <?php else: ?>
                                    <tr>
                                        <td colspan="5" align="center">Tidak ada data</td>
                                    </tr>
                                <?php endif; ?>
                            </tbody>
                        </table>

                    </div>

                    <div class="container">
                        <div class="row mb-3">
                            <div class="col-md-12">
                                <h2 class="btn btn-warning text-white">Booking</h2>
                            </div>
                        </div>
                        <div class="row mb-5">
                            <div class="col-md-12">
                                <div class="table-responsive">
                                    <table class="table table-bordered">
                                        <thead>
                                            <tr>
                                                <th class="product-thumbnail">Nama</th>
                                                <th class="product-name">Tanggal</th>
                                                <th class="product-name">jam mulai</th>
                                                <th class="product-price">jam selesai</th>
                                                <th class="product-price">status</th>
                                                <th class="product-price">Bukti</th>
                                                <th class="product-quantity" width="20%">Aksi</th>
                                            </tr>
                                        </thead>
                                        <tbody>

                                            <?php if(count($transactions)): ?>
                                                <?php $__currentLoopData = $transactions; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $transaction): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                    <?php if($transaction->status_id == 2): ?>
                                                        <tr>
                                                            <td><?php echo e($transaction->nama); ?></td>
                                                            <td><?php echo e(date('d-m-Y', strtotime(Carbon\Carbon::parse($transaction->start_time)))); ?>

                                                            </td>
                                                            <td><?php echo e(date('H:i:s', strtotime(Carbon\Carbon::parse($transaction->start_time)))); ?>

                                                            </td>
                                                            <td><?php echo e(date('H:i:s', strtotime(Carbon\Carbon::parse($transaction->end_time)))); ?>

                                                            </td>

                                                            <td>
                                                                <a href="" class="btn btn-outline-warning disabled">
                                                                    <?php echo e($transaction->status->nama); ?>

                                                                </a>
                                                            </td>
                                                            <td>
                                                                <a href="<?php echo e(route('order.pdf', $transaction->id)); ?>"
                                                                    class="btn btn-outline-danger">
                                                                    Cetak PDF
                                                                </a>
                                                            </td>
                                                            <td>
                                                                <a href="<?php echo e(route('order.details', $transaction->id)); ?>"
                                                                    class="btn btn-outline-success">
                                                                    detail
                                                                </a>
                                                            </td>
                                                        </tr>
                                                    <?php endif; ?>
                                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                            <?php else: ?>
                                                <tr>
                                                    <td colspan="6" align="center">Tidak ada data</td>
                                                </tr>
                                            <?php endif; ?>
                                        </tbody>
                                    </table>
                                </div>

                            </div>

                        </div>
                    </div>

                    <div class="container">
                        <div class="row mb-3">
                            <div class="col-md-12">
                                <h2 class="btn btn-warning text-white">Riwayat Transaksi</h2>
                            </div>
                        </div>
                        <div class="row mb-5">
                            <div class="col-md-12">
                                <div class="table-responsive">
                                    <table class="table table-bordered">
                                        <thead>
                                            <tr>
                                                <th class="product-thumbnail">Nama</th>
                                                <th class="product-name">Tanggal</th>
                                                <th class="product-name">jam mulai</th>
                                                <th class="product-price">jam selesai</th>
                                                <th class="product-price">Status</th>
                                                <th class="product-quantity" width="20%">Aksi</th>
                                            </tr>
                                        </thead>
                                        <tbody>

                                            <?php if(count($transactions)): ?>
                                                <?php $__currentLoopData = $transactions; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $transaction): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                    <?php if($transaction->status_id == 3 || $transaction->status_id == 4): ?>
                                                        <tr>
                                                            <td><?php echo e($transaction->nama); ?></td>
                                                            <td><?php echo e(date('d-m-Y', strtotime(Carbon\Carbon::parse($transaction->start_time)))); ?>

                                                            </td>
                                                            <td><?php echo e(date('H:i:s', strtotime(Carbon\Carbon::parse($transaction->start_time)))); ?>

                                                            </td>
                                                            <td><?php echo e(date('H:i:s', strtotime(Carbon\Carbon::parse($transaction->end_time)))); ?>

                                                            </td>
                                                            <td>
                                                                <a href="" class="btn btn-outline-warning disabled">
                                                                    <?php echo e($transaction->status->nama); ?>

                                                                </a>
                                                            </td>
                                                            <td>
                                                                <a href="<?php echo e(route('order.details', $transaction->id)); ?>"
                                                                    class="btn btn-outline-success">
                                                                    detail
                                                                </a>
                                                            </td>
                                                        </tr>
                                                    <?php endif; ?>
                                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                            <?php else: ?>
                                                <tr>
                                                    <td colspan="6" align="center">Tidak ada data</td>
                                                </tr>
                                            <?php endif; ?>
                                        </tbody>
                                    </table>
                                </div>

                            </div>

                        </div>
                    </div>
                <?php $__env->stopSection(); ?>

<?php echo $__env->make('customer.layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\PWL_PROJECT\resources\views/customer/order/index.blade.php ENDPATH**/ ?>