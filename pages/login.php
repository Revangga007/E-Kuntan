<?php

if (isset($_POST['login'])) {

    $username = $_POST["username"];
    $password = $_POST["password"];

    $user = mysqli_query($connec, "SELECT * FROM akun WHERE username = '$username'");

    if (mysqli_num_rows($user) == 1) {

        $data = mysqli_fetch_assoc($user);
        if (password_verify($password, $data["password"])) {

            $_SESSION["login"] = $data;

            if (isset($_POST["remember"])) {
                setcookie("id", $data["id"], time() + 604800);
                setcookie("key1", hash('sha256', $data["username"]), time() + 604800);
            }
?>
            <script>
                document.location.href = "<?= BASE_URL; ?>/dashboard";
            </script>
<?php
            exit;
        }
    }
    $error = true;
}
?>