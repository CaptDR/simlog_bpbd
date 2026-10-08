<?php
session_start();
// Pastikan path ke koneksi.php benar karena file ini ada di dalam folder 'proses'
require_once '../includes/koneksi.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username = mysqli_real_escape_string($conn, $_POST['username']);
    $password = MD5($_POST['password']); // Enkripsi MD5

    $query = mysqli_query($conn, "SELECT * FROM tb_pengguna WHERE username='$username' AND password='$password'");
    
    if (mysqli_num_rows($query) > 0) {
        $data = mysqli_fetch_assoc($query);
        
        // Simpan data ke session
        $_SESSION['id_user'] = $data['id_user'];
        $_SESSION['nama_lengkap'] = $data['nama_lengkap'];
        $_SESSION['role'] = $data['role'];
        $_SESSION['status_login'] = true;

        echo "<script>alert('Login Berhasil!'); window.location='../dashboard.php';</script>";
    } else {
        echo "<script>alert('Username atau Password salah!'); window.location='../index.php';</script>";
    }
}
?>