<?php

$id = $_GET['result'];

$query = mysqli_query($connec, "DELETE FROM kategori WHERE id = $id");

if ($query) { ?>
    <script>
        alert('data berhasil dihapus');
        document.location.href = "<?= BASE_URL; ?>/kategori";
    </script>

<?php
}
?>