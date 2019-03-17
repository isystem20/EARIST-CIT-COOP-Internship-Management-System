<?php

// create new PDF document
$pdf = new TCPDF(PDF_PAGE_ORIENTATION, PDF_UNIT, PDF_PAGE_FORMAT, true, 'UTF-8', false);

// set document information
$pdf->SetCreator(PDF_CREATOR);
$pdf->SetAuthor('John Perry Carpio');
$pdf->SetTitle('CIT Coop Management Reporting');
$pdf->SetSubject('CIT COOP OJT DOCUMENT');
// set default header data


// // set header and footer fonts
// $pdf->setHeaderFont(Array(PDF_FONT_NAME_MAIN, '', PDF_FONT_SIZE_MAIN));
// $pdf->setFooterFont(Array(PDF_FONT_NAME_DATA, '', PDF_FONT_SIZE_DATA));

// set default monospaced font
// $pdf->SetDefaultMonospacedFont(PDF_FONT_MONOSPACED);

// set margins
$pdf->SetMargins(PDF_MARGIN_LEFT, PDF_MARGIN_TOP, PDF_MARGIN_RIGHT);
// $pdf->SetHeaderMargin(PDF_MARGIN_HEADER);
// $pdf->SetFooterMargin(PDF_MARGIN_FOOTER);
$pdf->SetPrintHeader(false);
$pdf->SetPrintFooter(false);
// // set auto page breaks
// $pdf->SetAutoPageBreak(TRUE, PDF_MARGIN_BOTTOM);

// set image scale factor
$pdf->setImageScale(PDF_IMAGE_SCALE_RATIO);

// set some language-dependent strings (optional)
if (@file_exists(dirname(__FILE__).'/lang/eng.php')) {
	require_once(dirname(__FILE__).'/lang/eng.php');
	$pdf->setLanguageArray($l);
}

// ---------------------------------------------------------

// set font
$pdf->SetFont('dejavusans', '', 10);

$id = $form[0]['Id'];
$content = $form[0]['Content'];



$variables = array(
	'DocumentDate' => date('F j, Y',strtotime($form[0]['DocumentDate'])), 
	'ContactPerson' => ucwords($form[0]['ContactPerson']), 
	'ContactPersonTitle' => ucwords($form[0]['ContactPersonTitle']), 
	'ContactPersonFirstName' => ucwords($form[0]['ContactPersonFirstName']), 
	'ContactPersonLastName' => ucwords($form[0]['ContactPersonLastName']), 
	'ContactPerson_Designation' => ucwords($form[0]['ContactPerson_Designation']), 
	'CompanyName' =>ucwords($form[0]['CompanyName']), 
	'CompanyAddress1' =>ucwords($form[0]['CompanyAddress1']), 
	'CompanyAddress2' =>ucwords($form[0]['CompanyAddress2']), 
	'StudentFullName' => ucwords($form[0]['StudentFullName']), 
	'StudentFName' => ucwords($form[0]['StudentFName']), 
	'StudentLName' => ucwords($form[0]['StudentLName']),
	'StudentCode' => ucwords($form[0]['StudentCode']),
	'StudentCourse' => ucwords($form[0]['StudentCourse']), 
	'StudentOJTHours' => $form[0]['StudentOJTHours'], 
	'StudentGender' => $form[0]['StudentGender'], 
	'StudentPronoun' =>ucwords($form[0]['StudentPronoun']), 
	'Student3rdPerson' => ucwords(form[0]['Student3rdPerson']), 
	'TrainingSupervisor' => ucwords($form[0]['TrainingSupervisor']), 
	'TrainingSupervisor_Designation' => ucwords($form[0]['TrainingSupervisor_Designation']), 
	'TrainingManager' => ucwords($form[0]['TrainingManager']), 
	'StudentStartDate' => $form[0]['StudentStartDate'], 
	'StudentEndDate' => $form[0]['StudentEndDate'], 
	'StudentScheduleDays' => $form[0]['StudentScheduleDays'], 
	'StudentScheduleTime' => $form[0]['StudentScheduleTime'], 
	);

foreach($variables as $key => $value)
{
    $content = str_replace('{{'.$key.'}}', $value, $content);
}

$pdf->AddPage();
ob_start();

$logo = base_url('themes/others/letterhead.png');
    // we can have any view part here like HTML, PHP etc
    $body = $content;
    
ob_end_clean();
$pdf->writeHTML($body, true, false, true, false, '');
$pdf->Output('output.pdf', 'I');