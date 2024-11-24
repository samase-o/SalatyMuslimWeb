<?php

if (session_status() == PHP_SESSION_NONE) 
    {
        session_start();
    }
    if (!isset($_SESSION["userRole"]))
    {
        header("location:../Auth/login.php ");
    }
    else
    {
        if ($_SESSION["userRole"] != "Regular User" && $_SESSION["userRole"] != "Sheikh")
        {
            header("location:../Auth/login.php ");
        }
    }
    $username0 = $_SESSION["username"];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <script src="https://kit.fontawesome.com/fe73f000fd.js" crossorigin="anonymous"></script>
    <title>Prayer Tracker</title>
    <link rel="stylesheet" href="assets/css/h.css">
</head>
<body>
<div class="container">
        <div class="navigation">
            <ul>
                <li>
                    <a href="#">
                        <span class="icon">
                            <i class="fa-solid fa-mosque"></i>
                        </span>
                        <span class="title">holy_quran</span>
                    </a>
                </li>

                <li>
                    <a href="home.php">
                        <span class="icon">
                            <i id ="iconn" class="fa-solid fa-house-chimney"></i>
                        </span>
                        <span class="title">Home</span>
                    </a>
                </li>

                <li>
                    <a href="home.php">
                        <span class="icon">
                            <i class="fa-solid fa-list-ul"></i>
                        </span>
                        <span class="title">Hadiths</span>
                    </a>
                </li>

                <li>
                    <a href="fatwasList.html">
                        <span class="icon">
                            <i class="fa-solid fa-comments"></i>
                        </span>
                        <span class="title">Fatwas</span>
                    </a>
                </li>

                <li>
                    <a href="fatwasList.html">
                        <span class="icon">
                            <i class="fa-solid fa-newspaper"></i>
                        </span>
                        <span class="title">Articles</span>
                    </a>
                </li>

                <li>
                    <a href="fatwasList.html">
                        <span class="icon">
                            <i class="fa-solid fa-tower-broadcast"></i>
                        </span>
                        <span class="title">Broadcast</span>
                    </a>
                </li>

                <li>
                    <a href="fatwasList.html">
                        <span class="icon">
                            <i class="fa-solid fa-location-dot"></i>
                        </span>
                        <span class="title">Guidance</span>
                    </a>
                </li>

                <li>
                    <a href="feedback.php">
                        <span class="icon">
                            <i class="fa-solid fa-question"></i>
                        </span>
                        <span class="title">Feedbacks</span>
                    </a>
                </li>

                <li>
                    <a href="#">
                        <span class="icon">
                            <i class="fa-solid fa-link"></i>
                        </span>
                        <span class="title">Directory</span>
                    </a>
                </li>

                <li>
                    <a href="profile.php">
                        <span class="icon">
                            <i class="fa-solid fa-user"></i>
                        </span>
                        <span class="title">Profile</span>
                    </a>
                </li>

                <li>
                    <a href="../Auth/signout.php">
                        <span class="icon">
                            <i class="fa-solid fa-arrow-right-from-bracket"></i>
                        </span>
                        <span class="title">Sign Out</span>
                    </a>
                </li>
            </ul>
        </div>

        <!-- ========================= Main ==================== -->
        <div class="main">
            <div class="topbar">
                
                <div class="toggle">
                    
                    <i class="fa-solid fa-bars"></i>
                    <a > HOLY QURAN </a> <!--NOTTTTTTTTTTTTTTTTTTTTTTTTTTTTTTTTTTT-->
                
                       
                </div>
            </div>
    <div class="container2">
        <h1>Prayer Tracker</h1>
        <form id="prayerForm" method="post">
            
            <ul>
                <?php
                    $prayers = array("Fajr", "Dhuhr", "Asr", "Maghrib", "Isha");
                    $username0 = $_SESSION['username']; // You can change this to your user's ID
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

                    // Function to retrieve user's progress from the database
                    function getUserProgress($username0) {
                        global $conn;
                        $progress = array();
                        $sql = "SELECT prayer_name FROM prayer_progress WHERE username = '$username0' AND completed = 1";
                        $result = $conn->query($sql);
                        if ($result->num_rows > 0) {
                            while($row = $result->fetch_assoc()) {
                                $progress[] = $row["prayer_name"];
                            }
                        }
                        return $progress;
                    }

                    $user_progress = getUserProgress($username0);

                    foreach ($prayers as $prayer) {
                        $checked = in_array($prayer, $user_progress) ? 'checked' : '';
                        echo "<li><input type='checkbox' name='prayers[]' value='$prayer' $checked>$prayer</li>";
                    }

                    $conn->close();
                ?>
            </ul>
            <input type="submit" value="Save" class="save">
        </form>
        <div id="status"></div>
    </div>

    <script>
        document.getElementById('prayerForm').addEventListener('submit', function(event) {
            event.preventDefault(); // Prevent the default form submission

            var form = event.target;
            var formData = new FormData(form);

            var xhr = new XMLHttpRequest();
            xhr.open('POST', 'process.php', true);
            xhr.onload = function () {
                if (xhr.status === 200) {
                    document.getElementById('status').innerHTML = xhr.responseText;
                } else {
                    alert('Request failed. Please try again.');
                }
            };
            xhr.send(formData);
        });
    </script>
</body>
</html>