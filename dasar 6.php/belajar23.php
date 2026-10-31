<?php
// Membuat array 2 dimensi yang berisi array asosiatif
$artikel = [
    [
        "judul" => "Modul Pemrograman Mobile",
        "penulis" => "Rudy Eko Prasetya"
    ],
    [
        "judul" => "Modul Dasar Pemrograman dengan C++",
        "penulis" => "Rudy Eko Prasetya"
    ],
    [
        "judul" => "Panduan Block Programming dengan SCRATCH",
        "penulis" => "Rudy Eko Prasetya"
    ]
];

// Menampilkan array multidimensi dengan perulangan foreach
foreach($artikel as $item){
    echo "<h2>Buku ".$item["judul"]."</h2>";
    echo "<p>Penulis: ".$item["penulis"]."</p>";
    echo "<hr>";
}
?>