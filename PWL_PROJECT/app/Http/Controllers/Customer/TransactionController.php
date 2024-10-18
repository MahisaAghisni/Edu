<?php

namespace App\Http\Controllers\Customer;

use App\Http\Controllers\Controller;
use App\Models\Booking;
use App\Models\Rekening;
use App\Models\Transaction;
use Illuminate\Http\Request;
use PDF;
use Illuminate\Support\Facades\Auth;

class TransactionController extends Controller
{
    //
    public function order()
    {
        //
        $bookings = Booking::with('arenas')->where('users_id', Auth::user()->id)->get();

        $transactions = Transaction::where('users_id', Auth::user()->id)->get();

        // dd($bookings);

        return view('customer.order.index', compact('bookings', 'transactions'));
    }

    public function checkout($id)
    {
        $bookings = Booking::with('arenas')->findOrFail($id);

        return view('customer.order.checkout', compact('bookings'));
    }

    public function store(Request $request, $id)
    {
        $bookings = Booking::findOrFail($id);

        $start_time = date('Y-m-d H:i:s', strtotime("$bookings->date $bookings->start_time"));

        $end_time = date('Y-m-d H:i:s', strtotime("$bookings->date $bookings->end_time"));

        if ($request->metode_pembayaran == 'transfer') {

            Transaction::create([
                'users_id' => Auth::user()->id,
                'invoice' => 'ALV' . date('Ymdhi'),
                'nama' => $request->nama,
                'start_time' => $start_time,
                'end_time' => $end_time,
                'status_id' => 1,
                'sub_total' => $request->sub_total,
                'no_hp' => $request->no_hp,
                'arenas_id' => $request->arenas_id,
                'metode_pembayaran' => $request->metode_pembayaran
            ]);
        } else {

            Transaction::create([
                'users_id' => Auth::user()->id,
                'invoice' => 'ALV' . date('Ymdhi'),
                'nama' => $request->nama,
                'start_time' => $start_time,
                'end_time' => $end_time,
                'status_id' => 2,
                'sub_total' => $request->sub_total,
                'no_hp' => $request->no_hp,
                'bukti_pembayaran' => $request->bukti_pembayaran,
                'arenas_id' => $request->arenas_id,
                'metode_pembayaran' => $request->metode_pembayaran
            ]);
        }

        Booking::where('id', $bookings->id)->delete();

        return redirect()->route('order.index');
    }

    public function bayar($id)
    {
        $transactions = Transaction::findOrFail($id);
        $rekenings = Rekening::all();

        return view('customer.order.bayar', compact('rekenings', 'transactions'));
    }

    public function kirimBuktiPembayaran(Request $request, $id)
    {
        $transactions = Transaction::findOrFail($id);

        $image = $request->file('bukti_pembayaran')->store('bukti_pembayaran', 'public');
        $transactions->update([
            'bukti_pembayaran' => $image,
        ]);

        return redirect()->route('order.index')->with('success', 'Bukti Pembayaran Berhasil Dikirim');
    }

    public function details($id)
    {
        //
        $transactions = Transaction::findOrFail($id);

        return view('customer.order.details', compact('transactions'));
    }
    public function cetak_pdf($id)
    {
        $transactions = Transaction::findOrFail($id);
        $pdf = PDF::loadview('customer.order.pdf', ['transactions' => $transactions]);
        return $pdf->stream();
    }
}
