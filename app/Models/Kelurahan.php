<?php

namespace App\Models;
use App\Models\Kecamatan;
use App\Models\Rw;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kelurahan extends Model
{
    public function kecamatan() {
        return $this->belongsTo('App\Models\Kecamatan', 'id_kecamatan');
    }
    public function rw() {
        return $this->hasMany('App\Models\Rw', 'id_kelurahan');
    }
    use HasFactory;
}
