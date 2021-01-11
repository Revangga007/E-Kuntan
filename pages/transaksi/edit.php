<?php

$id = $_GET['result'];

// Jika terdapat method POST[simpan] 
if (isset($_POST['ubah'])) {

    // Instance Variabel form
    $namatransaksi = htmlspecialchars($_POST['nama_transaksi']);
    $jenis_transaksi = htmlspecialchars($_POST['jenis_transaksi']);

    // Function Query ke table transaksi
    $query = mysqli_query($connec, "UPDATE transaksi SET
                            nama_transaksi = '$namatransaksi',
                            id_jenis_transaksi = $jenis_transaksi
                            WHERE id = $id;");

    if ($query) { ?>

        <script>
            alert('data berhasil diubah');
            document.location.href = "<?= BASE_URL; ?>/transaksi";
        </script>

<?php
    }
}

include 'pages/transaksi/_form-transaksi.php';
?>