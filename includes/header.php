<?php 
// Panggil koneksi database
require_once 'koneksi.php'; 
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="utf-8"/>
    <meta content="width=device-width, initial-scale=1.0" name="viewport"/>
    <title>SIMLOG BPBD - Kota Cirebon</title>
    <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" rel="stylesheet"/>
    <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&display=swap" rel="stylesheet"/>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100..900&display=swap" rel="stylesheet"/>
    <style>
        @layer base{html,body{margin:0;padding:0;}body{overscroll-behavior:none;}main>:first-child{margin-top:0!important;}main>:last-child{margin-bottom:0!important;}}::-webkit-scrollbar{display:none;}
    </style>
    <!-- Tailwind via CDN -->
    <script src="https://cdn.tailwindcss.com"></script>
    <script id="tailwind-config">
        tailwind.config={darkMode:"class",theme:{extend:{colors:{"primary-fixed":"#ffdbcc","inverse-primary":"#ffb694","on-secondary-container":"#656464","error":"#ba1a1a","surface":"#fcf9f8","inverse-surface":"#303030","tertiary-fixed":"#ffdbca","inverse-on-surface":"#f3f0ef","on-secondary-fixed-variant":"#474646","outline":"#8e7164","on-tertiary-container":"#542200","on-primary":"#ffffff","surface-container-highest":"#e5e2e1","on-surface":"#1b1b1c","on-error-container":"#93000a","surface-container-lowest":"#ffffff","tertiary-fixed-dim":"#ffb68e","on-primary-container":"#571f00","surface-bright":"#fcf9f8","background":"#fcf9f8","tertiary-container":"#f57310","on-surface-variant":"#5a4136","secondary-fixed-dim":"#c8c6c5","secondary":"#5f5e5e","secondary-fixed":"#e5e2e1","tertiary":"#9c4500","surface-variant":"#e5e2e1","on-primary-fixed-variant":"#7b2f00","surface-container-high":"#eae7e7","on-secondary":"#ffffff","on-background":"#1b1b1c","on-tertiary-fixed":"#331200","surface-container":"#f0eded","on-tertiary":"#ffffff","primary":"#a14000","primary-fixed-dim":"#ffb694","on-tertiary-fixed-variant":"#773300","surface-container-low":"#f6f3f2","primary-container":"#ff6a00","error-container":"#ffdad6","secondary-container":"#e5e2e1","on-error":"#ffffff","outline-variant":"#e2bfb0","surface-tint":"#a14000","on-primary-fixed":"#351000","on-secondary-fixed":"#1c1b1b","surface-dim":"#dcd9d9"},borderRadius:{"DEFAULT":"0.25rem","lg":"0.5rem","xl":"0.75rem","full":"9999px"},spacing:{"gutter-sm":"1rem","margin":"2rem","space-xl":"2rem","margin-mobile":"1rem","gutter":"1.5rem","space-2xl":"3rem","space-xs":"0.25rem","space-sm":"0.5rem","space-lg":"1.5rem","space-md":"1rem"},fontFamily:{"headline-sm":["Inter"],"label-md":["Inter"],"tabular-data":["Inter"],"body-sm":["Inter"],"body-lg":["Inter"],"headline-md":["Inter"],"label-sm":["Inter"],"headline-xl":["Inter"],"headline-lg":["Inter"],"body-md":["Inter"],"headline-xl-mobile":["Inter"]},fontSize:{"headline-sm":["16px",{lineHeight:"24px",letterSpacing:"0em",fontWeight:"600"}],"label-md":["12px",{lineHeight:"16px",letterSpacing:"0.04em",fontWeight:"600"}],"tabular-data":["13px",{lineHeight:"18px",letterSpacing:"-0.01em",fontWeight:"500"}],"body-sm":["13px",{lineHeight:"18px",letterSpacing:"0.005em",fontWeight:"400"}],"body-lg":["16px",{lineHeight:"24px",letterSpacing:"0em",fontWeight:"400"}],"headline-md":["20px",{lineHeight:"28px",letterSpacing:"-0.01em",fontWeight:"600"}],"label-sm":["11px",{lineHeight:"14px",letterSpacing:"0.05em",fontWeight:"700"}],"headline-xl":["36px",{lineHeight:"44px",letterSpacing:"-0.02em",fontWeight:"700"}],"headline-lg":["24px",{lineHeight:"32px",letterSpacing:"-0.015em",fontWeight:"700"}],"body-md":["14px",{lineHeight:"20px",letterSpacing:"0em",fontWeight:"400"}],"headline-xl-mobile":["28px",{lineHeight:"36px",letterSpacing:"-0.01em",fontWeight:"700"}]}}}};
    </script>
