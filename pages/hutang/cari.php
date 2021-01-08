<?php

if (isset($_POST['search'])) {
    $keyword = $_POST['keyword'];
    if (empty($keyword)) { ?>
        <script>
            document.location.href = "<?= BASE_URL; ?>/hutang"
        </script>
    <?php } else { ?>
        ?>
        <script>
            document.location.href = "<?= BASE_URL; ?>/hutang/search/<?= $keyword ?>"
        </script>
    <?php } ?>
<?php }


if (isset($_GET['keyword'])) {

    $keyword = $_GET['keyword'];

    // Untuk Meminta informasi baris ke database
    $queryBaris = mysqli_query($connec, "SELECT * FROM hutang 
                                         WHERE
                                         nama_hutang LIKE '%$keyword%' OR
                                         pemberi_hutang LIKE '%$keyword%' OR
                                         nominal_hutang LIKE '%$keyword%' OR
                                         tanggal_hutang LIKE '$keyword%'");

    // Mendapatkan jumlah baris
    $totalBaris = mysqli_num_rows($queryBaris);

    // Membuat total halaman
    $totalHalaman = ceil($totalBaris / $batas);

    $queryData = mysqli_query($connec, "SELECT * FROM hutang 
                                        WHERE
                                        nama_hutang LIKE '%$keyword%' OR
                                        pemberi_hutang LIKE '%$keyword%' OR
                                        nominal_hutang LIKE '%$keyword%' OR
                                        tanggal_hutang LIKE '$keyword%'
                                        LIMIT $dataAwal, $batas");
}
