@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Detail Penjualan</h1>
    <div class="card">
        <div class="card-body">
            <p><strong>ID Penjualan:</strong> {{ $penjualan->id }}</p>
            <p><strong>Pelanggan:</strong> {{ $penjualan->pelanggan?->nama ?? '-' }}</p>
            <p><strong>Tanggal:</strong> {{ $penjualan->tanggal }}</p>
            <p><strong>Detail Barang:</strong></p>
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>Barang</th>
                        <th>Jumlah</th>
                        <th>Harga</th>
                        <th>Subtotal</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($penjualan->detail_penjualan as $detail)
                    <tr>
                        <td>{{ $detail->barang?->nama_barang ?? '-' }}</td>
                        <td>{{ $detail->jumlah }}</td>
                        <td>Rp {{ number_format($detail->harga, 0, ',', '.') }}</td>
                        <td>Rp {{ number_format($detail->harga * $detail->jumlah, 0, ',', '.') }}</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
            <p><strong>Total:</strong> Rp {{ number_format($penjualan->detail_penjualan->sum(fn($item) => $item->harga * $item->jumlah), 0, ',', '.') }}</p>
        </div>
    </div>
    <a href="{{ route('penjualan.index') }}" class="btn btn-secondary mt-3">Kembali</a>
</div>
@endsection