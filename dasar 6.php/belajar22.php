<?php
// Membuat array asosiatif dengan tanda =>
$artikel = [
    "judul" => "Modul Pemrograman Mobile",
    "penulis" => "Rudy Eko Prasetya",
    "jumlah_halaman" => 110
];

// Mencetak isi array asosiatif
echo "<h2>".$artikel["judul"]."</h2>";
echo "<p>Penulis: ".$artikel["penulis"]."</p>";
echo "<p>Jumlah Halaman: ".$artikel["jumlah_halaman"]."</p>";
?>