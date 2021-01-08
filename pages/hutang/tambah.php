<?php

// Jika terdapat method POST[simpan] 
if (isset($_POST['tambah'])) {

    // Instance Variabel form
    $nama_hutang = htmlspecialchars($_POST['nama_hutang']);
    $pemberi_hutang = htmlspecialchars($_POST['pemberi_hutang']);
    $nominal_hutang = htmlspecialchars($_POST['nominal_hutang']);
    $tanggal_hutang = htmlspecialchars($_POST['tanggal_hutang']);

    // Function Query ke table rekening
    $query = mysqli_query($connec, "INSERT INTO hutang VALUES ('','$nama_hutang','$pemberi_hutang','$nominal_hutang','$tanggal_hutang');");

    if ($query) { ?>

        <script>
            alert('data berhasil ditambah');
            document.location.href = "<?= BASE_URL; ?>/hutang";
        </script>

<?php
    }
}

include 'pages/hutang/_form-hutang.php';
?>