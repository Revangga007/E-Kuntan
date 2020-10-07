<?php

if (isset($_POST['login'])) {
    $username = $_POST["username"];
    $password = $_POST["password"];

    $user = mysqli_query($connec, "SELECT * FROM akun WHERE username = '$username'");

    if (mysqli_num_rows($user) == 1) {

        $data = mysqli_fetch_assoc($user);
        if (password_verify($password, $data["password"])) {

            $_SESSION["login"] = 1;
            $_SESSION["id"] = $data["id"];
            $_SESSION["nama"] = $data["nama"];
            $_SESSION["status"] = $data["status"];
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