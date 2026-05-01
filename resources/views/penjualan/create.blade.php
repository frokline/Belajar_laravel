@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Tambah Penjualan</h1>

    @if($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('penjualan.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="id_pelanggan">Pelanggan</label>
            <select class="form-control" id="id_pelanggan" name="id_pelanggan" required>
                <option value="">Pilih Pelanggan</option>
                @foreach($pelanggan as $item)
                    <option value="{{ $item->id }}">{{ $item->nama }} - {{ $item->no_hp }}</option>
                @endforeach
            </select>
        </div>
        <div class="form-group">
            <label for="tanggal">Tanggal</label>
            <input type="date" class="form-control" id="tanggal" name="tanggal" value="{{ old('tanggal', date('Y-m-d')) }}" required>
        </div>
        <div class="form-group">
            <label for="id_barang">Barang</label>
            <select class="form-control" id="id_barang" name="id_barang" required>
                <option value="">Pilih Barang</option>
                @foreach($barang as $item)
                    <option value="{{ $item->id }}">{{ $item->nama_barang }} - Rp {{ number_format($item->harga, 0, ',', '.') }}</option>
                @endforeach
            </select>
        </div>
        <div class="form-group">
            <label for="jumlah">Jumlah</label>
            <input type="number" class="form-control" id="jumlah" name="jumlah" value="{{ old('jumlah', 1) }}" min="1" required>
        </div>
        <div class="form-group">
            <label for="harga">Harga per Barang</label>
            <input type="number" class="form-control" id="harga" name="harga" value="{{ old('harga') }}" min="0" required>
        </div>
        <button type="submit" class="btn btn-primary">Simpan</button>
        <a href="{{ route('penjualan.index') }}" class="btn btn-secondary">Kembali</a>
    </form>
</div>
@endsection