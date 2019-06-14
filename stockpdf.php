<?php
include("connection.php");
require("fpdf181/fpdf.php");

class PDF extends FPDF
{

function Header()
{
    // Logo
    //$this->Image('logo.png',10,-1,70);
    $this->SetFont('Arial','B',13);
    $this->SetFillColor(200,0,0);
    // Move to the right
    $this->Cell(50);
    // Title
    $this->Cell(50,10,'Stock List',1,0,'C',TRUE);
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
    $this->Cell(0,10,'Page '.$this->PageNo().'/{nb}',0,0,'C');
}


 

function FancyTable($header)
{ 
    // Colors, line width and bold font
	$this->SetFillColor(255,0,0);
	$this->SetTextColor(255);
	$this->SetDrawColor(120,0,0);
	$this->SetLineWidth(.3);
	$this->SetFont('','B');
	// Header
	$w = array(35,18,45,20,20,30);
	for($i=0;$i<count($header);$i++)
	$this->Cell($w[$i],10,$header[$i],1,0,'C',true);
	// Color and font restoration
	$this->SetFillColor(224,235,255);
	$this->SetTextColor(0);
	$this->SetFont('');
	// Data
	$fill = false;
	
		$fill = !$fill;
	}
}
$db = new dbObj();
$connString =  $db->getConnstring();
$result = mysqli_query($connString, "SELECT * FROM stocks s JOIN materials m ON s.mid=m.mid join billtable b on b.id=s.grsid") or die("database error:". mysqli_error($connString));
// Column headings
$header = array('Material Name', 'Grsno' ,'Grsdate', 'Quantity','Rate','Expirydate');

$pdf = new PDF();
$pdf->AddPage();


$pdf->FancyTable($header);


foreach($result as $row) {
    $pdf->Ln();
    //foreach($row as $column)
    $pdf->Cell(35,12,$row['mname'],1,0,'');
    $pdf->Cell(18,12,$row['grsno'],1,0,'',true);
    $pdf->Cell(45,12,$row['grsdate'],1,0,'',true);
    $pdf->Cell(20,12,$row['quantity'],1,0,'',true);
    $pdf->Cell(20,12,$row['rate'],1,0,'',true);
    $pdf->Cell(30,12,$row['expirydate'],1,0,'',true);
    
    
   

}

$pdf->Output();
?>
