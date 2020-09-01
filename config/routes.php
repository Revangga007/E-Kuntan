<?php
if (isset($_GET['menu']) && isset($_GET['action'])) {
    // Instance variabel get
    $menu = $_GET['menu'];
    $action = $_GET['action'];

    if ($menu == 'rekening' && $action == 'tambah') {
        include 'pages/rekening/tambah.php';
    } else
    if ($menu == 'rekening' && $action == 'ubah') {
        include 'pages/rekening/edit.php';
    } else
    if ($menu == 'rekening' && $action == 'hapus') {
        include 'pages/rekening/hapus.php';
    }
} else
if (isset($_GET['menu'])) {
    if ($_GET['menu'] == "kategori") {
        include 'pages/kategori/_table-kategori.php';
    } else
    if ($_GET['menu'] == "rekening") {
        include 'pages/rekening/_table-rekening.php';
    } else
    if ($_GET['menu'] == "transaksi") {
        include 'pages/transaksi/_table-transaksi.php';
    } else
    if ($_GET['menu'] == "hutang") {
        include 'pages/hutang/_table-hutang.php';
    } else
    if ($_GET['menu'] == "piutang") {
        include 'pages/piutang/_table-piutang.php';
    } else
    if ($_GET['menu'] == "pengguna") {
        include 'pages/pengguna/_table-pengguna.php';
    } else
    if ($_GET['menu'] == "laporan") {
        include 'pages/laporan/laporan.php';
    } else {
        include 'pages/404.php';
    }
} else {
    include 'pages/dashboard.php';
}
