                     <div class="row mt-4">
                         <div class="col">
                             <table class="table table-hover">
                                 <thead>
                                     <tr>
                                         <th scope="col" rowspan="2">No</th>
                                         <th scope="col" rowspan="2">Tanggal</th>
                                         <th scope="col" rowspan="2">Kategori</th>
                                         <th scope="col" rowspan="2" colspan="2">Keterangan</th>
                                         <th scope="col" colspan="2" class="text-center">Jenis</th>
                                         <th scope="col" rowspan="2">Aksi</th>

                                     </tr>
                                     <tr>
                                         <th>Pemasukan</th>
                                         <th>Pengeluaran</th>
                                     </tr>
                                 </thead>
                                 <?php
                                    // Jumlah data per baris
                                    $batas = 5;

                                    // Untuk mengecek & mengetahui url halaman
                                    $halaman = isset($_GET['page']) ? (int) $_GET['page'] : 1;

                                    // Data awal di database
                                    $dataAwal = ($halaman > 1) ? ($halaman * $batas) - $batas : 0;

                                    // Membuat fungsi selanjutnya & sebelumnya
                                    $selanjutnya = $halaman + 1;
                                    $sebelumnya = $halaman - 1;

                                    // Untuk Meminta informasi baris ke database
                                    $queryBaris = mysqli_query($connec, 'SELECT transaksi.*,kategori.*,jenis_transaksi.*
                                                                        FROM transaksi
                                                                        INNER JOIN kategori ON transaksi.id_kategori = kategori.id
                                                                        INNER JOIN jenis_transaksi ON kategori.id_jenis_transaksi = jenis_transaksi.id
                                                                        ');

                                    // Mendapatkan jumlah baris
                                    $totalBaris = mysqli_num_rows($queryBaris);

                                    // Membuat total halaman
                                    $totalHalaman = ceil($totalBaris / $batas);

                                    $queryData = mysqli_query($connec,  "SELECT transaksi.*,kategori.*,jenis_transaksi.*
                                                                        FROM transaksi
                                                                        INNER JOIN kategori ON transaksi.id_kategori = kategori.id
                                                                        INNER JOIN jenis_transaksi ON kategori.id_jenis_transaksi = jenis_transaksi.id
                                                                        LIMIT $dataAwal, $batas");

                                    include 'pages/transaksi/cari.php';

                                    $no = $dataAwal + 1;

                                    while ($transaksi = mysqli_fetch_assoc($queryData)) {
                                    ?>
                                     <tbody>
                                         <tr>
                                             <th scope="row"><?= $no++; ?></th>
                                             <td><?= $transaksi['tanggal']; ?></td>
                                             <td><?= $transaksi['nama_kategori']; ?></td>
                                             <td width="300px" colspan="2"><?= $transaksi['keterangan']; ?></td>
                                             <td><?= ($transaksi['id_jenis_transaksi'] == 1) ? rupiah($transaksi['nominal']) : ''; ?></td>
                                             <td><?= ($transaksi['id_jenis_transaksi'] == 1) ? '' : rupiah($transaksi['nominal']); ?></td>
                                             <td>
                                                 <a href="<?= BASE_URL; ?>/transaksi/ubah/<?= $transaksi['id_trx']; ?>" class="btn btn-sm btn-warning tombol-edit">Ubah</a>
                                                 <a href="<?= BASE_URL; ?>/transaksi/hapus/<?= $transaksi['id_trx']; ?>" class="btn btn-sm btn-danger tombol-hapus">Hapus</a>
                                             </td>
                                         </tr>
                                     <?php } ?>
                                     </tbody>
                             </table>

                             <!-- Pagination jika tidak melakukan pencarian -->
                             <?php if (!isset($_GET['keyword'])) { ?>
                                 <nav class="mt-5">
                                     <ul class="pagination pagination-sm justify-content-end">
                                         <?php if ($halaman == 1) { ?>
                                             <li class="page-item disabled">
                                                 <a class="page-link" href="<?= BASE_URL; ?>/transaksi/<?= $sebelumnya; ?>" tabindex="-1" aria-disabled="true">Previous</a>
                                             </li>
                                         <?php } else { ?>
                                             <li class="page-item">
                                                 <a class="page-link" href="<?= BASE_URL; ?>/transaksi/<?= $sebelumnya; ?>" tabindex="-1" aria-disabled="true">Previous</a>
                                             </li>
                                         <?php } ?>

                                         <?php for ($i = 1; $i <= $totalHalaman; $i++) { ?>
                                             <?php if ($i == $halaman) { ?>
                                                 <li class="page-item active"><a class="page-link" href="<?= BASE_URL; ?>/transaksi/<?= $i; ?>"><?= $i; ?></a></li>
                                             <?php } else { ?>
                                                 <li class="page-item"><a class="page-link" href="<?= BASE_URL; ?>/transaksi/<?= $i; ?>"><?= $i; ?></a></li>
                                             <?php } ?>
                                         <?php } ?>

                                         <?php if ($halaman == $totalHalaman) { ?>
                                             <li class="page-item disabled">
                                                 <a class="page-link" href="<?= BASE_URL; ?>/transaksi/<?= $selanjutnya; ?>">Next</a>
                                             </li>
                                         <?php } else { ?>
                                             <li class="page-item">
                                                 <a class="page-link" href="<?= BASE_URL; ?>/transaksi/<?= $selanjutnya; ?>">Next</a>
                                             </li>
                                         <?php } ?>
                                     </ul>
                                 </nav>

                                 <!-- Pagination Jika melakukan pencarian -->
                             <?php } else { ?>
                                 <nav class="mt-5">
                                     <ul class="pagination pagination-sm justify-content-end">
                                         <?php if ($halaman == 1) { ?>
                                             <li class="page-item disabled">
                                                 <a class="page-link" href="<?= BASE_URL; ?>/rekening/search/<?= $keyword; ?>/<?= $sebelumnya; ?>" tabindex="-1" aria-disabled="true">Previous</a>
                                             </li>
                                         <?php } else { ?>
                                             <li class="page-item">
                                                 <a class="page-link" href="<?= BASE_URL; ?>/rekening/search/<?= $keyword; ?>/<?= $sebelumnya; ?>" tabindex="-1" aria-disabled="true">Previous</a>
                                             </li>
                                         <?php } ?>

                                         <?php for ($i = 1; $i <= $totalHalaman; $i++) { ?>
                                             <?php if ($i == $halaman) { ?>
                                                 <li class="page-item active"><a class="page-link" href="<?= BASE_URL; ?>/rekening/search/<?= $_GET['keyword']; ?>/<?= $i; ?>"><?= $i; ?></a></li>
                                             <?php } else { ?>
                                                 <li class="page-item"><a class="page-link" href="<?= BASE_URL; ?>/rekening/search/<?= $_GET['keyword']; ?>/<?= $i; ?>"><?= $i; ?></a></li>
                                             <?php } ?>
                                         <?php } ?>

                                         <?php if ($halaman == $totalHalaman) { ?>
                                             <li class="page-item disabled">
                                                 <a class="page-link" href="<?= BASE_URL; ?>/rekening/<?= $_GET['keyword'] ?>/<?= $selanjutnya; ?>">Next</a>
                                             </li>
                                         <?php } else { ?>
                                             <li class="page-item">
                                                 <a class="page-link" href="<?= BASE_URL; ?>/rekening/search/<?= $_GET['keyword'] ?>/<?= $selanjutnya; ?>">Next</a>
                                             </li>
                                         <?php } ?>
                                     </ul>
                                 </nav>
                             <?php } ?>
                         </div>
                     </div>

                     <script>
                         $(document).ready(function() {
                             $(".tombol-hapus").click(function(e) {

                                 e.preventDefault();
                                 const href = $(this).attr("href");

                                 Swal.fire({
                                     title: 'Apakah anda yakin?',
                                     text: 'Data rekening akan terhapus',
                                     icon: 'warning',
                                     showCancelButton: true,
                                     confirmButtonColor: '#3085d6',
                                     cancelButtonColor: '#d33',
                                     confirmButtonText: 'Yes'
                                 }).then((result) => {
                                     if (result.isConfirmed) {
                                         document.location.href = href;
                                     }
                                 });
                             });
                         });
                     </script>