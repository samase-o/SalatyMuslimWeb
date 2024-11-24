<?php
// Connect to your MySQL database
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "islamic";

$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Function to save prayer progress to the database
function savePrayerProgress($username0, $prayerName) {
    global $conn;
    $sql = "INSERT INTO prayer_progress (username, prayer_name, completed) VALUES ('$username0', '$prayerName', 1) ON DUPLICATE KEY UPDATE completed = 1";
    if ($conn->query($sql) === TRUE) {
        return true; // Return true if progress saved successfully
    } else {
        return false; // Return false if there was an error
    }
}

// Check if form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    session_start(); // Start session to store user ID

    if(isset($_POST['prayers'])) {
        $prayers_completed = $_POST['prayers'];
        $username0 = $_SESSION['username']; // You can change this to your user's ID
        $success = true; // Variable to track if all progress was saved successfully
        foreach ($prayers_completed as $prayer) {
            if (!savePrayerProgress($username0, $prayer)) {
                $success = false; // If any progress fails, set success to false
                break; // Exit loop early if there's an error
            }
        }
        if ($success) {
            echo "All prayer progress saved successfully";
        } else {
            echo "Error: Prayer progress could not be saved";
        }
    }
}

$conn->close();
?>