<?php

$id = $_GET['result'];

// Jika terdapat method POST[simpan] 
if (isset($_POST['ubah'])) {

    // Instance Variabel form
    $namaBank = htmlspecialchars($_POST['nama_bank']);
    $noRekening = htmlspecialchars($_POST['no_rekening']);
    $pemilikRekening = htmlspecialchars($_POST['pemilik_rekening']);
    $saldoRekening = htmlspecialchars($_POST['saldo_rekening']);

    // Function Query ke table rekening
    $query = mysqli_query($connec, "UPDATE rekening SET
                            nama_bank = '$namaBank',
                            no_rekening = '$noRekening',
                            pemilik_rekening = '$pemilikRekening',
                            saldo_rekening = '$saldoRekening'
                            WHERE id = $id");

    if ($query) { ?>

        <script>
            alert('data berhasil diubah');
            document.location.href = "<?= BASE_URL; ?>/rekening";
        </script>

<?php
    }
}

include 'pages/rekening/_form-rekening.php';
?>