<?php $__env->startSection('content'); ?>
    <div class="content-wrapper">
        <div class="page-header">
            <h3 class="page-title">
                <span class="page-title-icon bg-gradient-primary text-white mr-2">
                    <i class="mdi mdi-home"></i>
                </span> transaction
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
                                <h4 class="card-title">Data Transaction</h4>
                            </div>
                        </div>
                        <div class="table-responsive">
                            <table class="table table-bordered table-hovered" id="table">
                                <thead>
                                    <tr>
                                        <th class="product-thumbnail">Nama</th>
                                        <th class="product-thumbnail">tanggal</th>
                                        <th class="product-name">jam mulai</th>
                                        <th class="product-price">jam selesai</th>
                                        <th class="product-price">Status</th>
                                        <th class="product-quantity" width="20%">Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php if(count($transactions)): ?>
                                        <?php $__currentLoopData = $transactions; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $transaction): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
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
                                                    <a href="<?php echo e(route('transaksi.detail', $transaction->id)); ?>"
                                                        class="btn btn-outline-success">
                                                        detail
                                                    </a>
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


        <?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\PWL_PROJECT\resources\views/admin/transaksi/selesai.blade.php ENDPATH**/ ?>