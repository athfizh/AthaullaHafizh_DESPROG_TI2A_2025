<?php
// Lokasi penyimpanan file diubah ke 'images/'
$targetDirectory = "images/";

// Periksa apakah direktori penyimpanan ada, jika tidak maka buat
if (!file_exists($targetDirectory)) {
    mkdir($targetDirectory, 0777, true);
}

// === TAMBAHAN: Array untuk ekstensi yang diizinkan ===
$allowedExtensions = array("jpg", "jpeg", "png", "gif");

if (isset($_FILES['files']) && !empty(array_filter($_FILES['files']['name']))) {
    $totalFiles = count($_FILES['files']['name']);

    // Loop melalui semua file yang diunggah
    for ($i = 0; $i < $totalFiles; $i++) {
        $fileName = $_FILES['files']['name'][$i];
        $targetFile = $targetDirectory . $fileName;

        // === TAMBAHAN: Cek ekstensi file ===
        $fileType = strtolower(pathinfo($targetFile, PATHINFO_EXTENSION));

        // Cek apakah ekstensi ada di dalam array $allowedExtensions
        if (in_array($fileType, $allowedExtensions)) {
            // Pindahkan file yang diunggah ke direktori penyimpanan
            if (move_uploaded_file($_FILES['files']['tmp_name'][$i], $targetFile)) {
                echo "File $fileName berhasil diunggah.<br>";
            } else {
                echo "Gagal mengunggah file $fileName.<br>";
            }
        } else {
            // Tampilkan pesan error jika bukan gambar
            echo "File $fileName tidak valid. Hanya ekstensi .jpg, .jpeg, .png, .gif yang diizinkan.<br>";
        }
    }
} else {
    echo "Tidak ada file yang diunggah.";
}
?>