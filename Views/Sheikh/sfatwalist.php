<?php

session_start();
    if (!isset($_SESSION["userRole"]))
    {
        header("location:../Auth/login.php ");
    } 
    else 
    {
        if ($_SESSION["userRole"] != "Sheikh")
        {
            header("location:../Auth/login.php ");
        }
    }

// Database connection details
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "islamic";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Class to handle fatwa addition and display
class Fatwa {
    private $conn;

    public function __construct($conn) {
        $this->conn = $conn;
    }

    public function getUnansweredFatwas() {
        $sql = "SELECT * FROM fatwa0 WHERE answered = 0";
        $result = $this->conn->query($sql);

        // Check if query execution was successful
        if ($result) {
            if ($result->num_rows > 0) {
                $fatwas = array();
                while ($row = $result->fetch_assoc()) {
                    $fatwas[] = $row;
                }
                return $fatwas;
            } else {
                return false; // Return false if no unanswered fatwas found
            }
        } else {
            return null; // Return null if query execution fails
        }
    }

    public function addFatwaReply($fatwaId, $reply) {
        $sql = "UPDATE fatwaa SET answered = 1, reply = ? WHERE id = ?";
        $stmt = $this->conn->prepare($sql);
        $stmt->bind_param("si", $reply, $fatwaId);
        if ($stmt->execute()) {
            return true;
        } else {
            return false;
        }
    }
}

// Create a Fatwa object
$fatwa = new Fatwa($conn);

// Check if user is logged in and has the "sheki" role
$is_sheki = true; // Replace with your logic to check user login and role

// ... (previous code)

// Check if form is submitted and user is sheki
if (isset($_POST['submit']) && $is_sheki) {
    $fatwaId = $_POST['fatwaId'];
    $reply = $_POST['reply'];

    if ($fatwa->addFatwaReply($fatwaId, $reply)) {
        echo "Reply added successfully!";
    } else {
        echo "Error adding reply!";
    }
}

// Get all unanswered fatwas
$unansweredFatwas = $fatwa->getUnansweredFatwas();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fatwa Reply (Sheki)</title>
    <link rel="stylesheet" href="assets/css/sfatwalist.css">
</head>
<body>
    <h2>Fatwa Reply (Sheki)</h2>
    <?php if ($is_sheki) : ?>
        <button onclick="displayUnansweredFatwas()">Display Unanswered Fatwas</button>
        <div id="unanswered-fatwas">
            <?php
            if ($unansweredFatwas) {
                foreach ($unansweredFatwas as $fatwa) {
                    echo "<div class='fatwa'>";
                    echo "<h3>" . $fatwa['question'] . "</h3>";
                    //echo "<p>" . $fatwa['details'] . "</p>";
                    echo "<form action='' method='post'>";
                    echo "<input type='hidden' name='fatwaId' value='" . $fatwa['id'] . "'>";
                    echo "<label for='reply'>Reply:</label>";
                    echo "<textarea name='reply' id='reply' rows='10' required></textarea><br><br>";
                    echo "<input type='submit' name='submit' value='Add Reply'>";
                    echo "</form>";
                    echo "</div>";
                }
            } else {
                echo "No unanswered fatwas found.";
            }
            ?>
        </div>
    <?php else : ?>
        <p>You are not authorized to reply to fatwas.</p>
    <?php endif; ?>
</body>
</html>
