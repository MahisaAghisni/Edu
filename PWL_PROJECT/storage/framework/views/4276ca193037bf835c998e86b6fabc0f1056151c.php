<!DOCTYPE html>
<html>

<head>
    <title>Bukti Penyewaan <?php echo e($transactions->nama); ?></title>
</head>

<body>
    <style type="text/css">
        table tr td,
        table tr th {
            font-size: 12pt;
        }
    </style>
    <center>
        <h2>Bukti Penyewaan Lapangan</h2>
    </center>
    <br>
    <b>Nama:</b> <?php echo e($transactions->nama); ?><br>
    <b>Status Pemesanan: </b><?php echo e($transactions->status->nama); ?><br>

    <br>

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

    </table>
</body>

</html>
<?php /**PATH C:\xampp\htdocs\laravel\PWL_PROJECT\resources\views/customer/order/pdf.blade.php ENDPATH**/ ?>