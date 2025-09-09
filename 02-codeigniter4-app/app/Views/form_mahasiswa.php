<!DOCTYPE html>
<html>
<head>
    <title>Tambah Mahasiswa</title>
    <link rel="stylesheet" href="<?= base_url('css/style.css') ?>">
</head>
<body>
    <div class="navbar">
        <a href="<?= base_url('home') ?>">Home</a>
        <a href="<?= base_url('mahasiswa') ?>">Mahasiswa</a>
        <a href="<?= base_url('mahasiswa/create') ?>">Tambah Mahasiswa</a>
        <a href="<?= base_url('logout') ?>">Logout</a>
    </div>

    <div class="container">
        <h2>Tambah Mahasiswa</h2>
        <form method="post" action="<?= base_url('mahasiswa/store') ?>">
            <input type="text" name="nim" placeholder="NIM" required><br>
            <input type="text" name="nama" placeholder="Nama" required><br>
            <input type="number" name="umur" placeholder="Umur" required><br>
            <button type="submit">Simpan</button>
        </form>
    </div>
</body>
</html>
