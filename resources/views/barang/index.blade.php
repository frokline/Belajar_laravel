@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Daftar Barang</h1>
    <a href="{{ route('barang.create') }}" class="btn btn-primary">Tambah Barang</a>
    <table class="table table-striped">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nama Barang</th>
                <th>Deskripsi</th>
                <th>Harga</th>
                <th>Stok</th>
                <th>Foto</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach($data as $barang)
            <tr>
                <td>{{ $barang->id }}</td>
                <td>{{ $barang->nama_barang }}</td>
                <td>{{ $barang->deskripsi }}</td>
                <td>Rp {{ number_format($barang->harga, 0, ',', '.') }}</td>
                <td>{{ $barang->stok }}</td>
                <td>
                    @if($barang->foto)
                        <img src="{{ asset('storage/' . $barang->foto) }}" alt="Foto Barang" width="50">
                    @else
                        Tidak ada foto
                    @endif
                </td>
                <td>
                    <a href="{{ route('barang.show', $barang->id) }}" class="btn btn-info">Lihat</a>
                    <a href="{{ route('barang.edit', $barang->id) }}" class="btn btn-warning">Edit</a>
                    <form action="{{ route('barang.destroy', $barang->id) }}" method="POST" style="display:inline;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger" onclick="return confirm('Apakah Anda yakin?')">Hapus</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection