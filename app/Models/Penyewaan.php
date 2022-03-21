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

    public function ruangan(){
        return $this->belongsTo(Ruangan::class);
    }
    public function user(){
        return $this->belongsTo(User::class);
    }
    public function status_pemesanan(){
        return $this->belongsTo(Status_pemesanan::class);
    }

}
