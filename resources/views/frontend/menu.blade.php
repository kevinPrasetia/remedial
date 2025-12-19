@extends('frontend.layout')

@section('content')
<h3>Daftar Menu Catering</h3>

@foreach ($menus as $menu)
    <div class="card">
        <strong>{{ $menu->nama_menu }}</strong><br>
        Jenis Menu: {{ $menu->jenis_menu }}<br>
        Harga: Rp {{ number_format($menu->harga) }}
    </div>
@endforeach
@endsection
