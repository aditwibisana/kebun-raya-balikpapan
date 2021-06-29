<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tempat extends Model
{
    protected $table = 'daftar_tempat';
    protected $fillable = ['nama_tempat', 'deskripsi_tempat', 'harga', 'foto_tempat1', 'foto_tempat2', 'foto_tempat3'];
}
