<?php

function rupiah($nominal)
{
    $uang = "Rp " . number_format($nominal, 2, ',', '.');
    return $uang;
}
