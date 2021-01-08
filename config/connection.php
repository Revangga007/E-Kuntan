<?php

// Instance variabel
$host = 'localhost';
$user = 'root';
$password = '';
$db = 'e-kuntan_182300017';
$port = 3306;

// Function koneksi php ke mysql
$connec = mysqli_connect($host, $user, $password, $db, $port);

// Function cek koneksi
// if ($connec) {
//     echo "Berhasil Konek";
// } else {
//     echo "Koneksi gagal" . mysqli_errno($connec);
// }
