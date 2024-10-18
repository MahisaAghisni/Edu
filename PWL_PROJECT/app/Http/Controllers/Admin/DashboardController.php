<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Arena;
use App\Models\Transaction;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DashboardController extends Controller
{
    //
    public function index()
    {
        $pendapatan = Transaction::select(DB::raw('SUM(sub_total) as penghasilan'))->where('status_id', 3)->first();

        $transaksi = Transaction::select(DB::raw('COUNT(id) as total_order'))->first();

        $lapangan = Arena::select(DB::raw('COUNT(id) as lapangan'))->first();

        $transaksi_terbaru = Transaction::where('status_id', 1)->limit(10)->get();



        return view('admin.dashboard.index', compact('pendapatan', 'transaksi', 'lapangan', 'transaksi_terbaru'));
    }
}
