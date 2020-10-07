<?php

$id = $_GET['result'];

// Jika terdapat method POST[simpan] 
if (isset($_POST['ubah'])) {

    // Instance Variabel form
    $namaKategori = htmlspecialchars($_POST['nama_kategori']);
    $jenis_transaksi = htmlspecialchars($_POST['jenis_transaksi']);

    // Function Query ke table kategori
    $query = mysqli_query($connec, "UPDATE kategori SET
                            nama_kategori = '$namaKategori',
                            id_jenis_transaksi = $jenis_transaksi
                            WHERE id = $id;");

    if ($query) { ?>

        <script>
            alert('data berhasil diubah');
            document.location.href = "<?= BASE_URL; ?>/kategori";
        </script>

<?php
    }
}

include 'pages/kategori/_form-kategori.php';
?>