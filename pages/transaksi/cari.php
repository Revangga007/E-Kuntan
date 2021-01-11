<?php

if (isset($_POST['search'])) {
    $keyword = $_POST['keyword'];
    if (empty($keyword)) { ?>
        <script>
            document.location.href = "<?= BASE_URL; ?>/transaksi"
        </script>
    <?php } else { ?>
        ?>
        <script>
            document.location.href = "<?= BASE_URL; ?>/transaksi/search/<?= $keyword ?>"
        </script>
    <?php } ?>
<?php }


if (isset($_GET['keyword'])) {

    $keyword = $_GET['keyword'];

    // Untuk Meminta informasi baris ke database
    $queryBaris = mysqli_query($connec, "SELECT transaksi.*, kategori.*,jenis_transaksi.* 
                                        FROM transaksi
                                        INNER JOIN kategori ON transaksi.id_kategori = kategori.id 
                                        INNER JOIN jenis_transaksi ON kategori.id_jenis_transaksi = jenis_transaksi.id 
                                        WHERE
                                        transaksi.tanggal LIKE '%$keyword%' OR
                                        kategori.nama_kategori LIKE '%$keyword%' OR
                                        transaksi.keterangan LIKE '%$keyword%' OR
                                        transaki.nominal LIKE '%$keyword%' OR
                                        jenis_transaksi.nama_jenis_transaksi LIKE '%$keyword%'");

    // Mendapatkan jumlah baris
    $totalBaris = mysqli_num_rows($queryBaris);

    // Membuat total halaman
    $totalHalaman = ceil($totalBaris / $batas);

    $queryData = mysqli_query($connec, "SELECT transaksi.*, kategori.*,jenis_transaksi.* 
                                        FROM transaksi
                                        INNER JOIN kategori ON transaksi.id_kategori = kategori.id 
                                        INNER JOIN jenis_transaksi ON kategori.id_jenis_transaksi = jenis_transaksi.id 
                                        WHERE
                                        transaksi.tanggal LIKE '%$keyword%' OR
                                        kategori.nama_kategori LIKE '%$keyword%' OR
                                        transaksi.keterangan LIKE '%$keyword%' OR
                                        transaki.nominal LIKE '%$keyword%' OR
                                        jenis_transaksi.nama_jenis_transaksi LIKE '%$keyword%'
                                        LIMIT $dataAwal, $batas");
}
