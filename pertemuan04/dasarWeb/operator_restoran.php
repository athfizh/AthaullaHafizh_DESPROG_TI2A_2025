<?php
$totalKursi = 45;
$kursiDitempati = 28;

$kursiKosong = $totalKursi - $kursiDitempati;
$persentaseKosong = ($kursiKosong / $totalKursi) * 100;

echo "Jumlah kursi yang masih kosong di restoran adalah {$kursiKosong} kursi.<br>";
echo "Persentase kursi yang masih kosong adalah " . round($persentaseKosong, 2) . "%.";
?>