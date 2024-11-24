<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Form</title>
</head>
<body>
    <h1>User Form</h1>
    <?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "islamic";

    $conn = new mysqli($servername, $username, $password, $dbname);

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $sql = "SELECT id, question, reply FROM fatwa0";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
            echo "Fatwa: " . $row["question"]. "<br>";
            if (!empty($row["reply"])) {
                echo "Sheikh's Reply: " . $row["reply"] . "<br>";
            } else {
                echo "Sheikh's Reply: Not answered yet<br>";
            }
            echo "<hr>";
        }
    } else {
        echo "No questions yet.";
    }

    $conn->close();
    ?>
    <h2>Submit Question</h2>
    <form action="process_question.php" method="POST">
        <label for="username">Your Name:</label><br>
        <input type="text" id="username" name="username"><br>
        <label for="question">Your Question:</label><br>
        <textarea id="question" name="question" rows="4" cols="50"></textarea><br>
        <input type="submit" value="Submit">
    </form>
</body>
</html>