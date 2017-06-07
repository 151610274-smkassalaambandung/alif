<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class pengguna extends Model
{
    //
    protected $table = 'pengguna';
    protected $fillable = ['nama_lengkap', 'alamat', 'nomor_telepon'];
    protected $visible = ['nama_lengkap', 'alamat', 'nomor_telepon'];
    public $timestamps = true;
}
