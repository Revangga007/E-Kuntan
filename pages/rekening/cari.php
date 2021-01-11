<?php

if (isset($_POST['search'])) {
    $keyword = $_POST['keyword'];
    if (empty($keyword)) { ?>
        <script>
            document.location.href = "<?= BASE_URL; ?>/rekening"
        </script>
    <?php } else { ?>
        ?>
        <script>
            document.location.href = "<?= BASE_URL; ?>/rekening/search/<?= $keyword ?>"
        </script>
    <?php } ?>
<?php }


if (isset($_GET['keyword'])) {

    $keyword = $_GET['keyword'];

    // Untuk Meminta informasi baris ke database
    $queryBaris = mysqli_query($connec, "SELECT * FROM rekening WHERE
                                nama_bank LIKE '%$keyword%' OR
                                no_rekening LIKE '%$keyword%' OR
                                pemilik_rekening LIKE '%$keyword%' OR
                                saldo_rekening LIKE '%$keyword%'");

    // Mendapatkan jumlah baris
    $totalBaris = mysqli_num_rows($queryBaris);

    // Membuat total halaman
    $totalHalaman = ceil($totalBaris / $batas);

    $queryData = mysqli_query($connec, "SELECT * FROM rekening WHERE
                                nama_bank LIKE '%$keyword%' OR
                                no_rekening LIKE '%$keyword%' OR
                                pemilik_rekening LIKE '%$keyword%' OR
                                saldo_rekening LIKE '%$keyword%'
                                LIMIT $dataAwal, $batas");
}
