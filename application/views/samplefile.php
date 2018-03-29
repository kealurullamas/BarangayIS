<?php
//============================================================+
// File name   : example_022.php
// Begin       : 2008-03-04
// Last Update : 2013-05-14
//
// Description : Example 022 for TCPDF class
//               CMYK colors
//
// Author: Nicola Asuni
//
// (c) Copyright:
//               Nicola Asuni
//               Tecnick.com LTD
//               www.tecnick.com
//               info@tecnick.com
//============================================================+

/**
 * Creates an example PDF TEST document using TCPDF
 * @package com.tecnick.tcpdf
 * @abstract TCPDF - Example: CMYK colors.
 * @author Nicola Asuni
 * @since 2008-03-04
 */

// Include the main TCPDF library (search for installation path).
// require_once (APPPATH.'libraries/'.'src/autoload.php');
// require_once (APPPATH.'libraries/'.'fpdf/fpdf.php');
// require_once (APPPATH.'libraries/'.'src/fpdi.php');
// require_once (APPPATH.'libraries/'.'fpdf/TcpdfFpdi.php');




// class Pdf extends Fpdi\TcpdfFpdi
// {
//     /**
//      * "Remembers" the template id of the imported page
//      */
//     protected $tplId;

//     /**
//      * Draw an imported PDF logo on every page
//      */
//     function Header()
//     {
//         if (is_null($this->tplId)) {
//             $this->
//             $this->tplId = $this->importPage(1);
//         }
//         $size = $this->useImportedPage($this->tplId, 130, 5, 60);

//         $this->SetFont('freesans', 'B', 20);
//         $this->SetTextColor(0);
//         $this->SetXY(PDF_MARGIN_LEFT, 5);
//         $this->Cell(0, $size['height'], 'TCPDF and FPDI');
//     }

//     function Footer()
//     {
//         // emtpy method body
//     }
// }
use setasign\Fpdi;
require_once (APPPATH.'libraries/'.'fpdf/fpdf.php');
require_once (APPPATH.'libraries/'.'src/autoload.php');

$pdf = new Fpdi\Fpdi();
// add a page
$pdf->AddPage();
$pageCount = $pdf->setSourceFile(base_url('assets/bgy.pdf'));
for ($i = 1; $i <= $pageCount; $i++) {
    $tplIdx = $pdf->importPage($i, '/MediaBox');
    $pdf->AddPage();
    $pdf->useTemplate($tplIdx);
}


// class myPdf extends Fpdi\TcpdfFpdi
// {
//     /**
//      * "Remembers" the template id of the imported page
//      */
//     protected $tplId;

//     /**
//      * Draw an imported PDF logo on every page
//      */
//     function Header()
//     {
//         $varInAnyScope = base_url('assets/try.pdf');
//         if (is_null($this->tplId)) {
//             $this->setSourceFile($varInAnyScope);
            
//             $this->tplId = $this->importPage(1);
//         }
//         $size = $this->useImportedPage($this->tplId, 130, 5, 60);

//         $this->SetFont('freesans', 'B', 20);
//         $this->SetTextColor(0);
//         $this->SetXY(PDF_MARGIN_LEFT, 5);
//         $this->Cell(0, $size['height'], 'TCPDF and FPDI');
//     }

//     function Footer()
//     {
//         // emtpy method body
//     }
// }

// // initiate PDF
// $pdf = new myPdf();
// $pdf->SetMargins(PDF_MARGIN_LEFT, 40, PDF_MARGIN_RIGHT);
// $pdf->SetAutoPageBreak(true, 40);

// // add a page
// $pdf->AddPage();

// // get external file content
// $utf8text = file_get_contents('tcpdf/examples/data/utf8test.txt', true);

// $pdf->SetFont('freeserif', '', 12);
// // now write some text above the imported page
// $pdf->Write(5, $utf8text);

// $pdf->Output();


//ito tama
// // create new PDF document
// $pdf = new TCPDF(PDF_PAGE_ORIENTATION, PDF_UNIT, PDF_PAGE_FORMAT, true, 'UTF-8', false);

// // set document information
// $pdf->SetCreator(PDF_CREATOR);
// $pdf->SetAuthor('Nicola Asuni');
// $pdf->SetTitle('TCPDF Example 022');
// $pdf->SetSubject('TCPDF Tutorial');
// $pdf->SetKeywords('TCPDF, PDF, example, test, guide');

// // set default header data
// $pdf->SetHeaderData(PDF_HEADER_LOGO, PDF_HEADER_LOGO_WIDTH, PDF_HEADER_TITLE.' 022', PDF_HEADER_STRING);

