<!DOCTYPE html>
<html>
<head><title>Form Mahasiswa - PHP Dasar</title></head>
<body>
<h2>Form Mahasiswa</h2>
<form method="post">
  NIM: <input type="text" name="nim" required><br>
  Nama: <input type="text" name="nama" required><br>
  Jurusan: <input type="text" name="jurusan" required><br><br>
  <button type="submit">Simpan</button>
</form>
<hr>
<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  echo "<h3>Hasil Input</h3>";
  echo "NIM: " . htmlspecialchars($_POST['nim']) . "<br>";
  echo "Nama: " . htmlspecialchars($_POST['nama']) . "<br>";
  echo "Jurusan: " . htmlspecialchars($_POST['jurusan']) . "<br>";
}
?>
<p><a href="index.php">Kembali</a></p>
</body>
</html>
