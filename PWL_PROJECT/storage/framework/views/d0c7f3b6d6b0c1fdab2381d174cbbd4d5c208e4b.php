<?php $__env->startSection('content'); ?>
    <div class="container-fluid">
        <!-- Content Row -->
        <div class="card">
            <div class="card-header py-3 d-flex">
                <h6 class="m-0 font-weight-bold text-primary">
                    <?php echo e(__('Arena')); ?>

                </h6>
                <div class="ml-auto">
                    <a href="/admin/arena/create" class="btn btn-primary">
                        <span class="icon text-white-50">
                            <i class="fa fa-plus"></i>
                        </span>
                        <span class="text"> New Arena </span>
                    </a>
                </div>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered table-striped table-hover" cellspacing="0" width="100%">
                        <thead>
                            <tr>
                                <th> No </th>
                                <th> Jenis Lapangan </th>
                                <th> Gambar </th>
                                <th> Harga </th>
                                <th> Action </th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $__currentLoopData = $posts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $arena): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <tr>
                                    <td><?php echo e($loop->iteration); ?></td>
                                    <td><?php echo e($arena->jenis->nama); ?></td>
                                    <td><img width="100px" height="100px" src="<?php echo e(asset('storage/' . $arena->image)); ?>">
                                    </td>
                                    <td>Rp<?php echo e(number_format($arena->price, 2, ',', '.')); ?></td>
                                    <td>
                                        <div class="btn-group btn-group-sm">
                                            <a href="<?php echo e(route('arena.edit', $arena->id)); ?>" class="btn btn-info">
                                                <i class="fa fa-pencil-alt"> Edit </i>
                                            </a>
                                            <form action="/admin/arena/<?php echo e($arena->id); ?>" class="d-inline" method="POST">
                                                <?php echo csrf_field(); ?>
                                                <?php echo method_field('delete'); ?>
                                                <input name="_method" type="hidden" value="DELETE">
                                                <button type="submit" class="btn btn-danger show_confirm"
                                                    data-toggle="tooltip" title='Delete'><i></i>Delete</button>
                                            </form>
                                        </div>
                                    </td>
                                </tr>
                                
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="paginate">
                <div class="container">
                    <div class="row">
                        
                        <div class="mx-auto">
                            <div class="paginate-button col-md-12">
                                <?php echo e($posts->links()); ?>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Content Row -->
    </div>
    <script src="https://code.jquery.com/jquery-3.6.0.slim.js"
        integrity="sha256-HwWONEZrpuoh951cQD1ov2HUK5zA5DwJ1DNUXaM6FsY=" crossorigin="anonymous"></script>

    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

    <script type="text/javascript">
        $('.show_confirm').click(function(event) {
            var form = $(this).closest("form");
            var name = $(this).data("name");
            event.preventDefault();
            swal({
                    title: `Are you sure you want to delete this record? `,
                    text: "If you delete this, it will be gone forever.",
                    icon: "warning",
                    buttons: true,
                    dangerMode: true,
                })
                .then((willDelete) => {
                    if (willDelete) {
                        form.submit();
                    }
                });
        });
    </script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\PWL_PROJECT\resources\views/admin/arenas/index.blade.php ENDPATH**/ ?>