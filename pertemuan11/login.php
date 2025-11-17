<?php
if (session_status() === PHP_SESSION_NONE)
    session_start();
// Memuat fungsi pesan kilat agar bisa menampilkan error
include "fungsi/pesan_kilat.php";
?>
<!doctype html>
<html lang="en" data-bs-theme="auto">
<head>
    <script src="assets/js/color-modes.js"></script>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Aplikasi Kantor Siapa</title>
    <link href="assets/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/custom/sign-in.css" rel="stylesheet">
</head>
<body class="d-flex align-items-center py-4 bg-body-tertiary">

    <main class="form-signin w-100 m-auto">
        <form action="cek_login.php" method="post">
            <img class="mb-4" src="assets/brand/bootstrap-logo.svg" alt="" width="72" height="57">
            <h1 class="h3 mb-3 fw-normal">Lakukan Login</h1>

            <?php
            // Menampilkan pesan kilat jika ada (misal: login gagal)
            if (isset($_SESSION['_flashdata'])) {
                foreach ($_SESSION['_flashdata'] as $key => $val) {
                    echo get_flashdata($key);
                }
            }
            ?>

            <div class="form-floating">
                <input type="text" class="form-control" name="username" placeholder="Username" required>
                <label>Username</label>
            </div>
            <div class="form-floating">
                <input type="password" class="form-control" name="password" placeholder="Password" required>
                <label>Password</label>
            </div>

            <button class="btn btn-primary w-100 py-2" type="submit">Masuk</button>
            <p class="mt-5 mb-3 text-body-secondary">&copy; 2017-2023</p>
        </form>
    </main>
    <script src="assets/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>