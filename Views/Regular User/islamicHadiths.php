<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Islamic Hadiths</title>
    <script src="https://kit.fontawesome.com/fe73f000fd.js" crossorigin="anonymous"></script>
    <!-- ======= Styles ====== -->
    <link rel="stylesheet" href="assets/css/fatwasList.css">
</head>

<body>
    
    <!-- =============== Navigation ================ -->
    <div class="container">
        <div class="navigation">
            <ul>
                <li>
                    <a href="home.php">
                        <span class="icon">
                            <i class="fa-solid fa-mosque"></i>
                        </span>
                        <span class="title">Salaty</span>
                    </a>
                </li>

                <li>
                    <a href="homr.php">
                        <span class="icon">
                            <i id="iconn" class="fa-solid fa-house-chimney"></i>
                        </span>
                        <span class="title">Home</span>
                    </a>
                </li>

                <li>
                    <a href="islamicHadiths.php">
                        <span class="icon">
                            <i class="fa-solid fa-list-ul"></i>
                        </span>
                        <span class="title">Hadiths</span>
                    </a>
                </li>

                <li>
                    <a href="fatwasList.php">
                        <span class="icon">
                            <i class="fa-solid fa-comments"></i>
                        </span>
                        <span class="title">Fatwas</span>
                    </a>
                </li>

                <li>
                    <a href="../articleListu.php">
                        <span class="icon">
                            <i class="fa-solid fa-newspaper"></i>
                        </span>
                        <span class="title">Articles</span>
                    </a>
                </li>

                <li>
                    <a href="broadcast.php">
                        <span class="icon">
                            <i class="fa-solid fa-tower-broadcast"></i>
                        </span>
                        <span class="title">Broadcast</span>
                    </a>
                </li>

                <li>
                    <a href="guidance.php">
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
                </div>
            </div>

            <!-- ================ Order Details List ================= -->
            <div class="details">
                <div class="usersList">

                    <table>
                        <thead>
                        <div class="cardHeader">
                        <h1>Islamic Hadiths :</h1>                        
                        </div>
                        <style>
                        .cardHeader {
                            color: #651c08;                       
                            font-weight: bold; /* Make the text bold */
                            padding: 10px; /* Add padding for spacing */
                            }
                        </style>

                        </thead>
                        <tbody>
                        <main>
                        <div class="hadiths-list">
                        <?php
                        // Define an array of hadiths with narrators
                        $hadiths = array(
                            array(
                                "text" => "أحب الناس إلى الله تعالى أنفعهم للناس.",
                                "narrator" => "رواه عائشة"
                            ),
                            array(
                                "text" => "من كان يؤمن بالله واليوم الآخر، فليقل خيرًا أو ليصمت.",
                                "narrator" => "رواه البخاري ومسلم"
                            ),
                            array(
                                "text" => "إذا صلّى أحدكم فليجعل بين يديه سدًّا، وليصلم عن يمينه وشماله.",
                                "narrator" => "رواه البخاري ومسلم"
                            ),
                            array(
                                "text" => "المسلم من سلم المسلمون من لسانه ويده.",
                                "narrator" => "رواه البخاري ومسلم"
                            ),
                            array(
                                "text" => "لا تدخلون الجنة حتى تؤمنوا، ولا تؤمنوا حتى تحابوا، أولا أدلكم على شيء إذا فعلتموه تحاببتم؟ أفشوا السلام بينكم.",
                                "narrator" => "رواه مسلم"
                            ),
                            array(
                                "text" => "اللهم إني ظلمت نفسي ظلمًا كثيرًا، ولا يغفر الذنوب إلا أنت، فاغفر لي مغفرةً من عندك، وارحمني إنك أنت الغفور الرحيم.",
                                "narrator" => "رواه البخاري ومسلم"
                            ),
                         // Add more hadiths as needed
                        );

                        // Display hadiths
                        foreach ($hadiths as $hadith) {
                            echo "<div class='hadith'>";
                            echo "<h2>".$hadith["text"]."</h2>";
                            echo "<p>".$hadith["narrator"]."</p>";
                            echo "</div>";
                            echo "<hr>"; // Add a horizontal line after each hadith
                        }
                        ?>
                        </div>
                        </main>
                            <footer>
                                <p>&copy; <?php echo date("Y"); ?> SALATY. All rights reserved.</p>
                            </footer>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

    <!-- =========== Scripts =========  -->
    <script src="assets/js/main.js"></script>

    <!-- ====== ionicons ======= -->
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
</body>

</html>