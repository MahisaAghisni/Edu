
<?php $__env->startSection('content'); ?>

    <div class="site-section">
        <div class="container">
            <div class="image-header">
                <img src="<?php echo e(asset('storage/' . $arenas->image)); ?>" alt="">
                <h1>Futsal Sport Centre</h1>
            </div>
            <div class="lapangan">
                <div class="title">
                    <h2 style="color:black"><?php echo e($arenas->nama); ?></h2>
                    <h4><a href="<?php echo e(route('detail-lapangan', $arenas->jenis->id)); ?>"><?php echo e($arenas->jenis->name); ?></a>
                    </h4>
                </div>

                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="<?php echo e(route('home')); ?>">Home</a></li>
                        <li class="breadcrumb-item"><a
                                href="<?php echo e(route('detail-lapangan', $arenas->jenis_id)); ?>"><?php echo e($arenas->jenis->nama); ?></a>
                        </li>
                        <li class="breadcrumb-item active" aria-current="page"><?php echo e($arenas->nama); ?></li>
                    </ol>
                </nav>

                <div class="cek-jadwal">
                    <h4 style="color:black">Pilih Tanggal Booking : </h4>
                    <form action="<?php echo e(url()->current()); ?>" method="get">
                        <div class="form-group mb-2">
                            <label for="jadwals" style="color:black">pilih tanggal booking</label>
                            <input type="date" class="form-control " id="jadwals" name="jadwals"
                                value="<?php echo e(request('jadwals')); ?>" />
                        </div>
                        <button type="submit" class="btn btn-primary" value="jadwals">Cek Jadwal</button>
                    </form>
                    <?php if(isset($jadwals)): ?>
                        <?php if(count($transactions) > 0): ?>
                            <div class="table-responsive" style="margin-top: 20px">
                                <table class="table table-bordered table-hovered" id="table">
                                    <thead>
                                        <tr>
                                            <th>Nama</th>
                                            <th>date</th>
                                            <th>start time</th>
                                            <th>end time</th>
                                            <th>Status</th>

                                        </tr>
                                    </thead>
                                    <tbody>

                                        <?php $__currentLoopData = $transactions; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $transaction): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <tr>
                                                <td><?php echo e($transaction->nama); ?></td>
                                                <td><?php echo e(date('d-m-Y', strtotime(\Carbon\Carbon::parse($transaction->start_time)))); ?>

                                                </td>
                                                <td><?php echo e(date('H:i:s', strtotime(\Carbon\Carbon::parse($transaction->start_time)))); ?>

                                                </td>
                                                <td><?php echo e(date('H:i:s', strtotime(\Carbon\Carbon::parse($transaction->end_time)))); ?>

                                                </td>
                                                <td>
                                                    <a href="" class="btn btn-outline-warning disabled">
                                                        <?php echo e($transaction->status->nama); ?>

                                                    </a>
                                                </td>
                                            </tr>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>


                                    </tbody>
                                </table>
                            </div>
                        <?php else: ?>
                            <div class="alert alert-info" style="margin-top: 50px">
                                <strong>Belum ada jadwal </strong>
                            </div>
                        <?php endif; ?>
                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#addModal">
                            Booking Sekarang
                        </button>
                    <?php endif; ?>

                </div>
            </div>



        </div>
    </div>

    <?php echo $__env->make('customer.lapangan.modal.addModal', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('customer.layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\laravel\PWL_PROJECT\resources\views/customer/lapangan/index.blade.php ENDPATH**/ ?>