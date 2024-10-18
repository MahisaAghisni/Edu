<?php $__env->startSection('content'); ?>
    <div class="content-wrapper">
        <div class="page-header">
            <h3 class="page-title">
                <span class="page-title-icon bg-gradient-primary text-white mr-2">
                    <i class="mdi mdi-home"></i>
                </span> Kategori
            </h3>
            <nav aria-label="breadcrumb">
                <ul class="breadcrumb">
                    <li class="breadcrumb-item active" aria-current="page">
                        <span></span>Overview <i class="mdi mdi-alert-circle-outline icon-sm text-primary align-middle"></i>
                    </li>
                </ul>
            </nav>
        </div>
        <div class="row">
            <div class="col-12 grid-margin">
                <div class="card">
                    <div class="card-body">
                        <div class="row mb-3">
                            <div class="col">
                                <h4 class="card-title">Data Produk</h4>
                            </div>
                            <div class="col text-right">
                                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#addModal">
                                    Tambah
                                </button>
                            </div>
                        </div>
                        <div class="table-responsive">
                            <table class="table table-bordered table-hovered" id="table">
                                <thead>
                                    <tr>
                                        <th width="5%">No</th>
                                        <th>Nama Pemesan</th>
                                        <th>Jenis Lapangan</th>
                                        <th>Lapangan</th>
                                        <th>Tanggal</th>
                                        <th>Jam Mulai</th>
                                        <th>Jam Selesai</th>
                                        <th>Sub Total</th>
                                        <th>Metode Pembayaran</th>
                                        <th width="15%">Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php if(count($transactions)): ?>
                                        <?php $__currentLoopData = $transactions; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $transaction): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <tr>
                                                <td align="center"><?php echo e($transaction->id); ?></td>
                                                <td><?php echo e($transaction->bookings->nama); ?></td>
                                                <td><?php echo e($transaction->bookings->arenas->jenis->nama); ?></td>
                                                <td><?php echo e($transaction->bookings->arenas->id); ?></td>
                                                <td><?php echo e($transaction->bookings->date); ?></td>
                                                <td><?php echo e($transaction->bookings->start_time); ?></td>
                                                <td><?php echo e($transaction->bookings->end_time); ?></td>
                                                <?php
                                                $sub_total = 0;
                                                $hour = date('h', strtotime(Carbon\Carbon::parse($transaction->bookings->end_time)->format('H:i:s'))) - date('h', strtotime(Carbon\Carbon::parse($transaction->bookings->start_time)->format('H:i:s')));
                                                $total = $hour * $transaction->bookings->arenas->price;
                                                $sub_total += $total;
                                                ?>
                                                <td><?php echo e($total); ?></td>
                                                <td><?php echo e($transaction->metode_pembayaran); ?></td>
                                                <td align="center">

                                                </td>
                                            </tr>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    <?php else: ?>
                                        <tr>
                                            <td colspan="4" align="center">Tidak ada data</td>
                                        </tr>
                                    <?php endif; ?>

                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>


        <?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\PWL_PROJECT\resources\views/admin/transaksi/index.blade.php ENDPATH**/ ?>