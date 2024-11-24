<?php 

require_once '../../Models/user.php';
require_once '../../Controllers/DBController.php';
class UserController
{
    protected $db;

    
    public function login($username, $pass)
    {
        $this->db=new DBController;
        if($this->db->openConnection())
        {
            $query="select * from users where username='$username' and password ='$pass'";
            $result=$this->db->select($query);
            if($result===false)
            {
                echo "Error in Query";
                return false;
            }
            else
            {
                if(count($result)==0)
                {
                    
                    if (session_status() == PHP_SESSION_NONE) 
                    {
                        session_start();
                    }
                    $_SESSION["errMsg"]="Incorrect emial or password.";
                    $this->db->closeConnection();
                    return false;
                }
                else
                {
                    if (session_status() == PHP_SESSION_NONE) 
                    {
                        session_start();
                    }
                    $_SESSION["username"]=$result[0]["username"];
                    $_SESSION["name"]=$result[0]["name"];
                    if($result[0]["roleId"]==1)
                    {
                        $_SESSION["userRole"]="Admin";
                    }
                    else if($result[0]["roleId"]==2)
                    {
                        $_SESSION["userRole"]="Regular User";
                    }
                    else if($result[0]["roleId"]==3)
                    {
                        $_SESSION["userRole"]="Sheikh";
                    }
                    $this->db->closeConnection();
                    return true;
                }
            }
        }
        else
        {
            echo "Error in Database Connection";
            return false;
        }
    }

    public function signOut()
    {
        session_start();
        session_destroy();

        header("location: ../Auth/login.php");
    }
    
    public static function deleteAccount($username)
    {
        $db=new DBController;
        if($db->openConnection())
        {
        $query="delete from users where username = '$username'";
        return $db->delete($query);
        }
        else
        {
        echo "Error in Database Connection";
        return false; 
        }
    }

    /*public static function viewInfo($username)
    {
        $db=new DBController;
        if($db->openConnection())
        {
        $query="select users.username, users.name, users.email, roles.name as 'role' from users, roles where users.roleId = roles.id and users.username = '$username'";
        $result  = $db->select($query);
        /*$user = new User($result[0]["username"], $result[0]["name"], $result[0]["email"], $result[0]["email"], $result[0]["role"]);
        /*$user->username = $result[0]["username"];
        $user->name = $result[0]["name"];
        $user->email = $result[0]["email"];
        $user->role = $result[0]["role"];*/
        /*return $result;
        }
        else
        {
        echo "Error in Database Connection";
        return false; 
        }
    }*/

    public static function getInfo($username)
    {
        $db=new DBController;
        if($db->openConnection())
        {
        $query="select users.username, users.name, users.email, users.password, roles.name as 'role' from users, roles where users.roleId = roles.id and users.username = '$username'";
        $result  = $db->select($query);
        $user = new User($result[0]["username"], $result[0]["name"], $result[0]["email"], $result[0]["password"], $result[0]["role"]);
        return $user;
        }
        else
        {
        echo "Error in Database Connection";
        return false; 
        }
    }

    public static function updateInfo(User $new, User $original)
    {
      echo "entered";
        $db=new DBController;
      if($db->openConnection())
      {
        
        if(!empty($new->getName()))
        {
            $newname = $new->getName();
            
        }
        else
        {
            $newname = $original->getName();
        }
        echo $newname;
        if(!empty($new->getEmail()))
        {
            $newemail = $new->getEmail();
        }
        else
        {
            $newemail = $original->getEmail();
        }
        echo $newemail;
        if(!empty($new->getPassword()))
        {
            $newpassword = $new->getPassword();
        }
        else
        {
            $newpassword = $original->getPassword;
        }
        echo $newpassword;
        $query="update users set name = '$newname', email = '$newemail', password = '$newpassword' WHERE users.username = '$original->username'";
        return $db->insert($query);
      }
      else
      {
        echo "Error in Database Connection";
        return false; 
      }
            
   }
    

}
?>