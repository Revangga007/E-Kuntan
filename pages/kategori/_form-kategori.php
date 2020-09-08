<h1 class="h3 mb-4 text-gray-800">Tambah Kategori</h1>

<div class="row d-flex justify-content-center">
    <div class="col-10">
        <div class="card mb-4">
            <div class="card-body">
                <?php if (isset($id)) {
                    $query = mysqli_query($connec, "SELECT * FROM kategori WHERE id = '$id'");
                    $rekening = mysqli_fetch_assoc($query);
                    ?>
                    <form method="POST" action="">
                        <div class="form-group">
                            <label for="nama-kategori">Nama Kategori</label>
                            <input type="text" name="nama_kategori" id="nama-kategori" class="form-control" placeholder="Masukan Kategori" value="<?= $rekening['nama_kategori']; ?>" required>
                        </div>
                        <div class="mt-5">
                            <button type="submit" class="btn btn-success" name="ubah">Simpan</button>
                            <a href="<?= BASE_URL; ?>/kategori" class="btn btn-danger">Batal</a>
                        </div>
                    </form>
                <?php } else { ?>
                    <form method="POST" action="">
                        <div class="form-group">
                            <label for="nama-kategori">Nama Kategori</label>
                            <input type="text" name="nama_kategori" id="nama-kategori" class="form-control" placeholder="Masukan Kategori" required>
                        </div>
                        <div class="mt-5">
                            <button type="submit" class="btn btn-success" name="tambah">Simpan</button>
                            <a href="<?= BASE_URL; ?>/kategori" class="btn btn-danger">Batal</a>
                        </div>
                    </form>
                <?php } ?>
            </div>
        </div>
    </div>
</div>