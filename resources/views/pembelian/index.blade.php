@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Daftar Pembelian</h1>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>ID</th>
                <th>Tanggal</th>
                <th>Total Harga</th>
                <th>Suplier</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($pembelians as $item)
            <tr>
                <td>{{ $item->id }}</td>
                <td>{{ $item->tanggal }}</td>
                <td>Rp {{ number_format($item->total_harga, 0, ',', '.') }}</td>
                <td>{{ optional($item->suplier)->nama_suplier ?? $item->id_suplier }}</td>
            </tr>
            @empty
            <tr>
                <td colspan="4" class="text-center">Belum ada data pembelian.</td>
            </tr>
            @endforelse
        </tbody>
    </table>
</div>
@endsection
