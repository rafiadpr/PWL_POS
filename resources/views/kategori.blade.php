<!DOCTYPE html>
<html>
<head>
    <title>Data Category Barang</title>
</head>
<body>
    <h1>Data Category Barang</h1>
    <table border="1" cellpadding="2" cellspacing="0">
        <tr>
            <th>ID</th>
            <th>Kode Category</th>
            <th>Nama Category</th>
        </tr>
        @foreach ($data as $d)
            <tr>
                <td>{{ $d->category_id }}</td>
                <td>{{ $d->category_kode }}</td>
                <td>{{ $d->category_nama }}</td>
            </tr>
        @endforeach
    </table>
</body>
</html>