<?php

$id = $_GET['result'];

// Jika terdapat method POST[simpan] 
if (isset($_POST['ubah'])) {

    // Instance Variabel form
    $nama_piutang = htmlspecialchars($_POST['nama_piutang']);
    $nama_pengutang = htmlspecialchars($_POST['nama_pengutang']);
    $nominal_piutang = htmlspecialchars($_POST['nominal_piutang']);
    $tanggal_piutang = htmlspecialchars($_POST['tanggal_piutang']);

    // Function Query ke table piutang
    $query = mysqli_query($connec, "UPDATE piutang SET
                            nama_piutang = '$nama_piutang',
                            nama_pengutang = '$nama_pengutang',
                            nominal_piutang = '$nominal_piutang',
                            tanggal_piutang = $tanggal_piutang
                            WHERE id = $id;");

    if ($query) { ?>

        <script>
            alert('data berhasil diubah');
            document.location.href = "<?= BASE_URL; ?>/piutang";
        </script>

<?php
    }
}

include 'pages/piutang/_form-piutang.php';
?>