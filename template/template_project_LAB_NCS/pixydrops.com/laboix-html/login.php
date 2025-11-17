<?php
// file: login.php (Desain Estetik + Footer Terlihat - FIX BUG)
// session_start();
// include 'koneksi.php'; 
include 'header.php';
include "navbar.php";
?>

<!-- CSS Kustom untuk Halaman Login -->
<style>
    /* Wrapper baru untuk background image */
    .login-page-background {
        background-image: url('assets/images/backgrounds/page-header-bg-1-1.jpg');
        background-position: center;
        background-size: cover;
        background-attachment: fixed;
        padding: 120px 20px; /* Padding atas dan bawah */
    }

    /* Menghapus page header bawaan template */
    .page-header {
        display: none;
    }

    /* Wrapper untuk konten login */
    .custom-login-wrapper {
        display: flex;
        align-items: center;
        justify-content: center;
        width: 100%;
    }

    /* Kotak login putih */
    .custom-login-box {
        background: rgba(255, 255, 255, 0.98);
        border-radius: 8px;
        box-shadow: 0 10px 40px rgba(0, 0, 0, 0.1);
        padding: 40px 50px;
        width: 100%;
        max-width: 500px;
        text-align: center;
    }
    
    .custom-login-icon {
        font-size: 40px;
        color: #00c497;
        margin-bottom: 20px;
        display: inline-block;
    }
    .custom-login-box h2 {
        font-weight: 700;
        margin-bottom: 10px;
        color: #333;
        font-size: 24px;
        text-align: center;
    }
    .custom-login-box p.login-sub-title {
        font-size: 16px;
        color: #555;
        margin-bottom: 30px;
    }
    .custom-login-box .form-group {
        margin-bottom: 20px;
        position: relative;
        text-align: left;
    }
    .custom-login-box .form-control {
        border: 1px solid #e0e0e0;
        background: #f9f9f9;
        height: 50px;
        padding: 10px 20px;
        border-radius: 5px;
        width: 100%;
        font-size: 15px;
    }
    .custom-login-box .form-control:focus {
        background: #fff;
        border-color: #00c497;
        box-shadow: none;
    }
    .custom-login-box .form-check {
         text-align: left;
    }
    .custom-login-box .form-check-label {
        color: #555;
        font-size: 14px;
        cursor: pointer;
    }
    .custom-login-box .form-check-input {
        cursor: pointer;
    }
    .custom-login-box .forgot-password {
        text-align: right;
        font-size: 14px;
        color: #555;
        text-decoration: none;
    }
    .custom-login-box .forgot-password:hover {
        color: #00c497;
    }
    .custom-login-box .laboix-btn {
        width: 100%;
        background-color: #00c497;
        border: none;
        padding: 12px;
        font-size: 16px;
        font-weight: 600;
        border-radius: 5px;
        margin-top: 10px;
    }
    .custom-login-box .laboix-btn:hover {
        background-color: #00a07c;
    }
</style>

<!-- Wrapper baru untuk background -->
<div class="login-page-background">
    <div class="custom-login-wrapper">
        <div class="custom-login-box wow fadeInUp" data-wow-duration="1000ms">
            
            <span class="custom-login-icon icon-shield"></span> 
            
            <h2>Login Admin</h2>
            <p class="login-sub-title">Halaman ini dikhususkan untuk admin pengelola.</p>
            
            <form action="#" method="post">
                <div class="form-group">
                    <input type="text" class="form-control" placeholder="masukkan username" name="username" required>
                </div>
                <div class="form-group">
                    <input type="password" class="form-control" placeholder="masukkan password" name="password" required>
                </div>
                <div class="row mb-3 align-items-center">
                    <div class="col-6">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="rememberCheck" name="remember">
                            <label class="form-check-label" for="rememberCheck">
                                Remember me?
                            </label>
                        </div>
                    </div>
                    <div class="col-6">
                        <a href="#" class="forgot-password">Forget password?</a>
                    </div>
                </div>
                <button type="submit" class="laboix-btn">Login</button>
            </form>
        </div>
    </div>
</div>

<?php
// Memanggil footer secara normal agar terlihat
include 'footer.php';
?>