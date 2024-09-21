<?php
// Database connection details
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "bus_booking_system";

// Create a new PDO instance
$conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);

// Prepare SQL query to fetch data from the table
$sql = "SELECT * FROM registration";
$stmt = $conn->prepare($sql);
$stmt->execute();

// Fetch all rows from the table
$rows = $stmt->fetchAll(PDO::FETCH_ASSOC);

//var_dump($rows);
//die();

$csvContent = '';
if (!empty($rows)) {
    // Get column names as header row
    $headerRow = array_keys($rows[0]);
    $csvContent .= implode(',', $headerRow) . "\n";

    // Iterate through each row and add it to the CSV content
    foreach ($rows as $row) {
        $csvContent .= implode(',', $row) . "\n";
    }
}

// Set headers for file download
header('Content-Type: application/csv');
header('Content-Disposition: attachment; filename="table.csv"');

// Output the CSV content to the browser

?>