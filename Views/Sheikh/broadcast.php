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
    <script src="https://kit.fontawesome.com/fe73f000fd.js" crossorigin="anonymous"></script>
    <!-- ======= Styles ====== -->
  <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=0.9, maximum-scale=0.9, minimum-scale=0.9">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.0-2/css/all.min.css" integrity="sha256-46r060N2LrChLLb5zowXQ72/iKKNiw/lAmygmHExk/o=" crossorigin="anonymous" />
  <title>إذاعة القرآن الكريم</title>
    <script src="https://kit.fontawesome.com/fe73f000fd.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="assets/css/style.css">
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
                    <a href="fatwasList.php">
                        <span class="icon">
                            <i class="fa-solid fa-comments"></i>
                        </span>
                        <span class="title">Fatwas</span>
                    </a>
                </li>

                <li>
                    <a href="fatwasList.php">
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

            <!-- ======================= Cards ================== -->
          


  <div class="bg">
    <section class="player">
      <div class="container">
        <div class="top-icons">
        </div>
        <div class="img">
          <img src="images/logo.png.jpg" alt="">
        </div>
        <div class="text">
  
       </a>
          <h4>بث مباشر إذاعة القرآن الكريم من القاهرة</h4>
          <h5></h5>
      </div>
        <div class="seek">
          <div class="fill"></div>
        </div>
        <div class="btns">
          <a href="#"><i class="fa fa-retweet"></i></a>
          <a href="#"><i class="fa fa-backward"></i></a>
          <a href="#" class="play-btn" onclick="togglePlayPause()"><i class="fa fa-play"></i></a>
          <a href="#"><i class="fa fa-forward"></i></a>
          <a href="#"><i class="fa fa-random"></i></a>
        </div>
      </div>
      <audio class="song">
        <source src="https://stream.radiojar.com/8s5u5tpdtwzuv" type="audio/mp3"/>
    </audio>

     <div align="center">
<table border="0" width="100%" style="border-collapse: collapse">
<tr><td class="alt1" colspan="3"><b>


    </section>
  </div>
  <script src="js/app.js"></script>



  <style>
              @import url('https://fonts.googleapis.com/css2?family=Nunito:wght@200&display=swap');

    
    .bg {
        display: flex;
        justify-content: center;
        align-items: center;
        height: 100vh;
        background-color: #FFF8DC; 
    }

    
    
    .player {
        width: 80%;
        max-width: 600px; 
        padding: 20px;
        background-color: rgba(255, 255, 255, 0.1);
        border-radius: 30px;
        box-shadow: 0px 0px 20px rgba(0, 0, 0, 0.5);
        text-align: center;
    }

    .player .container {
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
    }

    .btns{
  margin: 40px 0;
  text-align: center;
}
.btns a{
  color: #381307;
  font-size: 1.8em;
  margin: 0 10px;
  transition: all 0.3s ease-in-out;
}
.btns a:hover{
  color: #381307;
}
.btns a:nth-child(1) , .btns a:nth-child(5){
  opacity: 0.6;
} 
.btns a:nth-child(1):hover , .btns a:nth-child(5):hover{
  opacity: 1;
  color: #381307;
} 

.btns .fa-pause{
  border: 2px solid #381307;
  padding: 20px 22px;
  border-radius: 50%;
}
    .btns .fa-play{
        border: 2px solid #381307;
        padding: 20px 22px;
        border-radius: 50%;
    }
    button{
        color: #381307;
        font-size: 1.8em;
        font-weight: bold;
        font-family: 'Nunito', sans-serif;
        text-align: center;
        background: #00c9d0;
        border: none;
        width: 100%;
        height: 70px;
        border-bottom-left-radius: 10px;
        border-bottom-right-radius: 10px;
        cursor: pointer;
        transition: all 0.3s ease-in-out;
    }
    button:hover{
        background: #02a0a5;
    }



</style>


  <script>


          const song = document.querySelector('.song');
const fill = document.querySelector('.fill');

function togglePlayPause(){
  if(song.paused){
    song.play();
    let playBtn = document.querySelector('.play-btn');
    playBtn.innerHTML = '<i class="fa fa-pause"></i>';
  } else{
    song.pause();
    playBtn = document.querySelector('.play-btn');
    playBtn.innerHTML = '<i class="fa fa-play"></i>';
  }
}

song.addEventListener('timeupdate', function(){
  let position = song.currentTime / song.duration;
  fill.style.width = position * 100 + '%';
})




  </script>
    <!-- =========== Scripts =========  -->
   <script src="assets/js/main.js"></script>

<!-- ====== ionicons ======= -->
<script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>

</body>

</html>
