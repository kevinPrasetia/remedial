<?php

namespace App\Models;

use App\Models\detailpemesanan;
use Illuminate\Database\Eloquent\Model;
use App\Models\pelanggan;

class pemesanan extends Model
{
    protected $fillable = ['pelanggan_id', 'tanggal_acara', 'status', 'total_harga'];

    public function pelanggan()
    {
        return $this->belongsTo(Pelanggan::class);
    }

    public function details()
    {
        return $this->hasMany(detailpemesanan::class);
    }
}
