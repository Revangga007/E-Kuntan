<?php

$id = $_GET['result'];

$query = mysqli_query($connec, "DELETE FROM transaksi WHERE id_trx = $id");

if ($query) { ?>
    <script>
        document.location.href = "<?= BASE_URL; ?>/transaksi";
    </script>

<?php
}
?>