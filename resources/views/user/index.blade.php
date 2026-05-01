@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Daftar User</h1>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Email</th>
            </tr>
        </thead>
        <tbody>
            @forelse($users as $user)
            <tr>
                <td>{{ $user->id }}</td>
                <td>{{ $user->name }}</td>
                <td>{{ $user->email }}</td>
            </tr>
            @empty
            <tr>
                <td colspan="3" class="text-center">Belum ada data user.</td>
            </tr>
            @endforelse
        </tbody>
    </table>
</div>
@endsection
