<?php

include '../../config/connection.php';

require '../../assets/vendor/pdf/fpdf.php';

$pdf = new FPDF("L", "cm", "A4");

$pdf->SetMargins(2, 1, 1);
$pdf->AliasNbPages();
$pdf->AddPage();
$pdf->SetFont('Times', 'B', 11);
$pdf->Image('../../assets/img/logo.png', 1, 1, 2, 2);
$pdf->SetX(4);
$pdf->MultiCell(19.5, 0.5, 'CV. SAYAP KEBEBASAN', 0, 'C');
$pdf->SetX(4);
$pdf->MultiCell(19.5, 0.5, 'Telpon : 08912345678', 0, 'C');
$pdf->SetFont('Arial', 'B', 10);
$pdf->SetX(4);
$pdf->MultiCell(19.5, 0.5, 'Jl. Erwin Smith no.1', 0, 'C');
$pdf->SetX(4);
$pdf->MultiCell(19.5, 0.5, 'website : sayap-kebebasan.com | email :sayap_kebebasan@gmail.com', 0, 'C');
$pdf->Line(1, 3.1, 28.5, 3.1);
$pdf->SetLineWidth(0.1);
$pdf->Line(1, 3.2, 28.5, 3.2);
$pdf->SetLineWidth(0);
$pdf->ln(1);
$pdf->SetFont('Arial', 'B', '16');
$pdf->Cell(25.5, 0.7, 'Laporan Data Pengguna', 0, 10, 'C');
$pdf->ln(1);
$pdf->SetFont('Arial', 'B', 12);
$pdf->cell(6, 0.8, "Dicetak pada : " . date("D-d/m/Y"), 0, 0, 'C');
$pdf->ln(1);
$pdf->SetFont('Arial', 'B', 12);
$pdf->SetLeftMargin(6);
$pdf->cell(1.5, 0.8, 'NO', 1, 0, 'C');
$pdf->cell(8, 0.8, 'Nama', 1, 0, 'C');
$pdf->cell(8, 0.8, 'Status', 1, 0, 'C');
$pdf->ln();
$pdf->SetFont('Arial', '', 12);
$no = 1;

$akuns = mysqli_query($connec, "SELECT * FROM akun ORDER BY id");

while ($akun = mysqli_fetch_assoc($akuns)) {
    $pdf->Cell(1.5, 0.8, $no, 1, 0, 'C');
    $pdf->Cell(8, 0.8, $akun['nama_pengguna'], 1, 0, 'C');
    $pdf->Cell(8, 0.8, $akun['status_pengguna'], 1, 0, 'C');
    $pdf->ln();
    $pdf->SetFont('Arial', '', 12);
    $no++;
}
$pdf->Output("Laporan_Pengguna.pdf", 'D');
