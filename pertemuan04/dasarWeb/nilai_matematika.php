<?php
$dataSiswa = [
    ["nama" => "Alice", "nilai" => 85],
    ["nama" => "Bob", "nilai" => 92],
    ["nama" => "Charlie", "nilai" => 78],
    ["nama" => "David", "nilai" => 64],
    ["nama" => "Eva", "nilai" => 90]
];

$totalNilai = 0;
foreach ($dataSiswa as $siswa) {
    $totalNilai += $siswa['nilai'];
}
$rataRata = $totalNilai / count($dataSiswa);

echo "Daftar nilai siswa yang di atas rata-rata kelas ($rataRata): <br>";
foreach ($dataSiswa as $siswa) {
    if ($siswa['nilai'] > $rataRata) {
        echo "Nama: " . $siswa['nama'] . ", Nilai: " . $siswa['nilai'] . "<br>";
    }
}
?>