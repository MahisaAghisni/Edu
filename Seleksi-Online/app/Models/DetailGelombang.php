<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DetailGelombang extends Model
{
    use HasFactory;
    public $table = 'gelombang_details';

    public function pelatihans()
    {
        return $this->belongsTo(Pelatihan::class, 'idPelatihan');
    }

    public function gelombang(){
        return $this->belongsTo(Gelombang::class, 'idGelombang');
    }

    public function ujian(){
        return $this->belongsTo(Ujian::class, 'idUjian');
    }
}
