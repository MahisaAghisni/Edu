<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Arena extends Model
{
    use HasFactory;

    protected $table = 'arenas'; // Eloquent akan membuat model mahasiswa menyimpan record di tabel arenas
    public $timestamps = false;
    protected $primaryKey = 'id'; // Memanggil isi DB Dengan primarykey


    protected $fillable = [
        'id',
        'jenis_id',
        'price',
        'image',
        'nama'
    ];

    public function jenis()
    {
        return $this->belongsTo(Jenis::class, 'jenis_id', 'id');
    }

    public function bookings()
    {
        return $this->hasMany(Booking::class, 'id');
    }

    public function transactions()
    {
        return $this->hasMany(DetailTransaction::class, 'id');
    }
}
