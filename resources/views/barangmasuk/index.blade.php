@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Barang Masuk</h1>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>ID</th>
                <th>Detail Pembelian</th>
                <th>Tanggal Masuk</th>
                <th>Jumlah Masuk</th>
            </tr>
        </thead>
        <tbody>
            @forelse($barangMasuks as $masuk)
            <tr>
                <td>{{ $masuk->id }}</td>
                <td>{{ $masuk->detail_pembelian?->id ?? '-' }}</td>
                <td>{{ $masuk->tanggal_masuk }}</td>
                <td>{{ $masuk->jumlah_masuk }}</td>
            </tr>
            @empty
            <tr>
                <td colspan="4" class="text-center">Belum ada data barang masuk.</td>
            </tr>
            @endforelse
        </tbody>
    </table>
</div>
@endsection
