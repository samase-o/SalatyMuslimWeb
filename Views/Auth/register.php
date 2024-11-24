<?php

  require_once '../../Models/regularUser.php';
  $errMsg = "";

  if (isset($_POST['submit'])) {
      if (!empty($_POST['username']) && !empty($_POST['name']) && !empty($_POST['email']) && !empty($_POST['password']))
      {
        $regular = new RegularUser(($_POST['username']), ($_POST['name']), ($_POST['email']), ($_POST['password']));
        $registrationResult = $regular->register($regular);
        if ($registrationResult === true) 
        {
          header("location: ../User/home.php");
          exit;
        } 
        else
        {
          $errMsg = $_SESSION["errMsg"];
        }
      } 
      else 
      {
        $errMsg = "Please fill in all the required fields.";
      }
  }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Movienary</title>
    <link rel="stylesheet" href="register.css">
    <script src="https://kit.fontawesome.com/fe73f000fd.js" crossorigin="anonymous"></script>
</head>
<body>
    <form action="register.php" method="POST">
        <div id="title">Sign Up</div>

        <?php
          if($errMsg!="")
          {
            ?>
            <div class="alert-div" id = "on">
              <span class="alert" id="on1"><?php echo $errMsg ?></span>
            </div>
            <?php
          }
        ?>

        <div>
          <label for="username"><span class="fa-solid fa-id-card-clip"></span></label>
          <input id="username" name="username" type="text" required placeholder="Username">
        </div>

        <div>
            <label for="name"><span class="fa-solid fa-user"></span></label>
            <input id="name" name = "name" type="text" maxlength="20" placeholder="Name">
        </div>
        
        <div>
            <label for="email"><span class="fa-solid fa-at"></span></label>
            <input id="email" name= "email" type="email" required placeholder="Email">
        </div>

        <div>
          <label for="password"><span class="fa-solid fa-lock"></span></label>
          <input id="password" name = "password" type="password" required minlength="8" maxlength="30" placeholder="Password">
        </div>

        <input name ="submit" id="signup" type="submit" value="Sign Up">
        
        <div id="login">
          <p>Already have an account, <i><a href="login.php" target="_blank">Long in.</a></i></p>
        </div>
      </form>
</body>
</html>