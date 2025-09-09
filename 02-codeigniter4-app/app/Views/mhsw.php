<!DOCTYPE html>
<html>
<head>
    <title>Daftar Mahasiswa</title>
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
        <h2>Daftar Mahasiswa</h2>
        <table>
            <tr>
                <th>NIM</th>
                <th>Nama</th>
                <th>Umur</th>
                <th>Aksi</th>
            </tr>
            <?php foreach($mahasiswa as $m): ?>
            <tr>
                <td><?= $m['nim'] ?></td>
                <td><?= $m['nama'] ?></td>
                <td><?= $m['umur'] ?></td>
                <td><a href="<?= base_url('mahasiswa/'.$m['nim']) ?>">Detail</a></td>
            </tr>
            <?php endforeach; ?>
        </table>
    </div>
</body>
</html>
