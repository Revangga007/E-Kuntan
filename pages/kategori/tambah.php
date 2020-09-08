<?php

// Jika terdapat method POST[simpan] 
if (isset($_POST['tambah'])) {

    // Instance Variabel form
    $namaKategori = htmlspecialchars($_POST['nama_kategori']);

    // Function Query ke table rekening
    $query = mysqli_query($connec, "INSERT INTO kategori VALUES ('','$namaKategori');");

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