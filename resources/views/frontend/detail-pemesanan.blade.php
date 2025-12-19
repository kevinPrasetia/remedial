<h2>Detail Pesanan</h2>

<p><strong>Nama Pelanggan:</strong> {{ $pemesanan->pelanggan->nama }}</p>
<p><strong>Tanggal Acara:</strong> {{ $pemesanan->tanggal_acara }}</p>

<table border="1" cellpadding="8" cellspacing="0">
    <thead>
        <tr>
            <th>Menu</th>
            <th>Jumlah</th>
            <th>Harga</th>
            <th>Subtotal</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($pemesanan->details as $detail)
        <tr>
            <td>{{ $detail->menu->nama_menu }}</td>
            <td align="center">{{ $detail->jumlah }}</td>
            <td align="right">Rp {{ number_format($detail->menu->harga) }}</td>
            <td align="right">Rp {{ number_format($detail->subtotal) }}</td>
        </tr>
        @endforeach
    </tbody>
    <tfoot>
        <tr>
            <th colspan="3" align="right">Total</th>
            <th align="right">
                Rp {{ number_format($pemesanan->details->sum('subtotal')) }}
            </th>
        </tr>
    </tfoot>
</table>
