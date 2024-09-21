<?php
require_once('tcpdf/tcpdf.php'); // Make sure the TCPDF library is correctly included based on your project's file structure

// Get the JSON data from the request body
$data = file_get_contents('php://input');

// Convert the JSON data to an array
$dataArray = json_decode($data, true);

// Create a new PDF document
$pdf = new TCPDF();
$pdf->SetMargins(10, 10, 10);
$pdf->AddPage();

// Generate the PDF content based on the received data
$content = '';
foreach ($dataArray as $record) {
    $content .= $record['passport'] . ' | ' . $record['First_Name'] . ' | ' . $record['Last_Name'] . ' | ' . $record['gender'] . '<br>'; // Update this line to include the desired fields from your database table
}

// Output the content to the PDF
$pdf->writeHTML($content);

// Output the PDF as a download
$pdf->Output('table_data.pdf', 'D');
?>
