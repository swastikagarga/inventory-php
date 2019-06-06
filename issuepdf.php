<?php
include_once("conn.php");
require("fpdf181/fpdf.php");

class PDF extends FPDF
{


function Header()
{
    // Logo
    //$this->Image('logo.png',10,-1,70);
    $this->SetFont('Arial','B',10);
    $this->SetFillColor(200,0,0);
    // Move to the right
    $this->Cell(50);
    // Title
    $this->Cell(50,10,'Issue List',1,0,'C',TRUE);
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
	$w = array(30,23,28,38,28,20,25);
	for($i=0;$i<count($header);$i++)
	$this->Cell($w[$i],10,$header[$i],1,0,'C',true);
	// Color and font restoration
	$this->SetFillColor(224,235,255);
	$this->SetTextColor(0);
	$this->SetFont('');
	// Data
	$fill = false;
	
		$fill = !$fill;
	// Closing line
	//$this->Cell(array_sum($w),0,'','T');
}
}
$db = new dbObj();
$connString =  $db->getConnstring();
$result = mysqli_query($connString, "SELECT matid,issuedto,issuedfrom,quantityofreq,issuequan,rate,amount FROM issue") or die("database error:". mysqli_error($connString));
// Column headings
$header = array('Material Code', 'Issued To', 'Issued From', 'Quantity of requisition' , 'Issued Quantity','Rate','Amount');

$pdf = new PDF();
$pdf->AddPage('L');


$pdf->FancyTable($header);


foreach($result as $row) {
    $pdf->Ln();
    //foreach($row as $column)
    $pdf->Cell(30,12,$row['matid'],1,0,'');
    $pdf->Cell(23,12,$row['issuedto'],1,0,'',true);
    $pdf->Cell(28,12,$row['issuedfrom'],1,0,'',true);
    $pdf->Cell(38,12,$row['quantityofreq'],1,0,'b',true);
    $pdf->Cell(28,12,$row['issuequan'],1,0,'',true);
    $pdf->Cell(20,12,$row['rate'],1,0,'',true);
    $pdf->Cell(25,12,$row['amount'],1,0,'',true);
    
   

}

$pdf->Output();
?>
