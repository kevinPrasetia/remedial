@extends('frontend.layout')

@section('content')
<h3>Welcome To Catering</h3>
<p>Kami Siap Melayani anda.</p>

@foreach ($menus as $jenis => $items)
    <h4>{{ $jenis }}
</h4>
    @foreach ($items as $menu)
        <div class="card">
            <strong>{{ $menu->nama_menu }}</strong><br>
            Harga: Rp {{ number_format($menu->harga) }}</div>
    @endforeach
    <a href="{{ route('pemesanan.detail', 1) }}"
   style="padding:6px 12px; background:#2c3e50; color:white; text-decoration:none;">
   Lihat Detail Pesanan
</a>
@endforeach
@endsection
