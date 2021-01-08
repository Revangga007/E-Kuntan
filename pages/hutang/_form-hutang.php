<?php if (isset($id)) { ?>
    <h1 class="h3 mb-4 text-gray-800">Edit Hutang</h1>
<?php } else { ?>
    <h1 class="h3 mb-4 text-gray-800">Tambah Hutang</h1>
<?php } ?>

<div class="row d-flex justify-content-center">
    <div class="col-10">
        <div class="card mb-4">
            <div class="card-body">
                <?php if (isset($id)) {
                    $query = mysqli_query($connec, "SELECT * FROM hutang WHERE id = '$id'");
                    $hutang = mysqli_fetch_assoc($query);
                ?>
                    <form method="POST" action="">
                        <div class="form-group">
                            <label for="nama-hutang">Nama Hutang</label>
                            <input type="text" name="nama_hutang" id="nama-hutang" class="form-control" placeholder="Masukan Nama Hutang" value="<?= $hutang['nama_hutang']; ?>" required>
                        </div>
                        <div class="form-group">
                            <label for="pemberi-hutang">Pemberi Hutang</label>
                            <input type="text" name="pemberi_hutang" id="pemberi-hutang" class="form-control" placeholder="Masukan Nama Pemberi Hutang" value="<?= $hutang['pemberi_hutang']; ?>" required>
                        </div>
                        <div class="form-group">
                            <label for="nominal-hutang">Nominal Hutang</label>
                            <input type="text" name="nominal_hutang" id="nominal-hutang" class="form-control" placeholder="Masukan Nominal Hutang" value="<?= $hutang['nominal_hutang']; ?>" required>
                        </div>
                        <div class="form-group">
                            <label for="tanggal-hutang">Tanggal Hutang</label>
                            <input type="date" name="tanggal_hutang" id="tanggal-hutang" class="form-control" placeholder="Masukan Tanggal Hutang" value="<?= $hutang['tanggal_hutang']; ?>" required>
                        </div>
                        <div class="mt-5">
                            <button type="submit" class="btn btn-success tombol-simpan" name="ubah">Simpan</button>
                            <a href="<?= BASE_URL; ?>/hutang" class="btn btn-danger">Batal</a>
                        </div>
                    </form>
                <?php } else { ?>
                    <form method="POST" action="">
                        <div class="form-group">
                            <label for="nama-hutang">Nama Hutang</label>
                            <input type="text" name="nama_hutang" id="nama-hutang" class="form-control" placeholder="Masukan Nama Hutang" required>
                        </div>
                        <div class="form-group">
                            <label for="pemberi-hutang">Pemberi Hutang</label>
                            <input type="text" name="pemberi_hutang" id="pemberi-hutang" class="form-control" placeholder="Masukan Nama Pemberi Hutang" required>
                        </div>
                        <div class="form-group">
                            <label for="nominal-hutang">Nominal Hutang</label>
                            <input type="text" name="nominal_hutang" id="nominal-hutang" class="form-control" placeholder="Masukan Nominal Hutang" required>
                        </div>
                        <div class="form-group">
                            <label for="tanggal-hutang">Tanggal Hutang</label>
                            <input type="date" name="tanggal_hutang" id="tanggal-hutang" class="form-control" placeholder="Masukan Tanggal Hutang" required>
                        </div>
                        <?php $jnsTransaksi = mysqli_query($connec, "SELECT * FROM jenis_transaksi"); ?>
                        <div class="mt-5">
                            <button type="submit" class="btn btn-success tombol-simpan" name="tambah">Simpan</button>
                            <a href="<?= BASE_URL; ?>/hutang" class="btn btn-danger">Batal</a>
                        </div>
                    </form>
                <?php } ?>
            </div>
        </div>
    </div>
</div>