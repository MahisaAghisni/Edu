<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Jenis extends Model
{
    use HasFactory;

    protected $table = 'jenis'; // Eloquent akan membuat model mahasiswa menyimpan record di tabel jenis
    public $timestamps = false;
    protected $primaryKey = 'id'; // Memanggil isi DB Dengan primarykey


    protected $fillable = [
        'id',
        'nama',
        'deskripsi',
        'images'
    ];

    public function arenas()
    {
        return $this->hasMany(Arena::class, 'id');
    }
}
