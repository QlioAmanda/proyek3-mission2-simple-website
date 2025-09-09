<h2>Daftar Mahasiswa</h2>
<table border="1" cellpadding="5">
    <tr>
        <th>NIM</th>
        <th>Nama</th>
        <th>Umur</th>
        <th>Detail</th>
    </tr>
    <?php foreach($mahasiswa as $m): ?>
    <tr>
        <td><?= $m['nim'] ?></td>
        <td><?= $m['nama'] ?></td>
        <td><?= $m['umur'] ?></td>
        <td><a href="<?= base_url('mahasiswa/'.$m['nim']) ?>">Lihat</a></td>
    </tr>
    <?php endforeach; ?>
</table>
