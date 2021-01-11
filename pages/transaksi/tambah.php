<?php

// Jika terdapat method POST[simpan] 
if (isset($_POST['tambah'])) {

    // Instance Variabel form
    $namatransaksi = htmlspecialchars($_POST['nama_transaksi']);
    $jenis_transaksi = htmlspecialchars($_POST['jenis_transaksi']);

    // Function Query ke table rekening
    $query = mysqli_query($connec, "INSERT INTO transaksi VALUES ('','$namatransaksi',$jenis_transaksi);");

    if ($query) { ?>

        <script>
            alert('data berhasil ditambah');
            document.location.href = "<?= BASE_URL; ?>/transaksi";
        </script>

<?php
    }
}

include 'pages/transaksi/_form-transaksi.php';
?>