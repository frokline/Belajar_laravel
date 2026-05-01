@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Daftar Penjualan</h1>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>ID</th>
                <th>Pelanggan</th>
                <th>Tanggal</th>
                <th>Total</th>
            </tr>
        </thead>
        <tbody>
            @forelse($penjualans as $penjualan)
            <tr>
                <td>{{ $penjualan->id }}</td>
                <td>{{ $penjualan->pelanggan?->nama ?? '-' }}</td>
                <td>{{ $penjualan->tanggal }}</td>
                <td>
                    Rp {{ number_format($penjualan->detail_penjualan->sum(function ($item) {
                        return $item->harga * $item->jumlah;
                    }), 0, ',', '.') }}
                </td>
            </tr>
            @empty
            <tr>
                <td colspan="4" class="text-center">Belum ada data penjualan.</td>
            </tr>
            @endforelse
        </tbody>
    </table>
</div>
@endsection