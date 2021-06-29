<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pembayaran extends Model
{
    protected $table = 'pembayaran';
    protected $fillable = ['pesan_id', 'bukti', 'tanggal_upload', 'konfirmasi'];

    public function pemesanan()
    {
        // Setiap user akan memiliki banyak data
        return $this->hasMany('App\Pemesanan');
    }
}
