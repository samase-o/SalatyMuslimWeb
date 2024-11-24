<?php
    /*if (session_status() == PHP_SESSION_NONE) 
    {
        header("location: ../Auth/login.php");
    }*/
    require_once '../../Models/role.php';
    require_once '../../Models/user.php';
    require_once '../../Models/admin.php';
    require_once '../../Controllers/DBController.php';
    $errMsg = "";

    $personController = new Admin();
    $roles = $personController->getRole();
    if(isset($_POST['username']) && isset($_POST['name']) && isset($_POST['email']) && isset($_POST['password']) && isset($_POST['role']))
    {
        if(!empty($_POST['username']) && !empty($_POST['name']) && !empty($_POST['email']) && !empty($_POST['password']) && !empty($_POST['role']))
        {
            $person = new User($_POST['username'], $_POST['name'], $_POST['email'], $_POST['password'], $_POST['role']);

            if ($personController->addUser($person)) {
                header("location: usersList.php");
            } else {
                $errMsg = "Something went wrong... try again";
            }
        }
    }




    $errMsg = "";


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Responsive Admin Dashboard | Korsat X Parmaga</title>
    <script src="https://kit.fontawesome.com/fe73f000fd.js" crossorigin="anonymous"></script>
    <!-- ======= Styles ====== -->
    <link rel="stylesheet" href="assets/css/addUser.css">
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
                            <i id ="iconn" class="fa-solid fa-house-chimney"></i>
                        </span>
                        <span class="title">Home</span>
                    </a>
                </li>

                <li>
                    <a href="usersList.html">
                        <span class="icon">
                            <i class="fa-solid fa-users"></i>
                        </span>
                        <span class="title">Users</span>
                    </a>
                </li>

                <li>
                    <a href="#">
                        <span class="icon">
                            <i class="fa-solid fa-comments"></i>
                        </span>
                        <span class="title">Fatwas</span>
                    </a>
                </li>

                <li>
                    <a href="#">
                        <span class="icon">
                            <i class="fa-solid fa-question"></i>
                        </span>
                        <span class="title">Feedbacks</span>
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
                    <ion-icon name="menu-outline"></ion-icon>
                </div>

                <div class="search">
                    <label>
                        <input type="text" placeholder="Search here">
                        <i class="fa-solid fa-magnifying-glass"></i>
                    </label>
                </div>
            </div>

            <!-- ======================= Form ================== -->

            <form action="addUser.php" method="POST">
        <div id="title">Add Person</div>


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

        <div>
            <label for="role"><span class="fa-solid fa-users-line"></span></label>
            <select name="role" id="role">
                <?php
                    foreach ($roles as $role) {

                    ?>

                        <option value="<?php echo $role["id"] ?>"><?php echo $role["name"] ?></option>
                    <?php

                    }


                ?>
            </select>
        </div>

        <input id="signup" type="submit" value="Add User">
      </form>
            
        </div>
    </div>

    <!-- =========== Scripts =========  -->
    <script src="assets/js/main.js"></script>

    <!-- ====== ionicons ======= -->
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
</body>

</html>