<?php
// Membuat array
$barang = ["Buku", "Penghapus", "Pencil"];

// Menampilkan isi array dengan nomor indeks
echo "<h3>Dengan nomor indeks</h3>";
echo $barang[0]."<br>";
echo $barang[1]."<br>";
echo $barang[2]."<br>";

// Menampilkan dengan perulangan foreach
echo "<h3>Dengan Foreach</h3>";
foreach($barang as $item) {
    echo $item."<br>";
}

// Menghapus data pada indeks ke-2 (Pencil)
unset($barang[2]);

// Menampilkan data setelah dihapus
echo "<h3>Data setelah dihapus</h3>";
foreach($barang as $item) {
    echo $item."<br>";
}

// Menambahkan Pencil kembali pada indeks ke-2
$barang[2] = "Pencil";
// Menambahkan Penggaris di indeks terakhir
$barang[] = "Penggaris";

echo "<h3>Data setelah Ditambah</h3>";
foreach($barang as $item) {
    echo $item."<br>";
}
?>