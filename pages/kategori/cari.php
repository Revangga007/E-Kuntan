<?php

if (isset($_POST['search'])) {

    $keyword = $_POST['keyword'];

    $query = mysqli_query($connec, "SELECT * FROM kategori WHERE 
                            id LIKE '%$keyword%' OR
                            nama_kategori LIKE '%$keyword%'");
}
