<?php
session_start();
// Kunci halaman: Tendang user ke index.php jika belum login
if (!isset($_SESSION['status_login'])) {
    echo "<script>alert('Silakan login terlebih dahulu!'); window.location='index.php';</script>";
    exit;
}

include 'includes/header.php'; 
?>

<div class="row mt-4">
    <div class="col-md-12 text-center">
        <h2 class="mt-4">Selamat Datang, <?= $_SESSION['nama_lengkap']; ?>!</h2>
        <p class="text-muted">Ini adalah halaman Dashboard SIMLOG BPBD Kota Cirebon.</p>
        
        <div class="alert alert-success mt-4 d-inline-block">
            Modul Autentikasi Sprint 1 Berhasil!
        </div>
        <br>
        <a href="proses/logout.php" class="btn btn-danger mt-3">Logout</a>
    </div>
</div>

<?php include 'includes/footer.php'; ?>