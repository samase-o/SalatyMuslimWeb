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
                        <h1>Islamic Duaa :</h1>                        
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
                        <div class="duaa-list">
                        <?php
                        // Define an array of duaas
                        $duaas = array(
                            "Duaa for morning:" => "اللهم بك أصبحنا، وبك أمسينا، وبك نحيا، وبك نموت، وإليك المصير",
                            "Duaa for evening:" => "اللهم بك أمسينا، وبك أصبحنا، وبك نحيا، وبك نموت، وإليك المصير",
                            "Duaa for seeking guidance:" => "اللهم اهدني فيمن هديت، وعافني فيمن عافيت، وتولني فيمن توليت، وبارك لي فيما أعطيت",
                            "Duaa for forgiveness:" => "ربنا ظلمنا أنفسنا وإن لم تغفر لنا وترحمنا لنكونن من الخاسرين",
                            "Duaa for patience:" => "اللهم اجعلني صبوراً واجعلني شاكراً واجعلني في عينيك واجعلني لك واجعلني عليك ثقيلاً",
                            "Duaa for success:" => "اللهم إني أسألك علماً نافعاً، ورزقاً طيباً، وعملاً متقبلاً",
                            "Duaa for protection from evil:" => "بسم الله الذي لا يضر مع اسمه شيء في الأرض ولا في السماء وهو السميع العليم",
                            "Duaa for good health:" => "اللهم إني أسألك العافية في الدنيا والآخرة",
                            "Duaa for relief from distress:" => "اللهم رحمتك أرجو فلا تكلني إلى نفسي طرفة عين وأصلح لي شأني كله لا إله إلا أنت",
                            // Add more duaas as needed
                        );

                        // Display duaas
                        foreach ($duaas as $title => $duaa) {
                        echo "<div class='duaa'>";
                        echo "<h2>".$title."</h2>";
                        echo "<p>".$duaa."</p>";
                        echo "</div>";
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