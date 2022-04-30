<?php
$user = "root";
$pass = "";
try {
    $koneksi = new PDO('mysql:host=localhost;dbname=db_tugas', $user, $pass);
    $koneksi->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $th) {
    die("koneksi gagal" . $th->getMessage());
}
