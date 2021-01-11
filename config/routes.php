<?php
if (isset($_GET['menu']) && isset($_GET['action'])) {
    // Instance variabel get
    $menu = $_GET['menu'];
    $action = $_GET['action'];

    if ($menu == 'kategori' && $action == 'tambah') {
        include 'pages/kategori/tambah.php';
    } else
    if ($menu == 'kategori' && $action == 'ubah') {
        include 'pages/kategori/edit.php';
    } else
    if ($menu == 'kategori' && $action == 'hapus') {
        include 'pages/kategori/hapus.php';
    }
    if ($menu == 'rekening' && $action == 'tambah') {
        include 'pages/rekening/tambah.php';
    } else
    if ($menu == 'rekening' && $action == 'ubah') {
        include 'pages/rekening/edit.php';
    } else
    if ($menu == 'rekening' && $action == 'hapus') {
        include 'pages/rekening/hapus.php';
    } else
    if ($menu == 'pengguna' && $action == 'tambah') {
        include 'pages/pengguna/tambah.php';
    } else
    if ($menu == 'pengguna' && $action == 'ubah') {
        include 'pages/pengguna/edit.php';
    } else
    if ($menu == 'pengguna' && $action == 'hapus') {
        include 'pages/pengguna/hapus.php';
    } else
    if ($menu == 'profil' && $action == 'lihat') {
        include 'pages/profile.php';
    } else
    if ($menu == 'password' && $action == 'ubah') {
        include 'pages/ubahPassword.php';
    }
} else
if (isset($_GET['menu'])) {
    if ($_GET['menu'] == "logout") {
        include 'pages/logout.php';
    } else
    if ($_GET['menu'] == "rekening") {
        include 'pages/rekening/index.php';
    } else
    if ($_GET['menu'] == "transaksi") {
        include 'pages/transaksi/index.php';
    } else
    if ($_GET['menu'] == "hutang") {
        include 'pages/hutang/index.php';
    } else
    if ($_GET['menu'] == "piutang") {
        include 'pages/piutang/index.php';
    } else
    if ($_GET['menu'] == "pengguna") {
        include 'pages/pengguna/index.php';
    } else
    if ($_GET['menu'] == "laporan") {
        include 'pages/laporan/laporan.php';
    } else
    if ($_GET['menu'] == "kategori") {
        include 'pages/kategori/index.php';
    } else 
    if ($_GET['menu'] == "dashboard") {
        include 'pages/dashboard.php';
    } else {
        include 'pages/404.php';
    }
} else {
    include 'pages/dashboard.php';
}


// if(isset($_GET['menu'])){
//     $menu = $_GET['menu'];

//     if($menu == 'rekening'){
//         if(isset($))
//     }
// }
