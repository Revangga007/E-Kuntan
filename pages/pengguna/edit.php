<?php

$id = $_GET['result'];

// Jika terdapat method POST[simpan] 
if (isset($_POST['ubah'])) {

    // Instance Variabel form
    $namaPengguna = htmlspecialchars($_POST['nama_pengguna']);
    $username = strtolower(stripcslashes($_POST['username']));
    if (!empty($_POST['password'])) {
        $password = mysqli_real_escape_string($connec, $_POST['password']);
        $password = password_hash($password, PASSWORD_DEFAULT);
    }
    $status =  htmlspecialchars($_POST['status_pengguna']);

    if (!empty($_POST['password'])) {
        $query = mysqli_query($connec, "UPDATE akun SET
                            nama_pengguna = '$namaPengguna',
                            username = '$username',
                            password = '$password',
                            status_pengguna = '$status'
                            WHERE id = $id");
    } else {
        $query = mysqli_query($connec, "UPDATE akun SET
                            nama_pengguna = '$namaPengguna',
                            username = '$username',
                            status_pengguna = '$status'
                            WHERE id = $id");
    }

    if ($query) { ?>

        <script>
            alert('data berhasil diubah');
            document.location.href = "<?= BASE_URL; ?>/pengguna";
        </script>

<?php
    }
}

include 'pages/pengguna/_form-pengguna.php';
?>