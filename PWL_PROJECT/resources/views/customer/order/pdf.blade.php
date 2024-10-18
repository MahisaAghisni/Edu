<!DOCTYPE html>
<html>

<head>
    <title>Bukti Penyewaan {{ $transactions->nama }}</title>
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
    <b>Nama:</b> {{ $transactions->nama }}<br>
    <b>Status Pemesanan: </b>{{ $transactions->status->nama }}<br>

    <br>

    <table>
        <tr>
            <td>No Invoice</td>
            <td>:</td>
            <td class="p-2">{{ $transactions->invoice }}</td>
        </tr>
        <tr>
            <td>Metode Pembayaran</td>
            <td>:</td>
            <td class="p-2">{{ $transactions->metode_pembayaran }}</td>
        </tr>
        <tr>
            <td>Status Pesanan</td>
            <td>:</td>
            <td class="p-2">{{ $transactions->status->nama }}</td>
        </tr>
        <tr>
            <td>Tanggal</td>
            <td>:</td>
            <td class="p-2">
                {{ date('d-m-Y', strtotime(\Carbon\Carbon::parse($transactions->start_time))) }}
            </td>
        </tr>
        <tr>
            <td>Waktu Mulai</td>
            <td>:</td>
            <td class="p-2">
                {{ date('H:i:s', strtotime(\Carbon\Carbon::parse($transactions->start_time))) }}
            </td>
        </tr>
        <tr>
            <td>Waktu Selesai</td>
            <td>:</td>
            <td class="p-2">
                {{ date('H:i:s', strtotime(\Carbon\Carbon::parse($transactions->end_time))) }}
            </td>
        </tr>
        <tr>
            <td>Total</td>
            <td>:</td>
            <td class="p-2">
                Rp{{ number_format($transactions->sub_total, 2, ',', '.') }}</td>
        </tr>

    </table>
</body>

</html>
