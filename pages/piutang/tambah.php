<?php

// Jika terdapat method POST[simpan] 
if (isset($_POST['tambah'])) {

    // Instance Variabel form
    $nama_piutang = htmlspecialchars($_POST['nama_piutang']);
    $nama_pengutang = htmlspecialchars($_POST['nama_pengutang']);
    $nominal_piutang = htmlspecialchars($_POST['nominal_piutang']);
    $tanggal_piutang = htmlspecialchars($_POST['tanggal_piutang']);

    // Function Query ke table rekening
    $query = mysqli_query($connec, "INSERT INTO piutang VALUES ('','$nama_piutang','$nama_pengutang','$nominal_piutang','$tanggal_piutang');");

    if ($query) { ?>

        <script>
            alert('data berhasil ditambah');
            document.location.href = "<?= BASE_URL; ?>/piutang";
        </script>

<?php
    }
}

include 'pages/piutang/_form-piutang.php';
?>