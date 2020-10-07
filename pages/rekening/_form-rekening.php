<h1 class="h3 mb-4 text-gray-800">Tambah Rekening</h1>

<div class="row d-flex justify-content-center">
    <div class="col-10">
        <div class="card mb-4">
            <div class="card-body">
                <?php if (isset($id)) {
                    $query = mysqli_query($connec, "SELECT * FROM rekening WHERE id = '$id'");
                    $rekening = mysqli_fetch_assoc($query);
                    ?>
                    <form method="POST" action="">
                        <div class="form-group">
                            <label for="nama-bank">Nama Bank</label>
                            <input type="text" name="nama_bank" id="nama-bank" class="form-control" placeholder="Masukan Nama Bank" value="<?= $rekening['nama_bank']; ?>" required>
                        </div>
                        <div class="form-group">
                            <label for="no-rekening">No. Rekening</label>
                            <input type="text" name="no_rekening" id="no-rekening" class="form-control" placeholder="Masukkan Nomor Rekening" value="<?= $rekening['no_rekening']; ?>" required>
                        </div>
                        <div class="form-group">
                            <label for="nama-pemilik">Nama Pemilik</label>
                            <input type="text" name="pemilik_rekening" id="nama-pemilik" class="form-control" placeholder="Masukkan Nama Pemilik" value="<?= $rekening['pemilik_rekening']; ?>" required>
                        </div>
                        <div class="form-group">
                            <label for="saldo-rekening">Saldo Rekening</label>
                            <input type="text" name="saldo_rekening" id="saldo_rekening" class="form-control" placeholder="Masukkan Saldo Rekening" value="<?= $rekening['saldo_rekening']; ?>" required>
                        </div>
                        <div class="mt-5">
                            <button type="submit" class="btn btn-success tombol-simpan" name="ubah">Simpan</button>
                            <a href="<?= BASE_URL; ?>/rekening" class="btn btn-danger">Batal</a>
                        </div>
                    </form>
                <?php } else { ?>
                    <form method="POST" action="">
                        <div class="form-group">
                            <label for="nama-bank">Nama Bank</label>
                            <input type="text" name="nama_bank" id="nama-bank" class="form-control" placeholder="Masukan Nama Bank" required>
                        </div>
                        <div class="form-group">
                            <label for="no-rekening">No. Rekening</label>
                            <input type="text" name="no_rekening" id="no-rekening" class="form-control" placeholder="Masukkan Nomor Rekening" required>
                        </div>
                        <div class="form-group">
                            <label for="nama-pemilik">Nama Pemilik</label>
                            <input type="text" name="pemilik_rekening" id="pemilik-rekening" class="form-control" placeholder="Masukkan Nama Pemilik" required>
                        </div>
                        <div class="form-group">
                            <label for="saldo-rekening">Saldo Rekening</label>
                            <input type="text" name="saldo_rekening" id="saldo-rekening" class="form-control" placeholder="Masukkan Saldo Rekening" required>
                        </div>
                        <div class="mt-5">
                            <button type="submit" class="btn btn-success tombol-simpan" name="tambah">Simpan</button>
                            <a href="<?= BASE_URL; ?>/rekening" class="btn btn-danger">Batal</a>
                        </div>
                    </form>
                <?php } ?>
            </div>
        </div>
    </div>
</div>