<?php
// Membuat array kosong
$siswa = array();
$kelas = [];

// Membuat array sekaligus mengisinya
$siswa = array("Ani", "Anton", "Sigit");
$kelas = [10, 11, 12];

// Membuat array dengan mengisi indeks tertentu
$siswa[0] = "Dian";
$siswa[1] = "Andy";
$siswa[2] = "Rudy";

var_dump($siswa);
echo "<br>";
var_dump($kelas);
?>