<?php
// 1. Membuat function dasar tanpa parameter
function salam(){
    echo "<h3>Assalamualaikum, </h3>";
    echo "Perkenalkan, nama saya Rudy<br/>";
}

// 2. Fungsi dengan Parameter
function kenalan($nama, $asal) {
    echo "<h3>Halo Nama saya $nama </h3>";
    echo "Saya dari $asal <br>";
}

// 3. Fungsi yang Mengembalikan Nilai (Return)
function hitungUmur($thn_lahir, $thn_sekarang){
    $umur = $thn_sekarang - $thn_lahir;
    return $umur;
}

// 4. Fungsi yang Memanggil Fungsi Lain
function kenalanLengkap($nama, $asal) {
    echo "<h3>Halo Nama saya $nama </h3>";
    echo "Saya dari $asal <br>";
    echo "Umur saya adalah " . hitungUmur(1994, 2020) . " tahun<br>";
}

// Memanggil fungsi-fungsi di atas
salam();

$siswa = "Ani";
$dari = "kediri";

// Memanggil function kenalan biasa
kenalan($siswa, $dari);

echo "<hr>";

// Memanggil function kenalan lengkap yang di dalamnya memanggil hitungUmur()
kenalanLengkap($siswa, $dari);

// Memanggil fungsi hitungUmur secara mandiri
echo "<br>Umur saya adalah ". hitungUmur(1990, 2020) ." tahun";
?>