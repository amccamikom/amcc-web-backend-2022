<!-- Perulangan -->
<!-- Silahkan command sementara pada code yg sedang tidak diperlukan -->
<?php

// for
$nama = array("andi", "budi", "yudi");
$jumlah = count($nama);

for ($i = 0; $i < $jumlah; $i++) {
    echo "index " . $i . " nama " . $nama[$i] . "<br>";
}


// for lagi
for($i = 0; $i < 10; $i++){
    echo "<h2>Ini perulangan ke-$i</h2>";
}


// while
$ulangi = 0;

while ($ulangi < 10) {
    echo "<p>Ini adalah perulangan ke-$ulangi</p>";
    $ulangi++;
}


// do/while
$ulangi = 10;

do {
    echo "<p>ini adalah perulangan ke-$ulangi</p>";
    $ulangi--;
} while ($ulangi > 0);


// foreach
$books = [
    "Panduan Belajar PHP untuk Pemula",
    "Membangun Aplikasi Web dengan PHP",
    "Tutorial PHP dan MySQL",
    "Membuat Chat Bot dengan PHP"
];

echo "<h5>Judul Buku PHP:</h5>";
echo "<ul>";
foreach ($books as $buku) {
    echo "<li>$buku</li>";
}
echo "</ul>";
