@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Detail Barang</h1>
    <div class="card">
        <div class="card-body">
            <h5 class="card-title">{{ $barang->nama_barang }}</h5>
            <p class="card-text">{{ $barang->deskripsi }}</p>
            <p><strong>Harga:</strong> Rp {{ number_format($barang->harga, 0, ',', '.') }}</p>
            <p><strong>Stok:</strong> {{ $barang->stok }}</p>
            @if($barang->foto)
                <img src="{{ asset('storage/' . $barang->foto) }}" alt="Foto Barang" class="img-fluid">
            @endif
        </div>
    </div>
    <a href="{{ route('barang.index') }}" class="btn btn-secondary">Kembali</a>
</div>
@endsection