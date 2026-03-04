<!DOCTYPE html>
<html>
<head>
    <title>Data User</title>
</head>
<body>
    <h1>Form Tambah Data User</h1>
    <form method="post" action="{{ url('/user/tambah_simpan') }}">
        {{ csrf_field() }} 
        <label>Username</label><input type="text" name="username"><br>
        <label>Nama</label><input type="text" name="nama"><br>
        <label>Password</label><input type="password" name="password"><br>
        <label>Level ID</label><input type="number" name="level_id"><br><br>
        <input type="submit" value="Simpan">
    </form>
</body>
</html>