@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Daftar Pelanggan</h1>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nama</th>
                <th>No HP</th>
                <th>Alamat</th>
            </tr>
        </thead>
        <tbody>
            @forelse($pelanggans as $pelanggan)
            <tr>
                <td>{{ $pelanggan->id }}</td>
                <td>{{ $pelanggan->nama }}</td>
                <td>{{ $pelanggan->no_hp }}</td>
                <td>{{ $pelanggan->alamat }}</td>
            </tr>
            @empty
            <tr>
                <td colspan="4" class="text-center">Belum ada data pelanggan.</td>
            </tr>
            @endforelse
        </tbody>
    </table>
</div>
@endsection