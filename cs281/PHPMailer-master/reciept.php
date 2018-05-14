<?php
require "fpdf181/fpdf.php";
include "classes/Connection.php";
$db = new PDO('mysql:host=localhost;dbname=cs281','root','');

class myPDF extends FPDF{
  function header()
  {
    $this->SetFont('Arial','B',14);
    $this->Cell(276,5,'EMPOLYEE DOCUMENTS',0,0,'C');
    $this->Ln();
    $this->SetFont('Times','',12);
    $this->Cell(276,10,'Street Addr',0,0,'C');
    $this->Ln(20);
  }
  function footer()
  {
    $this->SetY(-15);
    $this->SetFont('Arial','',8);
    $this->Cell(0,10,'Page'.$this->PageNo().'/{nb}',0,0,'C');
  }
  function headerTable()
  {
    $this->SetFont('Times','B',12);
    $this->Cell(20,10,'ID',1,0,'C');
    $this->Cell(40,10,'Name',1,0,'C');
    $this->Cell(40,10,'Position',1,0,'C');
    $this->Cell(60,10,'Office',1,0,'C');
    $this->Cell(36,10,'Age',1,0,'C');
    $this->Cell(30,10,'Start Date',1,0,'C');
    $this->Cell(50,10,'Salary',1,0,'C');
    $this->Ln();
  }
  function viewTable($db)
  {
    $this->SetFont('Times','',12);
    $stmt = $db->query('SELECT * FROM product');
    while($data = $stmt->fetch(PDO::FETCH_OBJ))
    {
      $this->Cell(20,10,$data->id_product,1,0,'C');
      $this->Cell(40,10,$data->name_brand,1,0,'L');
      $this->Cell(40,10,$data->name,1,0,'L');
      $this->Cell(60,10,$data->price,1,0,'L');
      $this->Cell(36,10,$data->sale,1,0,'L');
      $this->Cell(30,10,$data->detail,1,0,'L');
      $this->Cell(50,10,$data->qty,1,0,'L');
      $this->Ln();
    }
  }
}
  $pdf = new myPDF();
  $pdf->AliasNbPages();
  $pdf->AddPage('L','A4',0);
  $pdf->headerTable();
  $pdf->viewTable($db);
  $pdf->Output();

?>
