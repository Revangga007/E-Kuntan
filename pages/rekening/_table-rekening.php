<h1 class="h3 mb-4 text-gray-800">Data Rekening</h1>

<div class="row">
    <div class="col">
        <div class="card mb-4">
            <div class="card-body">
                <div class="row mb-3">
                    <div class="col-6">
                        <a href="<?= BASE_URL; ?>/rekening/tambah" class="btn btn-sm btn-primary">Tambah</a>
                    </div>
                    <div class="col-auto ml-auto">
                        <form class="form-inline w-100 navbar-search">
                            <div class="input-group">
                                <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2">
                                <div class="input-group-append">
                                    <button class="btn btn-primary" type="button">
                                        <i class="fas fa-search fa-sm"></i>
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <table class="table table-hover">
                            <thead>
                                <tr>
                                    <th scope="col">No</th>
                                    <th scope="col">Nama Bank</th>
                                    <th scope="col">Nomor Rekening</th>
                                    <th scope="col">Pemilik Rekening</th>
                                    <th scope="col">Saldo Rekening</th>
                                    <th scope="col">Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $no = 1;

                                $query = mysqli_query($connec, 'SELECT * FROM rekening');

                                while ($rekening = mysqli_fetch_assoc($query)) {
                                    ?>
                                    <tr>
                                        <th scope="row"><?= $no++; ?></th>
                                        <td><?= $rekening['nama_bank']; ?></td>
                                        <td><?= $rekening['no_rekening']; ?></td>
                                        <td><?= $rekening['pemilik_rekening']; ?></td>
                                        <td><?= rupiah($rekening['saldo_rekening']); ?></td>
                                        <td>
                                            <a href="<?= BASE_URL; ?>/rekening/ubah/<?= $rekening['id']; ?>" class="btn btn-sm btn-warning">Ubah</a>
                                            <a href="<?= BASE_URL; ?>/rekening/hapus/<?= $rekening['id']; ?>" class="btn btn-sm btn-danger" onclick="return confirm('yakin?');">Hapus</a>
                                        </td>
                                    </tr>
                                <?php } ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>