<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Status extends Model
{
    use HasFactory;

    protected $table = 'status_transactions'; // Eloquent akan membuat model mahasiswa menyimpan record di tabel status_transactions
    public $timestamps = false;
    protected $primaryKey = 'id'; // Memanggil isi DB Dengan primarykey


    protected $fillable = [
        'id',
        'nama'
    ];

    public function bookings()
    {
        return $this->hasMany(Booking::class, 'id');
    }

    public function transactions()
    {
        return $this->hasMany(Transaction::class, 'id');
    }
}
