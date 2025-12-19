<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Menu;

class detailpemesanan extends Model
{
    protected $table = 'detail_pemesanans';

    protected $fillable = [
        'pemesanan_id',
        'menu_id',
        'jumlah',
        'subtotal',
    ];

    public function pemesanan()
    {
        return $this->belongsTo(Pemesanan::class);
    }

    public function menu()
    {
        return $this->belongsTo(Menu::class);
    }
}
