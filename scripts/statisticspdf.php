<?php
require('fpdf/fpdf.php');

class PDF extends FPDF
{
// Page header
function Header()
{
    // Logo
    $this->Image('user.png',10,6,30);
    // Arial bold 15
    $this->SetFont('Times','B',20);
    // Move to the right
    $this->Cell(40);
    // Title
    $this->Cell(140,10,'Gcare System Member Distribution Analysis',1,0,'C');
    // Line break
    $this->Ln(20);
}

// Page footer
function Footer()
{
    // Position at 1.5 cm from bottom
    $this->SetY(-15);
    // Arial italic 8
    $this->SetFont('Arial','I',8);
    // Page number
    $this->Cell(0,10,'Page '.$this->PageNo().'/{nb}.Graphical Analysis',0,0,'C');
}
}

// Instanciation of inherited class
$pdf = new PDF();
$pdf->AliasNbPages();
$pdf->AddPage();
$pdf->SetFont('Times','',12);

    $pdf->Cell(0,10,$pdf->image('user.png'),6,1,'C');
$pdf->Output();
?>