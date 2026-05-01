@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Detail Penjualan</h1>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>ID</th>
                <th>Penjualan ID</th>
                <th>Barang</th>
                <th>Jumlah</th>
                <th>Harga</th>
                <th>Subtotal</th>
            </tr>
        </thead>
        <tbody>
            @forelse($detailPenjualans as $detail)
            <tr>
                <td>{{ $detail->id }}</td>
                <td>{{ $detail->penjualan?->id ?? '-' }}</td>
                <td>{{ $detail->barang?->nama_barang ?? '-' }}</td>
                <td>{{ $detail->jumlah }}</td>
                <td>Rp {{ number_format($detail->harga, 0, ',', '.') }}</td>
                <td>Rp {{ number_format($detail->harga * $detail->jumlah, 0, ',', '.') }}</td>
            </tr>
            @empty
            <tr>
                <td colspan="6" class="text-center">Belum ada data detail penjualan.</td>
            </tr>
            @endforelse
        </tbody>
    </table>
</div>
@endsection
