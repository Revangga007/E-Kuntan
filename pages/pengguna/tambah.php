<?php
include_once 'pages/pengguna/_form-pengguna.php';

// Jika terdapat method POST[simpan] 
if (isset($_POST['tambah'])) {

    // Instance Variabel form
    $namaPengguna = htmlspecialchars($_POST['nama_pengguna']);
    $username = strtolower(stripcslashes($_POST['username']));
    $password = mysqli_real_escape_string($connec, $_POST['password']);
    $password2 = mysqli_real_escape_string($connec, $_POST['password2']);
    $status =  htmlspecialchars($_POST['status_pengguna']);
    $foto = 'user.jpg';

    $cekUser = mysqli_query($connec, "SELECT username from akun WHERE username = '$username'");
    if (mysqli_fetch_assoc($cekUser)) {
        echo '<script>alert("Username sudah terdaftar");
        window.location.reload;
        </script>';
        return false;
    }

    // Cek konfirmasi password
    if ($password != $password2) {
        echo '<script>alert("Konfirmasi Password tidak sesuai");</script>';
        return false;
    }

    // Enkripsi Password
    $password = password_hash($password, PASSWORD_DEFAULT);

    // Function Query ke table rekening
    $query = mysqli_query($connec, "INSERT INTO akun VALUES ('','$namaPengguna','$username','$password','$status','$foto');");

    if ($query) { ?>

        <script>
            alert('data berhasil ditambah');
            document.location.href = "<?= BASE_URL; ?>/pengguna";
        </script>

<?php
    } else {
        echo mysqli_error($connec);
    }
}

?>