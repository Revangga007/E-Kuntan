<?php

if (isset($_POST['keyword'])) {
    $keyword = $_POST['keyword']; ?>
    <script>
        document.location.href = "<?= BASE_URL; ?>/rekening/search/<?= $keyword ?>"
    </script>
<?php }


if (isset($_GET['keyword'])) {

    $keyword = $_GET['keyword'];

    // Untuk Meminta informasi baris ke database
    $queryBaris = mysqli_query($connec, "SELECT * FROM rekening WHERE
                                id LIKE '%$keyword%' OR
                                nama_bank LIKE '%$keyword%' OR
                                no_rekening LIKE '%$keyword%' OR
                                pemilik_rekening LIKE '%$keyword%' OR
                                saldo_rekening LIKE '%$keyword%'");

    // Mendapatkan jumlah baris
    $totalBaris = mysqli_num_rows($queryBaris);

    // Membuat total halaman
    $totalHalaman = ceil($totalBaris / $batas);

    $queryData = mysqli_query($connec, "SELECT * FROM rekening WHERE
                                id LIKE '%$keyword%' OR
                                nama_bank LIKE '%$keyword%' OR
                                no_rekening LIKE '%$keyword%' OR
                                pemilik_rekening LIKE '%$keyword%' OR
                                saldo_rekening LIKE '%$keyword%'
                                LIMIT $dataAwal, $batas");
}
