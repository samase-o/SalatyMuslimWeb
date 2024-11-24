<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Adhkar - Hisn al-Muslim</title>
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
                        <h1>Adhkar - Hisn al-Muslim</h1>                        </div>
                        <style>
                        .cardHeader {
                            color: #651c08;                       
                            padding: 10px; /* Add padding for spacing */
                            }
                        </style>

                        </thead>
                        <tbody>
                        <main>
                        <div class="adhkar-list">
                        <?php
                        // Define an array of adhkar
                        $adhkar = array(
                        "أذكار الصباح" => array(
                            "اللّهُـمَّ بِكَ أَصْبَحْنا وَبِكَ أَمْسَيْنا، وَبِكَ نَحْيَا وَبِكَ نَمُوتُ وَإِلَيْكَ النُّشُور.",
                            "اللّهُـمَّ ما أَصْبَحَ بي مِـنْ نِعْـمَةٍ أَو بِأَحَـدٍ مِـنْ خَلْـقِكَ فَمِـنْكَ وَحْـدَكَ لا شريكَ لَـك، فَلَـكَ الْحَمْـدُ وَلَـكَ الشُّكْـر.",
                            "اللّهُـمَّ عافِـني في بَدَنـي، اللّهُـمَّ عافِـني في سَمْـعي، اللّهُـمَّ عافِـني في بَصَـري، لا إِلهَ إِلاّ أَنْـتَ.",
                            "سُبْحـانَ اللهِ وَبِحَمْـدِهِ.",
                            "اللّهُـمَّ عَجِّـلْ لي في قَضـاءِ حاجَتـي هذِهِ، يا رَبِّ الْعـالَمين."
                        ),
                        "أذكار المساء" => array(
                            "اللّهُـمَّ بِكَ أَمْسَيْنا وَبِكَ أَصْبَحْنا، وَبِكَ نَحْيَا وَبِكَ نَمُوتُ وَإِلَيْكَ النُّشُور.",
                            "اللّهُـمَّ عافِـني في بَدَنـي، اللّهُـمَّ عافِـني في سَمْـعي، اللّهُـمَّ عافِـني في بَصَـري، لا إِلهَ إِلاّ أَنْـتَ.",
                            "أمْسَـينا وَأَمْسى الـمُـلكُ لله، وَالحَمدُ لله، لا إِلهَ إِلاّ اللّهُ وَحدَهُ لا شَريكَ لهُ، لهُ المُـلكُ وَلهُ الحَمْـد، وهُوَ على كلّ شَيءٍ قَدير.",
                            "اللّهُـمَّ إِنِّي أَعـوذُ بِكَ مِنَ الكُـفرِ وَالفَـقْرِ، وَأَعـوذُ بِكَ مِنْ عَذابِ القَـبْرِ، لا إِلهَ إِلاّ أَنْـتَ.",
                            "سُبْحـانَ اللهِ وَبِحَمْـدِهِ."
                        ),
                        "أذكار الصلاة" => array(
                            "سُبْحـانَكَ اللّهُـمَّ وَبِحَمدِك، أَشْهَـدُ أَنْ لا إِلهَ إِلاّ أَنْتَ أَسْتَغْفِرُكَ وَأَتوبُ إِلَـيكَ.",
                            "اللّهُـمَّ افْتَـحْ لي أَبْوابَ رَحْمَتـِك.",
                            "أَعـوذُ بِاللهِ مِنَ الشَّيْـطانِ الرَّجـيم.",
                            "بِسْمِ اللهِ الرَّحْمنِ الرَّحِيـم.",
                            "اللّهُـمَّ إِنِّـي أَعـوذُ بِرِضـاكَ مِنْ سَخَطِـكَ، وَبِمعـافاتِـكَ مِنْ عُقوبَـتِكَ، وَأَعـوذُ بِكَ مِنْـكَ، لا أُحْصـي ثَنـاءً عَلَـيْكَ، أَنْـتَ كَمـا أَثْنَـيْتَ عَلـى نَفْسِـكَ."
                        ),
                    );

                    // Display adhkar
                    foreach ($adhkar as $title => $items) {
                        echo "<div class='adhkar'>";
                        echo "<h2>".$title."</h2>";
                        foreach ($items as $text) {
                        echo "<p>".$text."</p>";
                        }
                        echo "</div>";
                        echo "<hr>"; // Add a horizontal line after each category
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