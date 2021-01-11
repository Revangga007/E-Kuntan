<?php if (isset($id)) { ?>
    <h1 class="h3 mb-4 text-gray-800">Edit transaksi</h1>
<?php } else { ?>
    <h1 class="h3 mb-4 text-gray-800">Tambah transaksi</h1>
<?php } ?>

<div class="row d-flex justify-content-center">
    <div class="col-10">
        <div class="card mb-4">
            <div class="card-body">
                <?php if (isset($id)) {
                    $query = mysqli_query($connec, "SELECT transaksi.id, transaksi.tanggal,transaksi.id_kategori, transaksi.nominal, jenis_transaksi.nama_jenis_transaksi 
                                                    FROM transaksi 
                                                    INNER JOIN jenis_transaksi ON transaksi.id_jenis_transaksi = jenis_transaksi.id
                                                    WHERE transaksi.id = '$id'");
                    $transaksi = mysqli_fetch_assoc($query);
                ?>
                    <form method="POST" action="">
                        <div class="form-group">
                            <label for="nama-transaksi">Nama transaksi</label>
                            <input type="text" name="nama_transaksi" id="nama-transaksi" class="form-control" placeholder="Masukan Nama transaksi" value="<?= $transaksi['nama_transaksi']; ?>" required>
                        </div>
                        <?php $jnsTransaksi = mysqli_query($connec, "SELECT * FROM jenis_transaksi"); ?>
                        <div class="form-group">
                            <label for="jenis-transaksi">Jenis Transaksi</label>
                            <select class="form-control" id="jenis-transaksi" name="jenis_transaksi">
                                <?php
                                while ($jenis = mysqli_fetch_assoc($jnsTransaksi)) {
                                    if ($jenis["id"] == $transaksi["id_jenis_transaksi"]) { ?>
                                        <option value="<?= $jenis["id"]; ?>" selected><?= $jenis["nama_jenis_transaksi"]; ?></option>
                                    <?php } else { ?>
                                        <option value="<?= $jenis["id"]; ?>"><?= $jenis["nama_jenis_transaksi"]; ?></option>
                                <?php }
                                } ?>
                            </select>
                        </div>
                        <div class="mt-5">
                            <button type="submit" class="btn btn-success tombol-simpan" name="ubah">Simpan</button>
                            <a href="<?= BASE_URL; ?>/transaksi" class="btn btn-danger">Batal</a>
                        </div>
                    </form>
                <?php } else { ?>
                    <form method="POST" action="">
                        <div class="form-group">
                            <label for="nama-transaksi">Nama transaksi</label>
                            <input type="text" name="nama_transaksi" id="nama-transaksi" class="form-control" placeholder="Masukan Nama transaksi" required>
                        </div>
                        <?php $jnsTransaksi = mysqli_query($connec, "SELECT * FROM jenis_transaksi"); ?>
                        <div class="form-group">
                            <label for="jenis-transaksi">Jenis Transaksi</label>
                            <select class="form-control" id="jenis-transaksi" name="jenis_transaksi">
                                <?php while ($jenis = mysqli_fetch_assoc($jnsTransaksi)) { ?>
                                    <option value="<?= $jenis["id"] ?>"><?= $jenis["nama_jenis_transaksi"]; ?></option>
                                <?php } ?>
                            </select>
                        </div>
                        <div class="mt-5">
                            <button type="submit" class="btn btn-success tombol-simpan" name="tambah">Simpan</button>
                            <a href="<?= BASE_URL; ?>/transaksi" class="btn btn-danger">Batal</a>
                        </div>
                    </form>
                <?php } ?>
            </div>
        </div>
    </div>
</div>