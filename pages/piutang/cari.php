<?php

if (isset($_POST['search'])) {
    $keyword = $_POST['keyword'];
    if (empty($keyword)) { ?>
        <script>
            document.location.href = "<?= BASE_URL; ?>/piutang"
        </script>
    <?php } else { ?>
        ?>
        <script>
            document.location.href = "<?= BASE_URL; ?>/piutang/search/<?= $keyword ?>"
        </script>
    <?php } ?>
<?php }


if (isset($_GET['keyword'])) {

    $keyword = $_GET['keyword'];

    // Untuk Meminta informasi baris ke database
    $queryBaris = mysqli_query($connec, "SELECT * FROM piutang 
                                         WHERE
                                         nama_piutang LIKE '%$keyword%' OR
                                         nama_pengutang LIKE '%$keyword%' OR
                                         nominal_piutang LIKE '%$keyword%' OR
                                         tanggal_piutang LIKE '$keyword%'");

    // Mendapatkan jumlah baris
    $totalBaris = mysqli_num_rows($queryBaris);

    // Membuat total halaman
    $totalHalaman = ceil($totalBaris / $batas);

    $queryData = mysqli_query($connec, "SELECT * FROM piutang 
                                        WHERE
                                        nama_piutang LIKE '%$keyword%' OR
                                        nama_pengutang LIKE '%$keyword%' OR
                                        nominal_piutang LIKE '%$keyword%' OR
                                        tanggal_piutang LIKE '$keyword%'
                                        LIMIT $dataAwal, $batas");
}
