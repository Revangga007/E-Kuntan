<?php

// Jika terdapat method POST[simpan] 
if (isset($_POST['tambah'])) {

    // Instance Variabel form
    $namaKategori = htmlspecialchars($_POST['nama_kategori']);
    $jenis_transaksi = htmlspecialchars($_POST['jenis_transaksi']);

    // Function Query ke table rekening
    $query = mysqli_query($connec, "INSERT INTO kategori VALUES ('','$namaKategori',$jenis_transaksi);");

    if ($query) { ?>

        <script>
            alert('data berhasil ditambah');
            document.location.href = "<?= BASE_URL; ?>/kategori";
        </script>

<?php
    }
}

include 'pages/kategori/_form-kategori.php';
?>