                     <div class="row">
                         <div class="col">
                             <table class="table table-hover">
                                 <thead>
                                     <tr>
                                         <th scope="col">No</th>
                                         <th scope="col">Nama Kategori</th>
                                         <th scope="col">Aksi</th>
                                     </tr>
                                 </thead>
                                 <tbody>
                                     <?php
                                        $no = 1;

                                        $query = mysqli_query($connec, 'SELECT * FROM kategori ORDER BY id DESC');

                                        include 'pages/kategori/cari.php';

                                        while ($kategori = mysqli_fetch_assoc($query)) {
                                            ?>
                                         <tr>
                                             <th scope="row"><?= $no++; ?></th>
                                             <td><?= $kategori['nama_kategori']; ?></td>
                                             <td>
                                                 <a href="<?= BASE_URL; ?>/kategori/ubah/<?= $kategori['id']; ?>" class="btn btn-sm btn-warning">Ubah</a>
                                                 <a href="<?= BASE_URL; ?>/kategori/hapus/<?= $kategori['id']; ?>" class="btn btn-sm btn-danger" onclick="return confirm('yakin?');">Hapus</a>
                                             </td>
                                         </tr>
                                     <?php } ?>
                                 </tbody>
                             </table>
                         </div>
                     </div>