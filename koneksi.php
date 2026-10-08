<?php
$host = "localhost";
$user = "root";
$pass = ""; // Password default database Laragon adalah kosong
$db   = "simlog_bpbd";

$conn = mysqli_connect($host, $user, $pass, $db);

if (!$conn) {
    die("Koneksi database gagal: " . mysqli_connect_error());
}
?>