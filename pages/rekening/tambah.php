<?php

// Jika terdapat method POST[simpan] 
if (isset($_POST['tambah'])) {

    // Instance Variabel form
    $namaBank = htmlspecialchars($_POST['nama_bank']);
    $noRekening = htmlspecialchars($_POST['no_rekening']);
    $namaPemilik = htmlspecialchars($_POST['pemilik_rekening']);
    $saldoRekening = htmlspecialchars($_POST['saldo_rekening']);

    // Function Query ke table rekening
    $query = mysqli_query($connec, "INSERT INTO rekening VALUES ('','$namaBank','$noRekening','$namaPemilik','$saldoRekening');");

    if ($query) { ?>

        <script>
            alert('data berhasil ditambah');
            document.location.href = "<?= BASE_URL; ?>/rekening";
        </script>

<?php
    }
}

include 'pages/rekening/_form-rekening.php';
?>