<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
    use HasFactory;

    protected $table = 'transactions'; // Eloquent akan membuat model mahasiswa menyimpan record di tabel status_transactions
    public $timestamps = false;

    protected $fillable = [
        'users_id',
        'status_id',
        'sub_total',
        'metode_pembayaran',
        'no_hp',
        'bukti_pembayaran',
        'invoice',
        'nama',
        'start_time',
        'end_time',
        'arenas_id'
    ];

    public function users()
    {
        return $this->belongsTo(User::class, 'users_id', 'id');
    }

    public function status()
    {
        return $this->belongsTo(Status::class, 'status_id', 'id');
    }

    public function detailTransactions()
    {
        return $this->hasMany(DetailTransaction::class, 'id');
    }

    public function arenas()
    {
        return $this->belongsTo(Arena::class, 'arenas_id', 'id');
    }
}
