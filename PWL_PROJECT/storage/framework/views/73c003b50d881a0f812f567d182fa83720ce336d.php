<?php $__env->startSection('content'); ?>
    <div class="bg-light py-3">
        <div class="container">
            <div class="row">
                <div class="col-md-12 mb-0"><a href="<?php echo e(route('home')); ?>">Home</a> <span class="mx-2 mb-0">/</span> <a
                        href="cart.html">Cart</a> <span class="mx-2 mb-0">/</span> <strong class="text-black">Checkout</strong>
                </div>
            </div>
        </div>
    </div>

    <div class="site-section">
        <div class="container">
            <div class="row">
                <div class="col-md-2"></div>
                <div class="col-md-8">
                    <div class="row mb-5">
                        <div class="col-md-12">
                            <h2 class="h3 mb-3 text-black">Your Order</h2>
                            <div class="p-3 p-lg-5 border">
                                <form action="<?php echo e(route('order.store', $bookings->id)); ?>" method="POST">
                                    <?php echo csrf_field(); ?>
                                    <table class="table site-block-order-table mb-5">
                                        <thead>
                                            <th>Lapangan</th>
                                            <th>Total Waktu</th>
                                        </thead>
                                        <tbody>
                                            <?php
                                            $sub_total = 0;
                                            $hour = date('H', strtotime(Carbon\Carbon::parse($bookings->end_time)->format('H:i:s'))) - date('H', strtotime(Carbon\Carbon::parse($bookings->start_time)->format('H:i:s')));
                                            if ($hour < 1) {
                                                $hour = date('H', strtotime(Carbon\Carbon::parse($bookings->start_time)->format('H:i:s'))) - date('H', strtotime(Carbon\Carbon::parse($bookings->end_time)->format('H:i:s')));
                                            }
                                            ?>
                                            <tr>
                                                <td><?php echo e($bookings->arenas->jenis->name); ?> <strong
                                                        class="mx-2">x</strong><?php echo e($bookings->arenas->nama); ?>

                                                </td>
                                                <td><?php echo e($hour); ?> jam</td>
                                            </tr>

                                            <tr>
                                                <td class="text-black font-weight-bold"><strong>Jumlah Pembayaran</strong>
                                                </td>
                                                <td class="text-black font-weight-bold">
                                                    <?php
                                                    $total = $hour * $bookings->arenas->price;
                                                    $sub_total += $total;
                                                    ?>
                                                    <strong>Rp. <?php echo e(number_format($total, 2, ',', '.')); ?></strong>
                                                </td>

                                            </tr>
                                            <tr>
                                                <td>Nama</td>
                                                <td><?php echo e($bookings->nama); ?></td>
                                            </tr>
                                        </tbody>
                                    </table>
                                    <div class="form-group">
                                        <label for="nama">Nama</label>
                                        <input type="text" name="nama" id="nama" class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <label for="no_hp">No telepon yang bisa dihubungi</label>
                                        <input type="text" name="no_hp" id="no_hp" class="form-control">
                                    </div>

                                    <input type="hidden" name="start_time" value="<?php echo e($bookings->start_time); ?>">
                                    <input type="hidden" name="end_time" value="<?php echo e($bookings->end_time); ?>">
                                    <input type="hidden" name="sub_total" value="<?php echo e($total); ?>">
                                    <input type="hidden" name="arenas_id" value="<?php echo e($bookings->arenas_id); ?>">
                                    <div class="form-group">
                                        <label for="">Pilih Metode Pembayaran</label>
                                        <select name="metode_pembayaran" class="form-control">
                                            <option value="transfer">Transfer</option>
                                            <option value="bayar di tempat">Bayar Di Tempat</option>
                                        </select>
                                        <small>Harap datang 15 menit sebelum jadwal pemesanan apabila melakukan transaksi di
                                            tempat</small>
                                    </div>


                                    <div class="form-group">
                                        <button class="btn btn-primary btn-lg py-3 btn-block" type="submit">Pesan
                                            Sekarang</button>
                                        <small>Apabila melakukan pembayaran secara transfer pesanan akan dibooking setelah
                                            mengirimkan bukti pembayaran</small>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
            <!-- </form> -->
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('customer.layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\PWL_PROJECT\resources\views/customer/order/checkout.blade.php ENDPATH**/ ?>