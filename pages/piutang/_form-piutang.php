<?php if (isset($id)) { ?>
    <h1 class="h3 mb-4 text-gray-800">Edit piutang</h1>
<?php } else { ?>
    <h1 class="h3 mb-4 text-gray-800">Tambah piutang</h1>
<?php } ?>

<div class="row d-flex justify-content-center">
    <div class="col-10">
        <div class="card mb-4">
            <div class="card-body">
                <?php if (isset($id)) {
                    $query = mysqli_query($connec, "SELECT * FROM piutang WHERE id = '$id'");
                    $piutang = mysqli_fetch_assoc($query);
                ?>
                    <form method="POST" action="">
                        <div class="form-group">
                            <label for="nama-piutang">Nama piutang</label>
                            <input type="text" name="nama_piutang" id="nama-piutang" class="form-control" placeholder="Masukan Nama piutang" value="<?= $piutang['nama_piutang']; ?>" required>
                        </div>
                        <div class="form-group">
                            <label for="nama-pengutang">Nama Pengutang</label>
                            <input type="text" name="nama_pengutang" id="nama-pengutang" class="form-control" placeholder="Masukan Nama Pengutang" value="<?= $piutang['nama_pengutang']; ?>" required>
                        </div>
                        <div class="form-group">
                            <label for="nominal-piutang">Nominal piutang</label>
                            <input type="text" name="nominal_piutang" id="nominal-piutang" class="form-control" placeholder="Masukan Nominal piutang" value="<?= $piutang['nominal_piutang']; ?>" required>
                        </div>
                        <div class="form-group">
                            <label for="tanggal-piutang">Tanggal piutang</label>
                            <input type="date" name="tanggal_piutang" id="tanggal-piutang" class="form-control" placeholder="Masukan Tanggal piutang" value="<?= $piutang['tanggal_piutang']; ?>" required>
                        </div>
                        <div class="mt-5">
                            <button type="submit" class="btn btn-success tombol-simpan" name="ubah">Simpan</button>
                            <a href="<?= BASE_URL; ?>/piutang" class="btn btn-danger">Batal</a>
                        </div>
                    </form>
                <?php } else { ?>
                    <form method="POST" action="">
                        <div class="form-group">
                            <label for="nama-piutang">Nama piutang</label>
                            <input type="text" name="nama_piutang" id="nama-piutang" class="form-control" placeholder="Masukan Nama piutang" required>
                        </div>
                        <div class="form-group">
                            <label for="nama-pengutang">Pemberi piutang</label>
                            <input type="text" name="nama_pengutang" id="nama-pengutang" class="form-control" placeholder="Masukan Nama Pengutang" required>
                        </div>
                        <div class="form-group">
                            <label for="nominal-piutang">Nominal piutang</label>
                            <input type="text" name="nominal_piutang" id="nominal-piutang" class="form-control" placeholder="Masukan Nominal piutang" required>
                        </div>
                        <div class="form-group">
                            <label for="tanggal-piutang">Tanggal piutang</label>
                            <input type="date" name="tanggal_piutang" id="tanggal-piutang" class="form-control" placeholder="Masukan Tanggal piutang" required>
                        </div>
                        <div class="mt-5">
                            <button type="submit" class="btn btn-success tombol-simpan" name="tambah">Simpan</button>
                            <a href="<?= BASE_URL; ?>/piutang" class="btn btn-danger">Batal</a>
                        </div>
                    </form>
                <?php } ?>
            </div>
        </div>
    </div>
</div>