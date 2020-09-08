<?php

$id = $_GET['result'];

$query = mysqli_query($connec, "DELETE FROM rekening WHERE id = $id");

if ($query) { ?>
    <script>
        alert('data berhasil dihapus');
        document.location.href = "<?= BASE_URL; ?>/rekening";
    </script>

<?php
}
?>