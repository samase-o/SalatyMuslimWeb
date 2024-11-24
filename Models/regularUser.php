<?php

require_once '../../Models/user.php';
require_once '../../Controllers/DBController.php';
require_once '../../Controllers/UserController.php';

class RegularUser extends User
{
    
    
    
    
    public function __construct($username, $name, $email, $password) {
        $this->username = $username;
        $this->name = $name;
        $this->email = $email;
        $this->password = $password;
        $this->roleId = 2;
    }
    
    public function register(User $user)
    {
        $this->db=new DBController;
        $mysqli="SELECT username FROM users";
        $conn = $this->db->returnConnection();
        $result=mysqli_query($conn,$mysqli);
        while($row=mysqli_fetch_assoc($result))
        { 
            if($user->getUsername()==$row["username"])
            {
                $_SESSION["errMsg"]="Username Already Exist.";
                mysqli_free_result($result);
                mysqli_close($conn);
                return false;
            }
        }

        if (session_status() == PHP_SESSION_NONE) 
        {
            session_start();
        }
        $username = $user->getUsername();
        $name = $user->getName();
        $email = $user->getEmail();
        $password = $user->getPassword();
        $query="insert into users values ('$username','$name','$email','$password',2)";
        $result2=$this->db->insert($query);
        if($result2!=false)
        {
            $_SESSION["username"]=$user->getUsername();
            $_SESSION["name"]=$user->getName();
            $_SESSION["userRole"]="User";
            mysqli_close($conn);
            return true;
        }
        mysqli_close($conn); // Close the database connection
        return false;
    }



   

}
?>