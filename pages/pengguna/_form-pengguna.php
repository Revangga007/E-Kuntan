<h1 class="h3 mb-4 text-gray-800">Tambah pengguna</h1>

<div class="row d-flex justify-content-center">
    <div class="col-10">
        <div class="card mb-4">
            <div class="card-body">
                <?php if (isset($id)) {
                    $query = mysqli_query($connec, "SELECT * FROM pengguna WHERE id = '$id'");
                    $pengguna = mysqli_fetch_assoc($query);
                    ?>
                    <form method="POST" action="">
                        <div class="form-group">
                            <label for="nama-pengguna">Nama Pengguna</label>
                            <input type="text" name="nama_pengguna" id="nama-pengguna" class="form-control" placeholder="Masukan Nama Pengguna" value="<?= $pengguna['nama_pengguna']; ?>" required>
                        </div>
                        <div class="form-group">
                            <label for="username">Username</label>
                            <input type="text" name="username" id="username" class="form-control" placeholder="Masukkan Username Pengguna" value="<?= $pengguna['username']; ?>" required>
                        </div>
                        <div class="form-group">
                            <label for="password">Password</label>
                            <input type="password" name="password" id="password" class="form-control" placeholder="Masukkan Password Pengguna" value="<?= $pengguna['password']; ?>" disabled>
                        </div>
                        <div class="form-group">
                            <label for="saldo-pengguna">Status Pengguna</label>
                            <select class="form-control" id="status-pengguna" name="status_pengguna">
                                <option value="Admin">Admin</option>
                                <option value="Karyawan">Karyawan</option>
                            </select>
                        </div>
                        <div class="mt-5">
                            <button type="submit" class="btn btn-success tombol-simpan" name="ubah">Simpan</button>
                            <a href="<?= BASE_URL; ?>/pengguna" class="btn btn-danger">Batal</a>
                        </div>
                    </form>
                <?php } else { ?>
                    <form method="POST" action="">
                        <div class="form-group">
                            <label for="nama-pengguna">Nama Pengguna</label>
                            <input type="text" name="nama_pengguna" id="nama-pengguna" class="form-control" placeholder="Masukan Nama Pengguna" required>
                        </div>
                        <div class="form-group">
                            <label for="username">Username</label>
                            <input type="text" name="username" id="username" class="form-control" placeholder="Masukkan Username Pengguna" required>
                        </div>
                        <div class="form-group">
                            <label for="password">Password</label>
                            <input type="password" name="password" id="password" class="form-control" placeholder="Masukkan Password Pengguna" required>
                        </div>
                        <div class="form-group">
                            <label for="password2">Konfirmasi Password</label>
                            <input type="password" name="password2" id="password2" class="form-control" placeholder="Masukkan Konfirmasi Password" required>
                        </div>
                        <div class="form-group">
                            <label for="saldo-pengguna">Status Pengguna</label>
                            <select class="form-control col-4" id="status-pengguna" name="status_pengguna">
                                <option value="Admin">Admin</option>
                                <option value="Karyawan">Karyawan</option>
                            </select>
                        </div>
                        <!-- <div class="form-group">
                            <label for="foto">Foto</label>
                            <input type="file" class="form-control-file form-contro" id="foto" name="foto">
                        </div> -->
                        <div class="mt-5">
                            <button type="submit" class="btn btn-success tombol-simpan" name="tambah">Simpan</button>
                            <a href="<?= BASE_URL; ?>/pengguna" class="btn btn-danger">Batal</a>
                        </div>
                    </form>
                <?php } ?>
            </div>
        </div>
    </div>
</div>