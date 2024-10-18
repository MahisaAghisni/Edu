<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    use HasFactory;

    protected $table = 'bookings'; // Eloquent akan membuat model mahasiswa menyimpan record di tabel jenis
    public $timestamps = false;
    protected $primaryKey = 'id'; // Memanggil isi DB Dengan primarykey

    protected $fillable = [
        'id',
        'users_id',
        'start_time',
        'end_time',
        'arenas_id',
        'date',
    ];

    public function arenas()
    {
        return $this->belongsTo(Arena::class, 'arenas_id', 'id');
    }

    public function status()
    {
        return $this->belongsTo(Status::class, 'status_id', 'id');
    }

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }

    public function transactions()
    {
        return $this->hasMany(Transaction::class, 'id');
    }
}
