<?php

$id = $_GET['result'];

$query = mysqli_query($connec, "DELETE FROM hutang WHERE id = $id");

if ($query) { ?>
    <script>
        document.location.href = "<?= BASE_URL; ?>/hutang";
    </script>

<?php
}
?>