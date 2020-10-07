<?php

$id = $_GET['result'];

$query = mysqli_query($connec, "DELETE FROM akun WHERE id = $id");


if ($query) { ?>
    <script>
        document.location.href = "<?= BASE_URL; ?>/pengguna";
    </script>

<?php
}
?>