// // set header and footer fonts
// $pdf->setHeaderFont(Array(PDF_FONT_NAME_MAIN, '', PDF_FONT_SIZE_MAIN));
// $pdf->setFooterFont(Array(PDF_FONT_NAME_DATA, '', PDF_FONT_SIZE_DATA));

// // set default monospaced font
// $pdf->SetDefaultMonospacedFont(PDF_FONT_MONOSPACED);

// // set margins
// $pdf->SetMargins(PDF_MARGIN_LEFT, PDF_MARGIN_TOP, PDF_MARGIN_RIGHT);
// $pdf->SetHeaderMargin(PDF_MARGIN_HEADER);
// $pdf->SetFooterMargin(PDF_MARGIN_FOOTER);

// // set auto page breaks
// $pdf->SetAutoPageBreak(TRUE, PDF_MARGIN_BOTTOM);

// // set image scale factor
// $pdf->setImageScale(PDF_IMAGE_SCALE_RATIO);

// // set some language-dependent strings (optional)
// if (@file_exists(dirname(__FILE__).'/lang/eng.php')) {
// 	require_once(dirname(__FILE__).'/lang/eng.php');
// 	$pdf->setLanguageArray($l);
// }

// // ---------------------------------------------------------

// // check also the following methods:
// // SetDrawColorArray()
// // SetFillColorArray()
// // SetTextColorArray()

// // set font
// $pdf->SetFont('helvetica', 'B', 18);

// // add a page
// $pdf->AddPage();

// $pdf->Write(0, 'Example of CMYK, RGB and Grayscale colours', '', 0, 'L', true, 0, false, false, 0);

// // define style for border
// $border_style = array('all' => array('width' => 2, 'cap' => 'square', 'join' => 'miter', 'dash' => 0, 'phase' => 0));

// // --- CMYK ------------------------------------------------

// $pdf->SetDrawColor(50, 0, 0, 0);
// $pdf->SetFillColor(100, 0, 0, 0);
// $pdf->SetTextColor(100, 0, 0, 0);
// $pdf->Rect(30, 60, 30, 30, 'DF', $border_style);
// $pdf->Text(30, 92, 'Cyan');

// $pdf->SetDrawColor(0, 50, 0, 0);
// $pdf->SetFillColor(0, 100, 0, 0);
// $pdf->SetTextColor(0, 100, 0, 0);
// $pdf->Rect(70, 60, 30, 30, 'DF', $border_style);
// $pdf->Text(70, 92, 'Magenta');

// $pdf->SetDrawColor(0, 0, 50, 0);
// $pdf->SetFillColor(0, 0, 100, 0);
// $pdf->SetTextColor(0, 0, 100, 0);
// $pdf->Rect(110, 60, 30, 30, 'DF', $border_style);
// $pdf->Text(110, 92, 'Yellow');

// $pdf->SetDrawColor(0, 0, 0, 50);
// $pdf->SetFillColor(0, 0, 0, 100);
// $pdf->SetTextColor(0, 0, 0, 100);
// $pdf->Rect(150, 60, 30, 30, 'DF', $border_style);
// $pdf->Text(150, 92, 'Black');

// // --- RGB -------------------------------------------------

// $pdf->SetDrawColor(255, 127, 127);
// $pdf->SetFillColor(255, 0, 0);
// $pdf->SetTextColor(255, 0, 0);
// $pdf->Rect(30, 110, 30, 30, 'DF', $border_style);
// $pdf->Text(30, 142, 'Red');
// $pdf->Text(35,144,'Kelau Pogi');
// $pdf->SetDrawColor(127, 255, 127);
// $pdf->SetFillColor(0, 255, 0);
// $pdf->SetTextColor(0, 255, 0);
// $pdf->Rect(70, 110, 30, 30, 'DF', $border_style);
// $pdf->Text(70, 142, 'Green');

// $pdf->SetDrawColor(127, 127, 255);
// $pdf->SetFillColor(0, 0, 255);
// $pdf->SetTextColor(0, 0, 255);
// $pdf->Rect(110, 110, 30, 30, 'DF', $border_style);
// $pdf->Text(110, 142, 'Blue');

// // --- GRAY ------------------------------------------------

// $pdf->SetDrawColor(191);
// $pdf->SetFillColor(127);
// $pdf->SetTextColor(127);
// $pdf->Rect(30, 160, 30, 30, 'DF', $border_style);
// $pdf->Text(30, 192, 'Gray');

// // ---------------------------------------------------------

// //Close and output PDF document
// $pdf->Output('example_022.pdf', 'I');

//============================================================+
// END OF FILE
//============================================================+