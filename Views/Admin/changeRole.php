<?php

    /*session_start();
    if (!isset($_SESSION["userRole"]))
    {
        header("location:../Auth/login.php ");
    }
    else
    {
        if ($_SESSION["userRole"] != "Admin") {
        header("location:../Auth/login.php ");
        }
    }*/

    require_once '../../Controllers/PersonController.php';
    require_once '../../Controllers/UserController.php';
    require_once '../../Models/user.php';
    require_once '../../Models/admin.php';

    $admin = new Admin();
    
    if (isset($_POST["update"])) 
    {
        if (!empty($_POST['role']))
        {
            if ($admin->changeRole($_POST["username"], $_POST['role'])) 
            {
                header("location: usersList.php");
            }
        }
    }

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

            <form action="changeRole.php" method="POST">
                <div id="title">Change Role</div>


                <div>
                <label for="username"><span class="fa-solid fa-1"></span></label>
                <span class = "number">Admin</span>
                </div>

                <div>
                    <label for="name"><span class="fa-solid fa-2"></span></label>
                    <span class = "number">Regular</span>
                    
                </div>
                
                <div>
                    <label for="email"><span class="fa-solid fa-3"></span></label>
                    <span class = "number">Sheikh</span>
                </div>

                <div>
                    <label for="role2"><span class="fa-solid fa-users-line"></span></label>
                    <input type="hidden" name="username" value="<?php echo $_POST["username"] ?>">
                    <input id="role" name= "role" type="text" required placeholder = "Enter the number of the required rule">
                </div>

               

                <input name = "update" id="signup" type="submit" value="Update">
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