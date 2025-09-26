<?php
$hargaProduk = 120000;
$hargaSetelahDiskon = $hargaProduk;

if ($hargaProduk > 100000) {
    $diskon = $hargaProduk * 0.20;
    $hargaSetelahDiskon = $hargaProduk - $diskon;
}

echo "Harga yang harus dibayar setelah mendapatkan diskon adalah: Rp " . number_format($hargaSetelahDiskon, 0, ',', '.') . " <br><br>";
?>