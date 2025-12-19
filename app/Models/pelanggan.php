<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class pelanggan extends Model
{
    protected $fillable = ['nama', 'no_hp', 'alamat'];

    public function pemesanans()
    {
        return $this->hasMany(pemesanan::class);
    }
}
