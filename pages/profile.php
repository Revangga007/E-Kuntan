<?php

$id = $_GET['result'];

$query = mysqli_query($connec, "SELECT * FROM akun WHERE id = '$id'");
$pengguna = mysqli_fetch_assoc($query);


?>
<a href="<?= BASE_URL; ?>/dashboard" class="btn btn-danger btn-sm">Kembali</a>
<div class="row d-flex justify-content-center">
    <div class="col-6">
        <div class="card mb-4">
            <div class="card-header">
                <h3>Profil</h3>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col text-center">
                        <img class="img-profile rounded-circle text-center mt-3" src="<?= BASE_URL; ?>/assets/img/<?= $pengguna['foto']; ?>">
                        <h4 class="mt-3 card-title"><?= $pengguna['nama_pengguna']; ?></h4>
                        <ul class="list-group list-group-flush mt-4">
                            <li class="list-group-item">Username : <?= $pengguna['username']; ?></li>
                            <li class="list-group-item">Status : <?= $pengguna['status_pengguna'] ?></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>