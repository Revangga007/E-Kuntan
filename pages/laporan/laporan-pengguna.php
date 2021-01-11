<?php

require "../../vendor/autoload.php";

use Dompdf\Dompdf;

$dompdf = new Dompdf();

$dompdf->loadHtml('<h1>Hello World</h1>');
$dompdf->setPaper('A4', 'portrait');
$dompdf->render();
$dompdf->stream("Data Laporan Pengguna", ["Attachment=>0"]);
