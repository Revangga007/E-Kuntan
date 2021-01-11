<?php

if (isset($_COOKIE["id"]) && isset($_COOKIE["key1"])) {

    $id = $_COOKIE["id"];

    $query = mysqli_query($connec, "SELECT * FROM akun WHERE id = $id");

    $data = mysqli_fetch_assoc($query);

    if ($_COOKIE["key1"] == hash('sha256', $data["username"])) {
        $_SESSION["login"] = $data;
    }
}
