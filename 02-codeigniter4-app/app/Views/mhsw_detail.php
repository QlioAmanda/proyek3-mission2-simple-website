<!DOCTYPE html>
<html>
<head>
    <title>Detail Mahasiswa</title>
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
        <h2>Detail Mahasiswa</h2>
        <p><strong>NIM:</strong> <?= $mhsw['nim'] ?></p>
        <p><strong>Nama:</strong> <?= $mhsw['nama'] ?></p>
        <p><strong>Umur:</strong> <?= $mhsw['umur'] ?></p>
        <a href="<?= base_url('mahasiswa') ?>">Kembali</a>
    </div>
</body>
</html>
