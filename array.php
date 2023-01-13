<!-- Array -->
<!-- Silahkan command sementara pada code yg sedang tidak diperlukan -->
<?php
// membuat array kosong
$buah = array();
$hobi = [];

// membuat array sekaligus mengisinya
$minuman = array("Kopi", "Teh", "Jus Jeruk");
$makanan = ["Nasi Goreng", "Soto", "Bubur"];

// membuat array dengan mengisi indeks tertentu
$anggota[1] = "AMCC";
$anggota[2] = "AMIKOM";
$anggota[0] = "WEB PROGRAMMING";

//menampilkan isi array
echo $minuman[0] . PHP_EOL;
echo $minuman[1] . PHP_EOL;
echo $minuman[2] . PHP_EOL;


// contoh 2
$nama = array("andi", "budi", "yudi");

echo count($nama);

echo $nama[0];
echo $nama[1];
echo $nama[2];
