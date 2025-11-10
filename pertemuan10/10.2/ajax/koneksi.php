<?php
define('host', 'localhost');
define('user', 'postgres');
define('pass', 'kepanjen45');
define('db1', 'prakwebdb');

try {
    $db1 = new PDO("pgsql:host=" . host . ";dbname=" . db1, user, pass);
    $db1->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo "koneksi gagal: " . $e->getMessage();
}
?>