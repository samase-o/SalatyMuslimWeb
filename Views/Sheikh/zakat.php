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
    $uername = $_SESSION["username"];

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>zakat calculator</title>
    <script src="https://kit.fontawesome.com/fe73f000fd.js" crossorigin="anonymous"></script>
    <!-- ======= Styles ====== -->
    <link rel="stylesheet" href="assets/css/zakat .css?v=<?php $version?>">

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
                    <a href="home.php">
                        <span class="icon">
                            <i id ="iconn" class="fa-solid fa-house-chimney"></i>
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
                    <a  class="a"> Zakat calculator</a> <!--NOTTTTTTTTTTTTTTTTTTTTTTTTTTTTTTTTTTT-->
                   
                </div>
                 
            </div>
        
 <!--zakat-->
 <script>
</script>
<div class="card">
    <form method ="post" >
        <div>
    <h1> total mony</h1>
    <input type="number" name="moneyinput">
    <h1> click here</h1>
    <button calc="">calculate</button>
    <!--<h1>your zakat</h1>-->
   <!-- <input type="text"  name= "resultinput1" id="result">-->
</div>
   <!-- </form>-->
   <!-- <form id="f2">-->

    <div>
    <h1> total gold</h1>
    <input type="number" name="goldinput" >
    <h1> cost of one gram of gold</h1>
    <input type="number"  name="cgoldinput" >
    <h1> click here</h1>
    <button calc="">calculate</button>
    
    <!--<h1>your zakat</h1>-->
   <!-- <input type="text"  name= "resultinput1" id="result">-->
</div>
<!--</form>-->
<!--<form id="f3">-->
    <div>
    <h1> total selver</h1>
    <input type="number" name="selverinput" >
    <h1> cost of one gram of gold </h1>
    <input type="number" name="cselverinput" >
    <h1> click here</h1>
    <button calc="" class="bu">calculate</button>
    <!--<h1>your zakat</h1>-->
   <!-- <input type="text"  name= "resultinput1" id="result">-->
   <?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Check if the form fields are set and not empty
    if (isset($_POST['moneyinput']) || (isset($_POST['goldinput']) && isset($_POST['cgoldinput'])) || (isset($_POST['selverinput']) && isset($_POST['cselverinput']))) {
        $money = $_POST['moneyinput'];
        $gold = $_POST['goldinput'];
        $cgold = $_POST['cgoldinput'];
        $selver = $_POST['selverinput'];
        $cselver = $_POST['cselverinput'];

        // Perform calculations
        if (!empty($_POST['moneyinput'])) {
            $result1 = $money * (2.5 / 100);
            echo '<div class="alert alert-success" role="alert">';
            echo "Your money is " . $money . " and your zakat is " . $result1 . "<br>";
            echo '</div>';
        }

        if (!empty($_POST['goldinput']) && !empty($_POST['cgoldinput'])) {
            $result2 = ($cgold * $gold) / 40;
            echo '<div class="alert alert-success" role="alert">';
            echo "Your amount of gold in gram is " . $gold . " and your zakat is " . $result2 . "<br>";
            echo '</div>';
        }

        if (!empty($_POST['selverinput']) && !empty($_POST['cselverinput'])) {
            $result3 = ($cselver * $selver) / 40;
            echo '<div class="alert alert-success" role="alert">';
            echo "Your amount of silver in grams is " . $selver . " and your zakat is " . $result3 . "<br>";
            echo '</div>';
        }
    } else {
        echo '<div class="alert alert-danger" role="alert">';
        echo 'Values are empty';
        echo '</div>';
    }
} else {
    echo '<div class="alert alert-warning" role="alert">';
    echo 'Values not sent';
    echo '</div>';
}

?>

</div>
</form>
</div>
</div>
        
            <!-- =======================QURAN Cards ================== -->
           
    <!-- =========== Scripts =========  -->
    <script src="search.js"></script>

    <!-- ====== ionicons ======= -->
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
</body>

</html>
        
        