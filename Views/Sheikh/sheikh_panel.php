<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sheikh Panel</title>
</head>
<body>
    <h1>Sheikh Panel</h1>
    <?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "islamic";

    $conn = new mysqli($servername, $username, $password, $dbname);

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $sql = "SELECT id, username, fatwa, reply FROM fatwa";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
            echo "ID: " . $row["id"]. " - Name: " . $row["username"]. " - Fatwa: " . $row["fatwa"]. "<br>";
            if (!empty($row["reply"])) {
                echo "Sheikh's Reply: " . $row["reply"] . "<br>";
            } else {
                echo "Sheikh's Reply: Not answered yet<br>";
            }
            // Add a form for the user to provide their own answer
            echo "<form action='user_reply.php' method='POST'>";
            echo "<input type='hidden' name='id' value='" . $row["id"] . "'>";
            echo "<label for='user_reply'>Your Reply:</label><br>";
            echo "<textarea id='user_reply' name='user_reply' rows='4' cols='50'></textarea><br>";
            echo "<input type='submit' value='Submit Reply'>";
            echo "</form>";
            echo "<hr>";
        }
    } else {
        echo "No questions yet.";
    }

    $conn->close();
    ?>
</body>
</html>