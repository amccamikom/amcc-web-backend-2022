<!-- Percabangan -->
<!-- Silahkan command sementara pada code yg sedang tidak diperlukan -->
<?php

// if/else
$email = "admin@gmail.com";
$checkEmail = "admin@gmail.com";

if ($email == $checkEmail) {
    echo "berhasil login";
} else {
    echo "gagal login";
}

echo "<br>";
echo "<br>";

// if/else if/else
$email = "";
$checkEmail = "admin@gmail.com";

if ($email == "") {
    echo "email harus diisi";
} else if ($email == $checkEmail) {
    echo "login berhasil";
} else {
    echo "gagal login";
}

echo "<br>";
echo "<br>";

// switch/case
$level = 4;

switch ($level) {
    case 1:
        echo "Belajar HTML";
        break;
    case 2:
        echo "Belajar CSS";
        break;
    case 3:
        echo "Belajar Javascript";
        break;
    case 4:
        echo "Belajar PHP";
        break;
    default:
        echo "Tidak Belajar";
}

echo "<br>";
echo "<br>";

// ternary
$suka = true;

echo $suka ? "Aku juga suka kamu kok" : "Oh Yaudah :)";

echo "<br>";
echo "<br>";

// nested if
$umur = 17;
$menikah = false;

if ($umur > 18) {
    if ($menikah) {
        echo "Selamat datang!";
    } else {
        echo "Selamat datang wahai pemuda!";
    }
} else {
    echo "Maaf website ini hanya untuk umur 18+";
}
