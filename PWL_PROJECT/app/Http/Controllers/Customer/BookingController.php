<?php

namespace App\Http\Controllers\Customer;

use App\Http\Controllers\Controller;
use App\Models\Booking;
use App\Models\Arena;
use App\Models\Transaction;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Carbon;

class BookingController extends Controller
{
    //
    public function booking($id)
    {
        $arenas = Arena::findOrFail($id);

        // dd($lapangans,$jadwals);

        return view('customer.booking.index', compact('arenas'));
    }

    public function bookingStore(Request $request)
    {
        //
        $transactions = Transaction::where('arenas_id', $request->arenas_id)->where('status_id', 2)->first();

        $request->validate([
            'start_time' => 'required',
            'end_time' => 'required',
            'date' => 'required'

        ]);




        if ($transactions != null) {
            $start_time = date('H:i', strtotime(\Carbon\Carbon::parse($transactions->start_time)->format('H:i:s')));

            $end_time = date('H:i', strtotime(\Carbon\Carbon::parse($transactions->end_time)->format('H:i:s')));

            $date = date('Y-m-d', strtotime(\Carbon\Carbon::parse($transactions->start_time)));

            if (($request->start_time >= $start_time) && ($request->start_time < $end_time)) {
                if ($date == $request->date) {
                    return redirect()->route('booking.error');
                }
            }
        }

        Booking::create([/* Used to get the user id of the user who is logged in. */

            'users_id' => Auth::user()->id,
            'start_time' => $request->start_time,
            'end_time' => $request->end_time,
            'arenas_id' => $request->arenas_id,
            'date' => $request->date
        ]);
        return redirect()->route('booking.success');


        return redirect()->route('booking.success');
    }

    public function success()
    {

        return view('customer.order.booking-success');
    }

    public function errors()
    {
        return view('customer.order.booking-error');
    }

    public function batal($id)
    {
        Booking::destroy($id);

        return redirect()->route('order.index')->with('success', 'Berhasil Membatalkan Pesanan');
    }
}
