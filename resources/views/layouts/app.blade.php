<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Penjualan 4D')</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="{{ url('/') }}">Penjualan 4D</a>
        <div class="collapse navbar-collapse">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('barang.index') }}">Barang</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('pelanggan.index') }}">Pelanggan</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('penjualan.index') }}">Penjualan</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('pembelian.index') }}">Pembelian</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('suplier.index') }}">Suplier</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('detailpenjualan.index') }}">Detail Jual</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('detailpembelian.index') }}">Detail Beli</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('barangmasuk.index') }}">Barang Masuk</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('user.index') }}">User</a>
                </li>
            </ul>
        </div>
    </nav>

    <div class="container mt-4">
        @if(session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif

        @yield('content')
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>