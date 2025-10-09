<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nama = $_POST['nama'] ?? '';
    $email = $_POST['email'] ?? '';
    $password = $_POST['password'] ?? '';
    $errors = [];

    // Validasi server-side
    if (empty($nama)) { $errors[] = "Nama wajib diisi."; }
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) { $errors[] = "Email tidak valid."; }
    if (strlen($password) < 8) { $errors[] = "Password minimal 8 karakter."; }

    if (!empty($errors)) {
        foreach ($errors as $error) {
            echo "<p style='color:red;'>$error</p>";
        }
    } else {
        echo "<p style='color:green;'>Data valid dan berhasil diterima!</p>";
    }
}
?>