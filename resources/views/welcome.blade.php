<!-- resources/views/welcome.blade.php -->
<!DOCTYPE html>
<html>
<head>
    <title>Daftar Buku</title>
</head>
<body>
    <h1>Daftar Buku</h1>
    <table border="1">
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
            <td>{{ $buku['id'] }}</td>
            <td>{{ $buku['judul'] }}</td>
            <td>{{ $buku['penulis'] }}</td>
            <td>{{ $buku['harga'] }}</td>
            <td>{{ $buku['stok'] }}</td>
            <td>{{ $buku['kategori']['nama_kategori'] }}</td>
        </tr>
        @endforeach
    </table>
</body>
</html>
