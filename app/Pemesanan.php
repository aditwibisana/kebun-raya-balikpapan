<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pemesanan extends Model
{
    protected $table = 'pemesanan';
    protected $fillable = ['user_id', 'tempat_id', 'nama_tempat',  'tanggal_pesan', 'check_in', 'check_out', 'durasi', 'harga', 'total_harga', 'bukti', 'konfirmasi'];

    public function pembayaram()
    {
        // Setiap user akan memiliki banyak data
        return $this->belongsTo('App\Pembayaran');
    }
}
