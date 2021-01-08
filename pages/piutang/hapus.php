<?php

$id = $_GET['result'];

$query = mysqli_query($connec, "DELETE FROM piutang WHERE id = $id");

if ($query) { ?>
    <script>
        document.location.href = "<?= BASE_URL; ?>/piutang";
    </script>

<?php
}
?>