<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Penyewaan extends Model
{
    use HasFactory;
    protected $fillable = [
        'ruangan_id',
        'user_id',
        'checkin',
        'checkout',
        'status_id',
    ];

    public function penyewaan(){
        return $this->belongsTo(Jenis_Ruangan::class);
    }

}
