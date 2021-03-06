<head>
    <!-- <base href="http://localhost/app-keuangan/"> -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- SEO => Search Engine Optimation -->
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Aplikasi hebat untuk membantu mengelola keuagan usaha anda">
    <meta name="author" content="Kang Tirex">

    <?php if (!($_GET["menu"] == "dashboard")) { ?>

        <title> <?= $_GET["menu"]; ?> | Ekuntan Cuzz</title>

    <?php } else { ?>

        <title>Ekuntan Cuzz</title>

    <?php } ?>
    <!-- Custom fonts for this template-->
    <link href="<?= BASE_URL; ?>/assets/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="<?= BASE_URL; ?>/assets/css/sb-admin-2.min.css" rel="stylesheet">
    <link rel="stylesheet" href="<?= BASE_URL; ?>/assets/vendor/sweetalert2/sweetalert2.min.css">
    <link rel="stylesheet" href="<?= BASE_URL; ?>/assets/vendor/datatables/dataTables.bootstrap4.min.css">
    <script src="<?= BASE_URL; ?>/assets/vendor/jquery/jquery-3.5.1.min.js"></script>

</head>