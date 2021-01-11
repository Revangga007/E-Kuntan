<?php if (isset($id)) { ?>
    <h1 class="h3 mb-4 text-gray-800">Edit Transaksi</h1>
<?php } else { ?>
    <h1 class="h3 mb-4 text-gray-800">Tambah Transaksi</h1>
<?php } ?>

<div class="row d-flex justify-content-center">
    <div class="col-10">
        <div class="card mb-4">
            <div class="card-body">
                <?php if (isset($id)) {
                    $query = mysqli_query($connec, "SELECT transaksi.*,kategori.*
                                                    FROM transaksi
                                                    INNER JOIN kategori ON transaksi.id_kategori = kategori.id
                                                    WHERE transaksi.id_trx = '$id'");
                    $transaksi = mysqli_fetch_assoc($query);
                ?>
                    <form method="POST" action="">
                        <div class="form-group">
                            <label for="tanggal">Tanggal transaksi</label>
                            <input type="date" name="tanggal" id="tanggal" class="form-control" placeholder="Masukan Tanggal transaksi" value="<?= $transaksi['tanggal']; ?>" required>
                        </div>
                        <?php $kategory = mysqli_query($connec, "SELECT * FROM kategori"); ?>
                        <div class="form-group">
                            <label for="kategori">Kategori Transaksi</label>
                            <select class="form-control" id="kategori" name="kategori">
                                <?php
                                while ($kategori = mysqli_fetch_assoc($kategory)) {
                                    if ($kategori["id"] == $transaksi["id_kategori"]) { ?>
                                        <option value="<?= $kategori["id"]; ?>" selected><?= $kategori["nama_kategori"]; ?></option>
                                    <?php } else { ?>
                                        <option value="<?= $kategori["id"]; ?>"><?= $kategori["nama_kategori"]; ?></option>
                                <?php }
                                } ?>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="tanggal">Keterangan transaksi</label>
                            <textarea name="keterangan" id="keterangan" class="form-control"><?= $transaksi['keterangan']; ?></textarea>
                        </div>
                        <div class="form-group">
                            <label for="nominal">Nominal transaksi</label>
                            <input type="number" name="nominal" id="nominal" class="form-control" placeholder="Masukan Nominal Transaksi" value="<?= $transaksi['nominal']; ?>" required>
                        </div>
                        <div class="mt-5">
                            <button type="submit" class="btn btn-success tombol-simpan" name="ubah">Simpan</button>
                            <a href="<?= BASE_URL; ?>/transaksi" class="btn btn-danger">Batal</a>
                        </div>
                    </form>
                <?php } else { ?>
                    <form method="POST" action="">
                        <div class="form-group">
                            <label for="tanggal">Tanggal transaksi</label>
                            <input type="date" name="tanggal" id="tanggal" class="form-control" placeholder="Masukan Tanggal transaksi" required>
                        </div>
                        <?php $kategory = mysqli_query($connec, "SELECT * FROM kategori"); ?>
                        <div class="form-group">
                            <label for="kategori">Kategori Transaksi</label>
                            <select class="form-control" id="kategori" name="kategori">
                                <?php
                                while ($kategori = mysqli_fetch_assoc($kategory)) {
                                ?>
                                    <option value="<?= $kategori["id"]; ?>"><?= $kategori["nama_kategori"]; ?></option>
                                <?php } ?>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="keterangan">Keterangan transaksi</label>
                            <textarea name="keterangan" id="keterangan" cols="30" rows="10"></textarea>
                        </div>
                        <div class="form-group">
                            <label for="nominal">Nominal transaksi</label>
                            <input type="number" name="nominal" id="nominal" class="form-control" placeholder="Masukan Nominal Transaksi" required>
                        </div>
                        <div class="mt-5">
                            <button type="submit" class="btn btn-success tombol-simpan" name="ubah">Simpan</button>
                            <a href="<?= BASE_URL; ?>/transaksi" class="btn btn-danger">Batal</a>
                        </div>
                    </form>
                <?php } ?>
            </div>
        </div>
    </div>
</div>