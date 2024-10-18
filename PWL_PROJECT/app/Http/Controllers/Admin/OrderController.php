<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\DetailTransaction;
use App\Models\Transaction;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    //

    public function belumDiBayar()
    {
        $transactions = Transaction::where('status_id', 1)->get();


        return view('admin.transaksi.belumDiBayar', compact('transactions'));
    }

    public function booking()
    {
        $transactions = Transaction::where('status_id', 2)->get();

        return view('admin.transaksi.booking', compact('transactions'));
    }

    public function selesai()
    {
        $transactions = Transaction::where('status_id', 3)->get();

        return view('admin.transaksi.selesai', compact('transactions'));
    }

    public function dibatalkan()
    {
        $transactions = Transaction::where('status_id', 4)->get();

        return view('admin.transaksi.batal', compact('transactions'));
    }

    public function detail($id)
    {
        $transactions = Transaction::findOrFail($id);

        return view('admin.transaksi.detail', compact('transactions'));
    }

    public function konfirmasi($id)
    {
        $transactions = Transaction::findOrFail($id);
        $transactions->status_id = 2;
        $transactions->save();

        return redirect()->route('transaksi.booking');
    }

    public function batal($id)
    {
        $transactions = Transaction::findOrFail($id);

        $transactions->status_id = 4;

        $transactions->save();

        return redirect()->route('transaksi.dibatalkan');
    }

    public function success($id)
    {
        $transactions = Transaction::findOrFail($id);

        $transactions->status_id = 3;

        $transactions->save();

        return redirect()->route('transaksi.selesai');
    }
}
