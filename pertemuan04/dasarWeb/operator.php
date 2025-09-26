<?php
$a = 10;
$b = 5;

$hasilTambah = $a + $b;
$hasilKurang = $a - $b;
$hasilKali = $a * $b;
$hasilBagi = $a / $b;
$sisaBagi = $a % $b;
$pangkat = $a ** $b;

echo "Nilai a = $a <br>";
echo "Nilai b = $b <br><br>";

echo "Hasil Penjumlahan: $hasilTambah <br>";
echo "Hasil Pengurangan: $hasilKurang <br>";
echo "Hasil Perkalian: $hasilKali <br>";
echo "Hasil Pembagian: $hasilBagi <br>";
echo "Sisa Bagi: $sisaBagi <br>";
echo "Hasil Pangkat: $pangkat <br><br>";

$hasilSama = $a == $b;
$hasilTidakSama = $a != $b;
$hasilLebihKecil = $a < $b;
$hasilLebihBesar = $a > $b;
$hasilLebihKecilSama = $a <= $b;
$hasilLebihBesarSama = $a >= $b;

echo "<hr>Hasil Sama: "; var_dump($hasilSama);
echo "<br>Hasil Tidak Sama: "; var_dump($hasilTidakSama);
echo "<br>Hasil Lebih Kecil: "; var_dump($hasilLebihKecil);
echo "<br>Hasil Lebih Besar: "; var_dump($hasilLebihBesar);
echo "<br>Hasil Lebih Kecil Sama: "; var_dump($hasilLebihKecilSama);
echo "<br>Hasil Lebih Besar Sama: "; var_dump($hasilLebihBesarSama);

$hasilAnd = $a && $b;
$hasilOr = $a || $b;
$hasilNotA = !$a;
$hasilNotB = !$b;

echo "<hr>Hasil And: "; var_dump($hasilAnd);
echo "<br>Hasil Or: "; var_dump($hasilOr);
echo "<br>Hasil Not A: "; var_dump($hasilNotA);
echo "<br>Hasil Not B: "; var_dump($hasilNotB);

$a += $b;
echo "<hr>Hasil a += b: {$a} <br>";

// Reset nilai a untuk perhitungan selanjutnya
$a = 10; 
$a -= $b;
echo "Hasil a -= b: {$a} <br>";

// Reset nilai a
$a = 10; 
$a *= $b;
echo "Hasil a *= b: {$a} <br>";

// Reset nilai a
$a = 10; 
$a /= $b;
echo "Hasil a /= b: {$a} <br>";

// Reset nilai a
$a = 10; 
$a %= $b;
echo "Hasil a %= b: {$a} <br>";

$hasilIdentik = $a === $b;
$hasilTidakIdentik = $a !== $b;

echo "<hr>Hasil Identik: "; var_dump($hasilIdentik);
echo "<br>Hasil Tidak Identik: "; var_dump($hasilTidakIdentik);
?>