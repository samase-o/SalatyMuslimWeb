<?php
    /*session_start();
    if (!isset($_SESSION["userRole"]))
    {
        header("location:../Auth/login.php ");
    } 
    else 
    {
        if ($_SESSION["userRole"] != "Admin")
        {
            header("location:../Auth/login.php ");
        }
    }*/

    require_once '../../Controllers/PersonController.php';
    require_once '../../Models/user.php';
    require_once '../../Models/admin.php';

    $admin = new Admin();
    $persons = $admin->viewPersons();
    $deleteMsg = false;
    if (isset($_POST["delete"])) 
    {
        if (!empty($_POST["username"])) 
        {
            if ($admin->deleteUser($_POST["username"])) 
            {
                $deleteMsg = true;
                $persons = $admin->viewPersons();
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
    <link rel="stylesheet" href="assets/css/userList.css">
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
                    <a href="home.html">
                        <span class="icon">
                            <i id ="iconn" class="fa-solid fa-house-chimney"></i>
                        </span>
                        <span class="title">Home</span>
                    </a>
                </li>

                <li>
                    <a href="usersList.php">
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

            <!-- ================ Order Details List ================= -->
            <div class="details">
                <div class="usersList">
                    <div class="cardHeader">
                        <h2>Users List</h2>
                        <a href="addUser.php" class="btn">Add User</a>
                    </div>

                    <?php
                    if (count($persons) == 0)
                    {
                    ?>
                        <div class="alert-div">
                            <span class="alert">No Available Users</span>
                        </div>
                    <?php
                    }
                    else 
                    {
                    ?>
                        <table>
                        <thead>
                            <tr>
                                <td>Username</td>
                                <td>Name</td>
                                <td>Email</td>
                                <td>Role</td>
                                <td>Update</td>
                                <td>Delete</td>
                            </tr>
                        </thead>

                        <tbody>
                            <?php

                            foreach ($persons as $person) {
                            ?>
                            <tr>
                                <td><?php echo $person["username"] ?></td>
                                <td><?php echo $person["name"] ?></td>
                                <td><?php echo $person["email"] ?></td>
                                <td><?php echo $person["role"] ?></td>
                                <td class="deletebtn">
                                    <form action="changeRole.php" method="POST">
                                        <input type="hidden" name="username" value="<?php echo $person["username"] ?>">
                                        <button type="submit" name="update" class="btn btn-outline-danger">
                                            Update
                                        </button>
                                    </form>
                                </td>
                                <td class="deletebtn">
                                    <form action="usersList.php" method="POST">
                                    <input type="hidden" name="username" value="<?php echo $person["username"] ?>">
                                    <button type="submit" name="delete" class="btn btn-outline-danger">
                                        Delete
                                    </button>
                                    </form>
                                </td>
                                <!--<td class="updatebtn"><a href="#">Delete</a></td>-->
                            </tr>
                            <?php
                                }
                            ?>
                        </tbody>
                    </table>
                    <?php
                        }
                    ?>
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