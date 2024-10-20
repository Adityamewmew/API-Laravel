<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Buku</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
        }
        table {
            width: 100%;
            border-collapse: collapse;
        }
        th, td {
            border: 1px solid #ddd;
            padding: 8px;
        }
        th {
            background-color: #f2f2f2;
        }
    </style>
</head>
<body>

<div class="container">
    <h1>Daftar Buku</h1>

    @if(isset($bukus) && count($bukus) > 0)
        <table>
            <tr>
                <th>ID</th>
                <th>Judul</th>
                <th>Penulis</th>
                <th>Harga</th>
                <th>Stok</th>
                <th>Kategori</th>
            </tr>
            @foreach ($bukus as $buku)
                <tr>
                    <td>{{ htmlspecialchars($buku->id) }}</td>
                    <td>{{ htmlspecialchars($buku->judul) }}</td>
                    <td>{{ htmlspecialchars($buku->penulis) }}</td>
                    <td>{{ htmlspecialchars($buku->harga) }}</td>
                    <td>{{ htmlspecialchars($buku->stok) }}</td>
                    <td>{{ htmlspecialchars($buku->kategori->nama_kategori ?? 'Tidak ada kategori') }}</td>
                </tr>
            @endforeach
        </table>
    @else
        <p>Data buku tidak ditemukan.</p>
    @endif
</div>

</body>
</html>
