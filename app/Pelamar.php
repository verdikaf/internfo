<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pelamar extends Model
{
    protected $table = 'pelamar';
    protected $fillable = ['foto','nama','tempat_lahir','tgl_lahir','alamat','telp'];
}
