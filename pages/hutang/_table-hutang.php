                     <div class="row mt-4">
                         <div class="col">
                             <table class="table table-hover">
                                 <thead>
                                     <tr>
                                         <th scope="col">No</th>
                                         <th scope="col">Nama Hutang</th>
                                         <th scope="col">Pemberi Hutang</th>
                                         <th scope="col">Nominal Hutang</th>
                                         <th scope="col">Tanggal Hutang</th>
                                         <th scope="col">Aksi</th>
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
                                    $queryBaris = mysqli_query($connec, 'SELECT * FROM hutang');

                                    // Mendapatkan jumlah baris
                                    $totalBaris = mysqli_num_rows($queryBaris);

                                    // Membuat total halaman
                                    $totalHalaman = ceil($totalBaris / $batas);

                                    $queryData = mysqli_query($connec, "SELECT * FROM hutang LIMIT $dataAwal, $batas");

                                    include 'pages/hutang/cari.php';

                                    $no = $dataAwal + 1;

                                    while ($hutang = mysqli_fetch_assoc($queryData)) {
                                    ?>
                                     <tbody>
                                         <tr>
                                             <th scope="row"><?= $no++; ?></th>
                                             <td><?= $hutang['nama_hutang']; ?></td>
                                             <td><?= $hutang['pemberi_hutang']; ?></td>
                                             <td><?= $hutang['nominal_hutang']; ?></td>
                                             <td><?= $hutang['tanggal_hutang']; ?></td>
                                             <td>
                                                 <a href="<?= BASE_URL; ?>/hutang/ubah/<?= $hutang['id']; ?>" class="btn btn-sm btn-warning tombol-edit">Ubah</a>
                                                 <a href="<?= BASE_URL; ?>/hutang/hapus/<?= $hutang['id']; ?>" class="btn btn-sm btn-danger tombol-hapus">Hapus</a>
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
                                                 <a class="page-link" href="<?= BASE_URL; ?>/hutang/<?= $sebelumnya; ?>" tabindex="-1" aria-disabled="true">Previous</a>
                                             </li>
                                         <?php } else { ?>
                                             <li class="page-item">
                                                 <a class="page-link" href="<?= BASE_URL; ?>/hutang/<?= $sebelumnya; ?>" tabindex="-1" aria-disabled="true">Previous</a>
                                             </li>
                                         <?php } ?>

                                         <?php for ($i = 1; $i <= $totalHalaman; $i++) { ?>
                                             <?php if ($i == $halaman) { ?>
                                                 <li class="page-item active"><a class="page-link" href="<?= BASE_URL; ?>/hutang/<?= $i; ?>"><?= $i; ?></a></li>
                                             <?php } else { ?>
                                                 <li class="page-item"><a class="page-link" href="<?= BASE_URL; ?>/hutang/<?= $i; ?>"><?= $i; ?></a></li>
                                             <?php } ?>
                                         <?php } ?>

                                         <?php if ($halaman == $totalHalaman) { ?>
                                             <li class="page-item disabled">
                                                 <a class="page-link" href="<?= BASE_URL; ?>/hutang/<?= $selanjutnya; ?>">Next</a>
                                             </li>
                                         <?php } else { ?>
                                             <li class="page-item">
                                                 <a class="page-link" href="<?= BASE_URL; ?>/hutang/<?= $selanjutnya; ?>">Next</a>
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
                                                 <a class="page-link" href="<?= BASE_URL; ?>/hutang/search/<?= $keyword; ?>/<?= $sebelumnya; ?>" tabindex="-1" aria-disabled="true">Previous</a>
                                             </li>
                                         <?php } else { ?>
                                             <li class="page-item">
                                                 <a class="page-link" href="<?= BASE_URL; ?>/hutang/search/<?= $keyword; ?>/<?= $sebelumnya; ?>" tabindex="-1" aria-disabled="true">Previous</a>
                                             </li>
                                         <?php } ?>

                                         <?php for ($i = 1; $i <= $totalHalaman; $i++) { ?>
                                             <?php if ($i == $halaman) { ?>
                                                 <li class="page-item active"><a class="page-link" href="<?= BASE_URL; ?>/hutang/search/<?= $_GET['keyword']; ?>/<?= $i; ?>"><?= $i; ?></a></li>
                                             <?php } else { ?>
                                                 <li class="page-item"><a class="page-link" href="<?= BASE_URL; ?>/hutang/search/<?= $_GET['keyword']; ?>/<?= $i; ?>"><?= $i; ?></a></li>
                                             <?php } ?>
                                         <?php } ?>

                                         <?php if ($halaman == $totalHalaman) { ?>
                                             <li class="page-item disabled">
                                                 <a class="page-link" href="<?= BASE_URL; ?>/hutang/<?= $_GET['keyword'] ?>/<?= $selanjutnya; ?>">Next</a>
                                             </li>
                                         <?php } else { ?>
                                             <li class="page-item">
                                                 <a class="page-link" href="<?= BASE_URL; ?>/hutang/search/<?= $_GET['keyword'] ?>/<?= $selanjutnya; ?>">Next</a>
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
                                     text: 'Data hutang akan terhapus',
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