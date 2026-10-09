<?php
session_start();
if (!isset($_SESSION['status_login'])) {
    echo "<script>alert('Silakan login terlebih dahulu!'); window.location='index.php';</script>";
    exit;
}
include 'includes/header.php'; 
?>

<!-- Operational Status Bar (Compact Alert Banner) -->
<section class="bg-[#111111] text-surface rounded-xl p-space-md shadow-md flex flex-col md:flex-row items-start md:items-center justify-between gap-space-sm relative overflow-hidden">
    <div class="absolute left-0 top-0 bottom-0 w-1.5 bg-primary-container"></div>
    <div class="flex items-center gap-space-sm pl-space-xs">
        <span class="inline-flex relative flex h-3 w-3">
            <span class="animate-ping absolute inline-flex h-full w-full rounded-full bg-primary-container opacity-75"></span>
            <span class="relative inline-flex rounded-full h-3 w-3 bg-primary-container"></span>
        </span>
        <div class="flex flex-wrap items-center gap-x-space-sm gap-y-1">
            <span class="font-label-sm text-label-sm uppercase tracking-wider text-primary-container bg-primary-container/20 px-2 py-0.5 rounded">Gudang Utama</span>
            <span class="font-headline-sm text-headline-sm text-surface font-bold tracking-tight">STATUS KESIAPSIAGAAN: SIAGA 1</span>
        </div>
    </div>
</section>

<!-- Header Area -->
<header class="flex flex-col lg:flex-row lg:items-end justify-between gap-space-md bg-surface-container-lowest p-space-lg rounded-xl shadow-sm mt-4">
    <div class="space-y-space-xs">
        <nav aria-label="Breadcrumb" class="flex items-center gap-1.5 text-secondary font-label-md text-label-md">
            <span class="hover:text-on-surface cursor-pointer">Beranda</span>
            <span class="material-symbols-outlined text-[14px]">chevron_right</span>
            <span class="text-on-surface font-semibold">Dashboard Ringkasan</span>
        </nav>
        <div>
            <h1 class="font-headline-xl text-headline-xl text-on-surface tracking-tight">
                Selamat Datang, <span class="text-primary"><?= $_SESSION['nama_lengkap']; ?>!</span>
            </h1>
            <div class="h-1 w-[90px] bg-primary-container rounded-full mt-2"></div>
        </div>
        <p class="font-body-md text-body-md text-secondary max-w-2xl pt-1">
            Monitoring real-time ketersediaan bantuan dan alur distribusi logistik bencana Kota Cirebon.
        </p>
    </div>
</header>

<!-- Operational KPI Metrics (Summary Cards) -->
<section class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-space-lg mt-6">
    <!-- Card 1 -->
    <div class="bg-surface-container-lowest rounded-xl p-space-lg shadow-sm border-t-4 border-[#111111]">
        <span class="font-label-md text-secondary uppercase tracking-wider block mb-2">Total Jenis Barang</span>
        <div class="flex items-center gap-3">
            <span class="material-symbols-outlined text-[32px] text-[#111111]">inventory_2</span>
            <span class="font-headline-xl text-on-surface font-extrabold">--</span>
        </div>
        <p class="text-sm text-secondary mt-2 text-primary">*) Data akan dihubungkan ke tabel MySQL di Sprint 2</p>
    </div>
    
    <!-- Card 2 -->
    <div class="bg-surface-container-lowest rounded-xl p-space-lg shadow-sm border-t-4 border-primary-container">
        <span class="font-label-md text-secondary uppercase tracking-wider block mb-2">Barang Masuk Bulan Ini</span>
        <div class="flex items-center gap-3">
            <span class="material-symbols-outlined text-[32px] text-primary-container">move_to_inbox</span>
            <span class="font-headline-xl text-on-surface font-extrabold">--</span>
        </div>
    </div>

    <!-- Card 3 -->
    <div class="bg-surface-container-lowest rounded-xl p-space-lg shadow-sm border-t-4 border-error">
        <span class="font-label-md text-secondary uppercase tracking-wider block mb-2">Barang Keluar (Distribusi)</span>
        <div class="flex items-center gap-3">
            <span class="material-symbols-outlined text-[32px] text-error">local_shipping</span>
            <span class="font-headline-xl text-on-surface font-extrabold">--</span>
        </div>
    </div>
</section>

<?php include 'includes/footer.php'; ?>