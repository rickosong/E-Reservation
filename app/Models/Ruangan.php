<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ruangan extends Model
{
    use HasFactory;
    protected $fillable = [
        'nama_ruangan',
        'jenis_ruangan_id',
        'harga',
        'fasilitas',
        'image',
        'deskripsi',
    ];

    public function jenis_ruangan(){
        return $this->belongsTo(Jenis_Ruangan::class);
    }

}
