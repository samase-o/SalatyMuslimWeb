<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Islamic Articles</title>
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
                    <a href="#">
                        <span class="icon">
                            <i class="fa-solid fa-mosque"></i>
                        </span>
                        <span class="title">Salaty</span>
                    </a>
                </li>

                <li>
                    <a href="#">
                        <span class="icon">
                            <i id="iconn" class="fa-solid fa-house-chimney"></i>
                        </span>
                        <span class="title">Home</span>
                    </a>
                </li>

                <li>
                    <a href="#">
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
                    <a href="http://www.localhost/rasha/guidance/guidance.php">
                        <span class="icon">
                            <i class="fa-solid fa-location-dot"></i>
                        </span>
                        <span class="title">Guidance</span>
                    </a>
                </li>

                <li>
                    <a href="http://www.localhost/rasha/feedback/sendFeedback.php">
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
                    <a href="#">
                        <span class="icon">
                            <i class="fa-solid fa-user"></i>
                        </span>
                        <span class="title">Profile</span>
                    </a>
                </li>

                <li>
                    <a href="#">
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
                        <h6>Islamic Articles : </h6>
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
                                <?php
                                // Define an array of articles
                                $articles = array(
                                array(
                                "title" => "Fasting children and the role of the parents",
                                "content" => "The practice and spirit of fasting should be engrained in children so that it comes natural and effortless for them as they reach adulthood.

                                The month of Ramadan is a time of excitement, socializing, and devotion. As we take care of the spiritual and social part of ourselves during this special month, it is important to remember to also focus some time on our children. They should not merely be on the sidelines, watching as all the events pass by; they should instead be active and central players in all that occurs, and take advantage of this blessed time.",
                                "author" => "Admin",
                                "date" => "May 1, 2024"
                                ),
                                array(
                                "title" => "The Life of Prophet Muhammad (PBUH)",
                                "content" => "Prophet Muhammad (peace be upon him) was born in Mecca in the year 570. He received his first revelation ...",
                                "author" => "Admin",
                                "date" => "May 2, 2024"
                                ),
                                    // Add more articles as needed
                                );

                                // Display articles
                                foreach ($articles as $article) {
                                echo "<h2>".$article["title"]."</h2>";
                                echo "<p>".$article["content"]."</p>";
                                echo "<p>Author: ".$article["author"]." | Date: ".$article["date"]."</p>";
                                echo "<hr>";
                            }
                            ?>
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