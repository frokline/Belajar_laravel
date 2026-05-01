<!DOCTYPE html>
<html>
<head>
    <title>Daftar Pembelian</title>
    <style>
        table {
            width: 100%;
            border-collapse: collapse;
        }
        table, th, td {
            border: 1px solid black;
        }
        th, td {
            padding: 8px;
            text-align: left;
        }
        th {
            background-color: #f2f2f2;
        }
    </style>
</head>
<body>
    <h1>Daftar Pembelian</h1>
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Tanggal Pembelian</th>
                <th>Total</th>
                <th>ID Suplier</th>
                <!-- Add other relevant columns from your Pembelian model -->
            </tr>
        </thead>
        <tbody>
            @foreach ($pembelian as $item)
            <tr>
                <td>{{ $item->id }}</td>
                <td>{{ $item->tanggal_pembelian }}</td>
                <td>{{ $item->total }}</td>
                <td>{{ $item->id_suplier }}</td>
                <!-- Add other relevant data fields -->
            </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>
