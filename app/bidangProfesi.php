<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class BidangProfesi extends Model
{
    protected $table = 'bidang_profesi';
    protected $fillable = ['nama'];
}
