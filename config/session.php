<?php

session_start();

if (!isset($_SESSION["login"])) { ?>
    <script>
        document.location.href = "<?= BASE_URL; ?>/login";
    </script>
<?php } ?>