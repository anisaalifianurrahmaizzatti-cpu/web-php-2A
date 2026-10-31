<?php
// 1. Menggunakan sintaks echo();
echo "<h2>Belajar PHP itu menyenangkan!</h2>";
echo("Selamat Datang!<br>");
echo "Aku sedang belajar PHP!<br>";
echo "Ini "."teks "."yang "."dibuat "."terpisah.<br>";

// 2. Menggunakan sintaks print();
print "<h2>Belajar PHP !</h2>";
print "Hello world!<br>";
print "Belajar mencetak teks di PHP!<br>";

// 3. Menggunakan echo dengan variabel
$txt = "rudyekoprasetya.wordpress.com";
echo "<br>Aku belajar pemrograman PHP di " . $txt . "<br>";

// 4. Menggunakan printf() dengan placeholder string (%s)
$txt = "rudyekoprasetya.wordpress.com";
printf("Aku belajar pemrograman PHP di %s<br>", $txt);

// 5. Menggunakan printf() untuk memformat angka/pecahan
$harga = 150000;

// Jika dicetak dengan echo:
echo "Harganya adalah Rp $harga <br>";

// Jika dicetak dengan printf (mengatur 2 angka di belakang koma dengan %.2f):
printf("Harganya adalah Rp %.2f<br>", $harga);
?>