</head>
<body class="bg-background font-body-md text-on-surface antialiased min-h-screen flex flex-col">
    <!-- Navbar / Header Atas -->
    <header class="fixed top-0 left-0 w-full z-50 bg-[#111111]">
        <div class="h-16 w-full px-gutter flex items-center justify-between">
            <div class="flex items-center gap-space-lg">
                <a class="flex items-center gap-space-sm decoration-none" href="<?= BASE_URL ?>dashboard.php">
                    <span class="material-symbols-outlined text-primary-container text-[26px]">local_shipping</span>
                    <div class="flex flex-col">
                        <span class="font-headline-sm text-headline-sm text-primary-container uppercase tracking-tight">SIMLOG BPBD</span>
                        <span class="font-label-sm text-label-sm text-secondary-fixed-dim uppercase tracking-wider">BPBD Kota Cirebon</span>
                    </div>
                </a>
                <div class="h-6 w-[1px] bg-[#2a2a2a] hidden lg:block"></div>
                <!-- Menu Navigasi -->
                <nav class="hidden lg:flex items-center gap-space-xs">
                    <!-- Nanti kita tambahkan logika active class via PHP di sini -->
                    <a class="px-space-md py-space-xs rounded bg-primary-container text-on-primary font-headline-sm" href="<?= BASE_URL ?>dashboard.php">Dashboard</a>
                    <a class="px-space-md py-space-xs rounded font-body-md text-body-md text-secondary-fixed-dim hover:text-surface hover:bg-[#1f1f1f]" href="#">Data Barang</a>
                    <a class="px-space-md py-space-xs rounded font-body-md text-body-md text-secondary-fixed-dim hover:text-surface hover:bg-[#1f1f1f]" href="#">Barang Masuk</a>
                    <a class="px-space-md py-space-xs rounded font-body-md text-body-md text-secondary-fixed-dim hover:text-surface hover:bg-[#1f1f1f]" href="#">Barang Keluar</a>
                </nav>
            </div>
            
            <!-- Profil & Logout -->
            <div class="flex items-center gap-space-md">
                <div class="hidden md:flex items-center gap-space-sm bg-[#1c1c1c] py-space-xs px-space-md rounded-full">
                    <span class="material-symbols-outlined text-primary-container text-[18px]">badge</span>
                    <!-- Ambil nama dari Session -->
                    <span class="font-label-md text-label-md text-surface"><?= isset($_SESSION['nama_lengkap']) ? $_SESSION['nama_lengkap'] : 'User' ?></span>
                    <span class="font-label-sm text-label-sm text-secondary-fixed-dim">•</span>
                    <span class="font-label-sm text-label-sm text-secondary-fixed-dim">Petugas Logistik</span>
                </div>
                <div class="w-8 h-8 rounded-full bg-primary flex items-center justify-center">
                    <span class="material-symbols-outlined text-on-primary text-[18px]">person</span>
                </div>
                <!-- Link Logout mengarah ke proses/logout.php -->
                <a class="inline-flex items-center gap-space-xs bg-error hover:bg-[#a11515] text-on-error px-space-md py-space-xs rounded font-label-md text-label-md transition-colors" href="<?= BASE_URL ?>proses/logout.php">
                    <span class="material-symbols-outlined text-[16px]">logout</span>
                    <span>Keluar</span>
                </a>
            </div>
        </div>
    </header>

    <!-- Pembuka Tag Main Content -->
    <main class="w-full pt-16 flex-1 bg-background">
        <div class="flex flex-col w-full">
            <div class="w-full px-gutter-sm lg:px-gutter py-space-lg max-w-[1440px] mx-auto space-y-space-lg">