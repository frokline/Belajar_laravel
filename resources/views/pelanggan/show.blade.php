@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Detail Pelanggan</h1>
    <div class="card">
        <div class="card-body">
            <h5 class="card-title">{{ $pelanggan->nama }}</h5>
            <p><strong>No HP:</strong> {{ $pelanggan->no_hp }}</p>
            <p><strong>Alamat:</strong> {{ $pelanggan->alamat }}</p>
        </div>
    </div>
    <a href="{{ route('pelanggan.index') }}" class="btn btn-secondary">Kembali</a>
</div>
@endsection