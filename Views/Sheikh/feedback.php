<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Feedback</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body style="background-color: #fff8dc;">




    <div class="container mt-5">
        <div class="card">
            <div class="card-body">
                <h2 class="card-title">Feedback Form</h2>
                <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
                    <div class="form-group">
                        <label for="name">Name:</label>
                        <input type="text" class="form-control" id="name" name="name" required>
                    </div>
                    <div class="form-group">
                        <label for="email">Email:</label>
                        <input type="email" class="form-control" id="email" name="email" required>
                    </div>
                    <div class="form-group">
                        <label for="message">Message:</label>
                        <textarea class="form-control" id="message" name="message" rows="5" required></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary" style="background-color: #651c08;">Submit</button>
                </form>
            </div>
        </div>

        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $name = $_POST["name"];
            $email = $_POST["email"];
            $message = $_POST["message"];

            $servername = "localhost";
            $username = "root"; 
            $password = "";
            $dbname = "islamic";

            $conn = new mysqli($servername, $username, $password, $dbname);

            if ($conn->connect_error) {
                die("Connection failed: " . $conn->connect_error);
            }

            //insert data in the table
            $sql = "INSERT INTO feedbacktable (name, email, message) VALUES ('$name', '$email', '$message')";

            if ($conn->query($sql) === TRUE) {
                echo "<div class='alert alert-success mt-3' role='alert'>Thank you for your feedback, $name!</div>";
            } else {
                echo "<div class='alert alert-danger mt-3' role='alert'>Error: " . $conn->error . "</div>";
            }

            $conn->close();
        }
        ?>
    </div>

    <!-- Bootstrap JavaScript (optional, only include if needed) -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>