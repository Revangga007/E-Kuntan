<?php

$id = $_GET['result'];

// Jika terdapat method POST[simpan] 
if (isset($_POST['ubah'])) {

    // Instance Variabel form
    $nama_hutang = htmlspecialchars($_POST['nama_hutang']);
    $pemberi_hutang = htmlspecialchars($_POST['pemberi_hutang']);
    $nominal_hutang = htmlspecialchars($_POST['nominal_hutang']);
    $tanggal_hutang = htmlspecialchars($_POST['tanggal_hutang']);

    // Function Query ke table hutang
    $query = mysqli_query($connec, "UPDATE hutang SET
                            nama_hutang = '$nama_hutang',
                            pemberi_hutang = '$pemberi_hutang',
                            nominal_hutang = '$nominal_hutang',
                            tanggal_hutang = $tanggal_hutang
                            WHERE id = $id;");

    if ($query) { ?>

        <script>
            alert('data berhasil diubah');
            document.location.href = "<?= BASE_URL; ?>/hutang";
        </script>

<?php
    }
}

include 'pages/hutang/_form-hutang.php';
?>