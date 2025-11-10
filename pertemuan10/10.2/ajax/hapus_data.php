<?php
session_start();
include 'koneksi.php';
include 'csrf.php';

$id = $_POST['id'];
$query = "delete from anggota where id = ?";
$sql = $db1->prepare($query);
$sql->execute(array($id));

echo json_encode(['success' => 'Sukses']);
$db1 = null;
?>