<!DOCTYPE html>
<html>
<head>
    <title>Home</title>
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
        <h2>Selamat datang, <?= session()->get('username') ?>!</h2>
        <p>Ini adalah halaman Home.</p>
    </div>
</body>
</html>
