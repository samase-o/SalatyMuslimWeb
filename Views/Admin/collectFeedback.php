<?php
require('fpdf186\fpdf.php'); // Include the PDF library

// Create a new PDF instance
$pdf = new FPDF();
$pdf->AddPage();

// get data 
$servername = "localhost";
$username = "root"; 
$password = "";
$dbname = "islamic"; 

 $conn = new mysqli($servername, $username, $password, $dbname);

 if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

 $sql = "SELECT * FROM feedbacktable";
$result = $conn->query($sql);

// Check if any feedback entries
if ($result->num_rows > 0) {
    // Add title to the PDF
    $pdf->SetFont('Arial', 'B', 16);
    $pdf->Cell(0, 10, 'Feedback Report', 0, 1, 'C');
    $pdf->Ln(10); // Add some space
    
    // Loop over the feedback data and add it to the PDF
    while ($row = $result->fetch_assoc()) {
        $pdf->Cell(0, 10, 'User: ' . $row['name'], 0, 1);
        $pdf->Cell(0, 10, 'Email: ' . $row['email'], 0, 1);
        $pdf->Cell(0, 10, 'Message: ' . $row['message'], 0, 1);
        $pdf->Ln(10); // Add some space between feedback entries
    }
} else {
    $pdf->SetFont('Arial', '', 12);
    $pdf->Cell(0, 10, 'No feedback entries found.', 0, 1);
}

// Close connection
$conn->close();

// Output the PDF
$pdf->Output('Feedback_Report.pdf', 'D'); // Output as a download
?>