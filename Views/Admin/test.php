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
    require_once '../../Models/user.php';
    require_once '../../Models/admin.php';

    $user = new User();
    $user = $user->viewInfo();

?>





<form action="changeRole.php" method="POST">
                <div id="title">Change Role</div>


                <div>
                <label for="username"><span class="fa-solid fa-id-card-clip"></span></label>
                <input id="username" name="username" type="text" required readonly value='<?php echo $info["username"] ?>'>
                </div>

                <div>
                    <label for="name"><span class="fa-solid fa-user"></span></label>
                    <input id="name" name = "name" type="text" maxlength="20" readonly placeholder='<?php echo $info["name"] ?>'>
                </div>
                
                <div>
                    <label for="email"><span class="fa-solid fa-at"></span></label>
                    <input id="email" name= "email" type="email" required readonly placeholder='<?php echo $info["email"] ?>'>
                </div>

                <div>
                <label for="password"><span class="fa-solid fa-lock"></span></label>
                <input id="password" name = "password" type="password"  readonly required minlength="8" maxlength="30" placeholder='<?php echo $info["password"] ?>'>
                </div>

                <div>
                    <label for="role2"><span class="fa-solid fa-users-line"></span></label>
                    <select class = "role2" name="role2" id="role2">
                        <?php
                            foreach ($roles as $role) {

                            ?>

                                <option value="<?php echo $role["id"] ?>"><?php echo $role["name"] ?></option>
                            <?php

                            }


                        ?>
                    </select>
                </div>

                <input name = "update" id="signup" type="submit" value="Update">
            </form>