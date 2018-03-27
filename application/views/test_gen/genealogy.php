<div id="results">Your captured image will appear here...</div>
	
	<h1>Capture Web camera image using WebcamJS and PHP - Theonlytutorials.com</h1>
	<h3>Demonstrates simple 600x460 capture &amp; display</h3>
	
	<div id="my_camera"></div>
	
	<!-- First, include the Webcam.js JavaScript Library -->
	<script type="text/javascript" src="webcam.js"></script>
	
	<!-- Configure a few settings and attach camera -->
	<script language="JavaScript">
		Webcam.set({
			width: 600,
			height: 460,
			image_format: 'jpeg',
			jpeg_quality: 90
		});
		Webcam.attach( '#my_camera' );
	</script>
	
	<!-- A button for taking snaps -->
	<form>
		<input type=button value="Take Snapshot" onClick="take_snapshot()">
	</form>
	
	<!-- Code to handle taking the snapshot and displaying it locally -->
	<script language="JavaScript">
		function take_snapshot() {
			// take snapshot and get image data
			Webcam.snap( function(data_uri) {
				// display results in page
				
					
				Webcam.upload( data_uri, 'saveimage.php', function(code, text) {
					document.getElementById('results').innerHTML = 
					'<h2>Here is your image:</h2>' + 
					'<img src="'+text+'"/>';
				} );	
			} );
		}
	</script>
<?php
require_once('vendor/autoload.php');
//$phpWord = new \PhpOffice\PhpWord\PhpWord();

// echo base_url('assets/clearance.docx');
// $file = base_url('assets/clearance.docx');

// $phpword = new \PhpOffice\PhpWord\TemplateProcessor($file);

// $phpword->setValue('{$full name}','Rullamas Kealu S');
// $phpword->setValue('{$origaddress}','Bgy.Burol');
// $phpword->setValue('{birthdate}','April 6, 1997');
// $phpword->setValue('{address}','Bgy.Burol');
// $phpword->setValue('{reason}','la lng');       
// $phpword->setValue('{thedatetoday}','March 26, 2017');        

// $phpword->saveAs('edited.docx');
// header("Content-disposition: attachment;filename=CERTIFICADO.docx; charset=iso-8859-1");
// echo file_get_contents("edited.docx");





// \PhpOffice\PhpWord\Settings::setPdfRendererPath(APPPATH.'libraries/'.'tcpdf/tcpdf.php');
// \PhpOffice\PhpWord\Settings::setPdfRendererName('TCPDF');

// $phpWord = \PhpOffice\PhpWord\IOFactory::load('edited.docx'); 

// //Save it
// $xmlWriter = \PhpOffice\PhpWord\IOFactory::createWriter($phpWord , 'PDF');
// $xmlWriter->save('result.pdf');  
/* Note: any element you append to a document must reside inside of a Section. */

// Adding an empty Section to the document...
// $section = $phpWord->addSection();
// // Adding Text element to the Section having font styled by default...
// $section->addText(
//     '"Learn from yesterday, live for today, hope for tomorrow. '
//         . 'The important thing is not to stop questioning." '
//         . '(Albert Einstein)'
// );

// /*
//  * Note: it's possible to customize font style of the Text element you add in three ways:
//  * - inline;
//  * - using named font style (new font style object will be implicitly created);
//  * - using explicitly created font style object.
//  */

// // Adding Text element with font customized inline...
// $section->addText(
//     '"Great achievement is usually born of great sacrifice, '
//         . 'and is never the result of selfishness." '
//         . '(Napoleon Hill)',
//     array('name' => 'Tahoma', 'size' => 10)
// );

// // Adding Text element with font customized using named font style...
// $fontStyleName = 'oneUserDefinedStyle';
// $phpWord->addFontStyle(
//     $fontStyleName,
//     array('name' => 'Tahoma', 'size' => 10, 'color' => '1B2232', 'bold' => true)
// );
// $section->addText(
//     '"The greatest accomplishment is not in never falling, '
//         . 'but in rising again after you fall." '
//         . '(Vince Lombardi)',
//     $fontStyleName
// );

// // Adding Text element with font customized using explicitly created font style object...
// $fontStyle = new \PhpOffice\PhpWord\Style\Font();
// $fontStyle->setBold(true);
// $fontStyle->setName('Tahoma');
// $fontStyle->setSize(13);
// $myTextElement = $section->addText('"Believe you can and you\'re halfway there." (Theodor Roosevelt)');
// $myTextElement->setFontStyle($fontStyle);

// // Saving the document as OOXML file...
// $objWriter = \PhpOffice\PhpWord\IOFactory::createWriter($phpWord, 'Word2007');
// $objWriter->save(base_url('assets/helloWorld.docx'));

// // Saving the document as ODF file...

// // Saving the document as HTML file...
// $objWriter = \PhpOffice\PhpWord\IOFactory::createWriter($phpWord, 'HTML');
// $objWriter->save(base_url('assets/helloWorld.html'));