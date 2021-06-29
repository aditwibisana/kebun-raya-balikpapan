<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pengguna extends Model
{
    protected $table = 'data_pengguna';
    protected $fillable = ['nama_pengguna', 'tanggal_berkunjung', 'no_hp', 'alamat'];
}
