<?php

namespace App\Http\Controllers;

use App\Models\Menu;
use App\Models\pemesanan;

class FrontendController extends Controller
{
    public function beranda()
    {
        $menus = Menu::all()->groupBy('jenis_menu');
        return view('frontend.beranda', compact('menus'));
    }

    public function menu()
    {
        $menus = Menu::all();
        return view('frontend.menu', compact('menus'));
    }

    public function kontak()
    {
        return view('frontend.kontak');
    }

    public function detailPemesanan($id)
    {
        $pemesanan = pemesanan::with(['details.menu', 'pelanggan'])->findOrFail($id);
        return view('frontend.detail-pemesanan', compact('pemesanan'));
    }
}
