<?php

  require_once '../../Models/user.php';
  require_once '../../Controllers/UserController.php';
  $errMsg="";

  if(isset($_POST['username']) && isset($_POST['password']))
  {
    if(!empty($_POST['username']) && !empty($_POST['password']))
    {
      $username = $_POST['username'];
      $password = $_POST['password'];
      $auth = new UserController;
      $auth->login($username, $password);
      if(!$auth->login($username, $password))
      {
        if (session_status() == PHP_SESSION_NONE) {
          session_start();
        }
        $errMsg = $_SESSION["errMsg"];
      }
      else
      {
        if (session_status() == PHP_SESSION_NONE) {
          session_start();
        }
        if($_SESSION["userRole"]=="Admin")
          {
            $username = $_POST['username'];
            header("location: ../Regualr User/home.php");
          }
        else if($_SESSION["userRole"]=="Regular User")
          {
            $username = $_POST['username'];
            header("location: ../Regular User/home.php");
          }
        else
        {
          $username = $_POST['username'];
          header("location: ../Sheikh/home.php");
        }
      }
    }
  }
  /*else
  {
    $errMsg = "Please fill all the required fields.";
  }*/


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Movienary</title>
    <link rel="stylesheet" href="loginn.css">
    <script src="https://kit.fontawesome.com/fe73f000fd.js" crossorigin="anonymous"></script>
</head>
<body>
    <form action="login.php" method="POST">
        <div id="title">Log In</div>

        <?php
          if($errMsg!="")
          {
            ?>
            <div class="alert-div">
              <span class="alert"><?php echo $errMsg ?></span>
            </div>
            <?php
          }
        ?>

        <div>
          <label for="username"><span class="fa-solid fa-user"></i></span></label>
          <input id="username" name="username" type="text" required placeholder="Username">
        </div>
        
        <div>
          <label for="password"><span class="fa-solid fa-lock"></span></label>
          <input id="password" name="password" type="password" required minlength="8" maxlength="30" placeholder="Password">
        </div>
        
        <input id="login" type="submit" value="Log In">

        <div id="signup">
          <p>Don't have an account, <i><a href="signup.php" target="_blank"> Sign Up.</a></i></p>
        </div>

      </form>
</body>
</html>