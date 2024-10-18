<?php

use App\Http\Controllers\Admin\ArenaController;
use App\Http\Controllers\Admin\JenisController;
use App\Http\Controllers\Customer\HomeController;
use App\Http\Controllers\Customer\DaftarLapController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\OrderController;
use App\Http\Controllers\Admin\RekeningController;
use App\Http\Controllers\Customer\BookingController;
use App\Http\Controllers\Customer\TransactionController;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });
// Route::get('/home', function () {
//     return view('/admin/layouts.main');
// });

Route::controller(HomeController::class)->group(function () {
    Route::get('/', 'index')->name('home');
});

Route::controller(DaftarLapController::class)->group(function () {
    Route::get('/daftar-lapangan', 'index')->name('daftar-lap');
    Route::get('/detail-lapangan/{id}', 'detail')->name('detail-lapangan');
    Route::get('/cek-lapangan/{id}', 'cekLapangan')->name('cek-lapangan');
});

Route::middleware(['CheckRole:customer', 'auth'])->group(function () {

    Route::controller(BookingController::class)->group(function () {
        Route::get('/daftar-lapangan/detail-lapangan/booking/{id}', 'booking')->name('booking.lapangan');
        Route::post('/booking/store', 'bookingStore')->name('booking.store');
        Route::get('/booking/success', 'success')->name('booking.success');
        Route::get('/booking/error', 'errors')->name('booking.error');
        Route::get('/booking/destroy/{id}', 'batal')->name('booking.batal');
    });

    Route::controller(TransactionController::class)->group(function () {
        Route::get('/order', 'order')->name('order.index');
        Route::get('/order/checkout/{id}', 'checkout')->name('order.checkout');
        Route::post('/order/store/{id}', 'store')->name('order.store');
        Route::get('/order/bayar/{id}', 'bayar')->name('order.bayar');
        Route::post('/order/bayar/store/{id}', 'kirimBuktiPembayaran')->name('order.bayar.store');
        Route::get('/order/details/{id}', 'details')->name('order.details');
        Route::get('/order/cetakpdf/{id}', 'cetak_pdf')->name('order.pdf');
    });
});

Route::group(['middleware' => ['auth', 'CheckRole:admin']], function () {
    Route::resource('/admin/jenis', JenisController::class);
    Route::resource('admin/arena', ArenaController::class);
    Route::resource('/admin/dashboard', DashboardController::class);
    Route::controller(OrderController::class)->group(function () {
        Route::get('/admin/transaksi/pending', 'pending')->name('transaksi.pending');
        Route::get('admin/transaksi/belum-di-bayar', 'belumDiBayar')->name('transaksi.belumDiBayar');
        Route::get('admin/transaksi/booking', 'booking')->name('transaksi.booking');
        Route::get('admin/transaksi/selesai', 'selesai')->name('transaksi.selesai');
        Route::get('admin/transaksi/detail/{id}', 'detail')->name('transaksi.detail');
        Route::get('admin/transaksi/konfirmasi/{id}', 'konfirmasi')->name('transaksi.konfirmasi');
        Route::get('admin/transaksi/dibatalkan', 'dibatalkan')->name('transaksi.dibatalkan');
        Route::get('admin/transaksi/batal/{id}', 'batal')->name('transaksi.batal');
        Route::get('admin/transaksi/success/{id}', 'success')->name('transaksi.success');
    });
    Route::controller(RekeningController::class)->group(function () {
        Route::get('/admin/rekening', 'index')->name('admin.rekening');
        Route::post('/admin/rekening/store', 'store')->name('admin.rekening.store');
        Route::get('/admin/rekening/edit/{id}', 'edit')->name('admin.rekening.edit');
        Route::post('/admin/rekening/update/{id}', 'update')->name('admin.rekening.update');
        Route::get('/admin/rekening/destroy/{id}', 'destroy')->name('admin.rekening.destroy');
    });

    // Route::controller(DashboardController::class)->group(function () {
    //     Route::get('/admin/dashboard', 'index')->name('admin.dashboard');
    // });

    // Route::controller(JadwalController::class)->group(function () {
    //     Route::get('/admin/jadwal', 'index')->name('admin.jadwal');
    //     Route::post('/admin/store', 'store')->name('admin.jadwal.store');
    // });

    // Route::controller(ArenaController::class)->group(function () {
    //     Route::get('/admin/arenas', 'index')->name('admin.arenas');
    //     Route::post('/admin/arenas/store', 'store')->name('admin.arenas.store');
    //     Route::get('/admin/arenas/destroy', 'destroy')->name('admin.arenas.destroy');
    // });

    // Route::controller(JenisController::class)->group(function () {
    //     Route::get('/admin/jenis', 'index')->name('admin.jenis');
    //     Route::get('/admin/jenis/create', 'create')->name('admin.jenis.create');
    //     Route::post('/admin/jenis/store', 'store')->name('admin.jenis.store');
    //     Route::post('/admin/jenis/update/{id}', 'update')->name('admin.jenis.update');
    //
    //});
});

Auth::routes();
