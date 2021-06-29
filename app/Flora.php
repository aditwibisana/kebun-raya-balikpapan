<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Flora extends Model
{
    protected $table = 'daftar_flora';
    protected $fillable = ['nama_flora', 'deskripsi_flora'];
}
