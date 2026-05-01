@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Detail Pembelian</h1>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>ID</th>
                <th>Pembelian ID</th>
                <th>Barang</th>
                <th>Jumlah</th>
                <th>Harga Beli</th>
                <th>Total</th>
            </tr>
        </thead>
        <tbody>
            @forelse($detailPembelians as $detail)
            <tr>
                <td>{{ $detail->id }}</td>
                <td>{{ $detail->pembelian?->id ?? '-' }}</td>
                <td>{{ $detail->barang?->nama_barang ?? '-' }}</td>
                <td>{{ $detail->jumlah }}</td>
                <td>Rp {{ number_format($detail->harga_beli, 0, ',', '.') }}</td>
                <td>Rp {{ number_format($detail->harga_beli * $detail->jumlah, 0, ',', '.') }}</td>
            </tr>
            @empty
            <tr>
                <td colspan="6" class="text-center">Belum ada data detail pembelian.</td>
            </tr>
            @endforelse
        </tbody>
    </table>
</div>
@endsection
