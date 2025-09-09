<!DOCTYPE html>
<html>
<head>
    <title>Akademik</title>
</head>
<body>
    <h1>Website Akademik</h1>
    <nav>
        <a href="<?= base_url('/') ?>">Home</a> |
        <a href="<?= base_url('/mahasiswa') ?>">Mahasiswa</a> |
        <a href="<?= base_url('/mahasiswa/create') ?>">Tambah Mahasiswa</a> |
        <a href="<?= base_url('/login') ?>">Login</a>
        <a href="<?= base_url('logout') ?>">Logout</a>
    </nav>
    <hr>
    <div>
        <?= $content ?>
    </div>
</body>
</html>
