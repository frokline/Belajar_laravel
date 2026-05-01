@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Daftar Suplier</h1>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nama Suplier</th>
                <th>No HP</th>
                <th>Alamat</th>
            </tr>
        </thead>
        <tbody>
            @forelse($supliers as $suplier)
            <tr>
                <td>{{ $suplier->id }}</td>
                <td>{{ $suplier->nama_suplier }}</td>
                <td>{{ $suplier->no_hp }}</td>
                <td>{{ $suplier->alamat }}</td>
            </tr>
            @empty
            <tr>
                <td colspan="4" class="text-center">Belum ada data suplier.</td>
            </tr>
            @endforelse
        </tbody>
    </table>
</div>
@endsection
