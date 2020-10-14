<?php

$_SESSION = [];
session_unset();
session_destroy();

setcookie("id", "", time() - 3600);
setcookie("key1", "", time() - 3600);

?>

<script>
    location = "<?= BASE_URL; ?>/login";
</script>