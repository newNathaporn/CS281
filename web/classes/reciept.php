<?php
require "../fpdf181/fpdf.php";

class myPDF extends FPDF
{
  function header()
  {
    include "Connection.php";
    $this->SetFont('Arial', 'B', 20);
    $this->Cell(276, 5, 'Sale Reciept', 0, 0, 'C');
    $this->Ln();
    date_default_timezone_set('Asia/Bangkok');
    $this->SetFont('Times', 'B', 12);
    $this->Ln(10);
    $member = Member::insertuser($conn, $_SESSION['id_user']);
    $today = "Date : " . date("Y-m-d H:i:s");
    $fullname = "Name :" . $member->getfirstname() . " " . $member->getlastname();
    $address = "Address :" . $member->getaddress() . "";
    $phone = "Phone : " . $member->getphone() . "";
    $this->Cell(276, 10, $fullname, 0, 0, 'B');
    $this->Ln(10);
    $this->Cell(276, 10, $phone, 0, 0, 'B');
    $this->Ln(10);
    $this->Cell(276, 10, $address, 0, 0, 'B');
    $this->Ln(10);
    $this->Cell(276, 10, $today, 0, 0, 'B');
    $this->Ln(20);
  }
  function footer()
  {
    $this->SetY(-15);
    $this->SetFont('Arial', '', 8);
    $this->Cell(0, 10, 'Page' . $this->PageNo() . '/{nb}', 0, 0, 'C');
  }
  function headerTable()
  {
    $this->SetFont('Times', 'B', 12);
    $this->Cell(15, 10, 'Order', 1, 0, 'C');
    $this->Cell(35, 10, 'Brand', 1, 0, 'C');
    $this->Cell(160, 10, 'Description', 1, 0, 'C');
    $this->Cell(25, 10, 'Amount', 1, 0, 'C');
    $this->Cell(40, 10, 'Price', 1, 0, 'C');
    $this->Ln();
  }
  function viewTable($db, $text, $amount)
  {
    $total = 0;
    $vat = 0;
    $this->SetFont('Times', '', 12);
    $stmt = $db->query('SELECT * FROM product');
    foreach ($text as $key => $value) {
      $this->Cell(15, 10, $key + 1, 1, 0, 'C');
      $this->Cell(35, 10, $value->getname_brand(), 1, 0, 'C');
      $this->Cell(160, 10, $value->getname(), 1, 0, 'L');
      $this->Cell(25, 10, $amount[$key], 1, 0, 'C');
      $this->Cell(40, 10, $value->getprice() - $value->getsale(), 1, 0, 'C');
      $total = $total + (($value->getprice() - $value->getsale()) * $amount[$key]);
      $this->Ln();
    }
    $vat = Calculate::calculateVatProduct($total);

    $this->SetFont('Times', 'B', 12);
    $this->Cell(235, 10, 'Total Price', 0, 0, 'R');
    $this->Cell(40, 10, $total, 1, 0, 'C');
    $this->Ln();
    $this->Cell(235, 10, 'Vat7%', 0, 0, 'R');
    $this->Cell(40, 10, $vat, 1, 0, 'C');
    $this->Ln();
    $this->Cell(235, 10, 'Total Net Price', 0, 0, 'R');
    $this->Cell(40, 10, $total + $vat, 1, 0, 'C');
    $this->Ln();
    // $this->Cell(20, 10, " total ", 1, 0, 'L');


  }
}
  // $pdf = new myPDF();
  // $pdf->AliasNbPages();
  // $pdf->AddPage('L','A4',0);
  // $pdf->headerTable();
  // $pdf->viewTable($db);
  // $pdf->Output();

?>
