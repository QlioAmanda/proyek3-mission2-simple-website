<?php
$mahasiswa = [
  ["241511087", "Qlio Amanda", "Teknik Informatika"],
  ["241511088", "Jeno lee", "Teknik Mesin"],
  ["241511089", "Na Jaemin", "Akuntansi"]
];

echo "<h2>Array Mahasiswa</h2>";
echo "<table border='1' cellpadding='6' cellspacing='0'>";
echo "<tr><th>NIM</th><th>Nama</th><th>Jurusan</th></tr>";
foreach ($mahasiswa as $m) {
  echo "<tr><td>{$m[0]}</td><td>{$m[1]}</td><td>{$m[2]}</td></tr>";
}
echo "</table>";
echo "<p><a href='index.php'>Kembali</a></p>";
