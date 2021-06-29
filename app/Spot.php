<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Spot extends Model
{
    protected $table = 'daftar_spot';
    protected $fillable = ['nama_spot', 'deskripsi_tempat'];
}
