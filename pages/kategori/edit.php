<?php

$id = $_GET['result'];

// Jika terdapat method POST[simpan] 
if (isset($_POST['ubah'])) {

    // Instance Variabel form
    $namaKategori = htmlspecialchars($_POST['nama_kategori']);

    // Function Query ke table rekening
    $query = mysqli_query($connec, "UPDATE kategori SET
                            nama_kategori = '$namaKategori'
                            WHERE id = $id");

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