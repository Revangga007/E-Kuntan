<?php

if (isset($_POST['search'])) {
    $keyword = $_POST['keyword'];
    if (empty($keyword)) { ?>
        <script>
            document.location.href = "<?= BASE_URL; ?>/kategori"
        </script>
    <?php } else { ?>
        ?>
        <script>
            document.location.href = "<?= BASE_URL; ?>/kategori/search/<?= $keyword ?>"
        </script>
    <?php } ?>
<?php }


if (isset($_GET['keyword'])) {

    $keyword = $_GET['keyword'];

    // Untuk Meminta informasi baris ke database
    $queryBaris = mysqli_query($connec, "SELECT kategori.id, kategori.nama_kategori, jenis_transaksi.nama_jenis_transaksi FROM kategori 
                                        INNER JOIN jenis_transaksi ON kategori.id_jenis_transaksi = jenis_transaksi.id 
                                        WHERE
                                        kategori.nama_kategori LIKE '%$keyword%' OR
                                        jenis_transaksi.nama_jenis_transaksi LIKE '%$keyword%'");

    // Mendapatkan jumlah baris
    $totalBaris = mysqli_num_rows($queryBaris);

    // Membuat total halaman
    $totalHalaman = ceil($totalBaris / $batas);

    $queryData = mysqli_query($connec, "SELECT kategori.id, kategori.nama_kategori, jenis_transaksi.nama_jenis_transaksi FROM kategori 
                                        INNER JOIN jenis_transaksi ON kategori.id_jenis_transaksi = jenis_transaksi.id 
                                        WHERE
                                        kategori.nama_kategori LIKE '%$keyword%' OR
                                        jenis_transaksi.nama_jenis_transaksi LIKE '%$keyword%'
                                        LIMIT $dataAwal, $batas");
}
