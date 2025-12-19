@extends('frontend.layout')

@section('content')
<h3>Selamat Datang di Catering Berkah</h3>
<p>Kami melayani berbagai kebutuhan catering untuk acara Anda.</p>

@foreach ($menus as $jenis => $items)
    <h4>{{ $jenis }}
</h4>
    @foreach ($items as $menu)
        <div class="card">
            <strong>{{ $menu->nama_menu }}</strong><br>
            Harga: Rp {{ number_format($menu->harga) }}
        <a href="{{ route('pemesanan.detail', 1) }}"
   style="padding:6px 12px; background:#0d6efd; color:white; text-decoration:none;">
   Lihat Detail Pesanan
</a></div>
    @endforeach
@endforeach
@endsection
