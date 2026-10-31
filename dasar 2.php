<?php
// 1. Membuat Variabel dan Tipe Data
$nama_barang = "Sabun Mandi";
$harga = 4000;
$stok = 40;

// Melihat tipe data variabel dengan var_dump()
var_dump($nama_barang);
var_dump($harga);
var_dump($stok);

// 2. Menampilkan isi variabel menggunakan tanda petik ganda ("")
echo "<br>Ani membeli $nama_barang seharga Rp $harga<br>";

// 3. Menampilkan isi variabel menggunakan tanda petik tunggal ('') dengan titik (.)
echo 'Ani membeli $nama_barang seharga Rp ' . $harga . "<br><br>";

// 4. Membuat dan Menggunakan Konstanta
define('VERSION', '1.0.0');

const SITE_NAME = "Rudy Eko Prasetya Blog's";
const BASE_URL = "https://rudyekoprasetya.wordpress.com";

// Cetak nilai konstanta
echo "Site name: " . SITE_NAME . "<br/>";
echo "URL: " . BASE_URL . "<br/>";
echo "Version: " . VERSION . "<br/>";
?>