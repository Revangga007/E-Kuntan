<?php

session_start();
$_SESSION = [];
session_unset();
session_destroy();

?>
<script>
    location = "<?= BASE_URL; ?>/login";
</script>