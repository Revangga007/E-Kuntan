<?php

$id = $_GET['result'];

if (isset($_POST['ubah'])) {
    $password = mysqli_real_escape_string($connec, $_POST['password']);
    $password = password_hash($password, PASSWORD_DEFAULT);

    $query = mysqli_query($connec, "UPDATE akun SET
                            password = '$password'
                            WHERE id = $id");
?>
    <script>
        alert('Password berhasil dihapus');
        document.location.href = "<?= BASE_URL ?>/dashboard";
    </script>

<?php
}
?>

<a href="<?= BASE_URL; ?>/dashboard" class="btn btn-danger btn-sm mb-4">Kembali</a>
<div class="row d-flex justify-content-center">
    <div class="col-6">
        <div class="card mb-4">
            <div class="card-body">
                <form action="" method="post">
                    <div class="form-group">
                        <div class="row">
                            <div class="col-10">
                                <input type="password" name="password" id="password" class="form-control" placeholder="Massukan Password Anda">
                            </div>
                            <div class="col-2">
                                <button type="submit" class="btn btn-success btn-sm tombol-simpan d-inline" name="ubah">Simpan</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>