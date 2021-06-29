<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pengunjung extends Model
{
    protected $table = 'data_pengunjung';
    protected $fillable = ['email', 'no_hp', 'jenis_kelamin', 'nama_lengkap', 'alamat', 'user_id'];
}
