<?php

require_once '../../Controllers/UserController.php';
class User extends UserController
{
    public $username;
    public $name;
    public $email;
    public $password;
    public $roleId;


    public function __construct($username, $name, $email, $password, $roleId) {
        $this->username = $username;
        $this->name = $name;
        $this->email = $email;
        $this->password = $password;
        $this->roleId = $roleId;
    }

    public function getUsername() {
        return $this->username;
    }
    
    public function getName() {
        return $this->name;
    }
    
    public function getEmail() {
        return $this->email;
    }
    
    public function getPassword() {
        return $this->password;
    }
    
    public function getRoleId() {
        return $this->roleId;
    }
    
    /*public function viewInfo($username)
    {
        $this->db=new DBController;
        if($this->db->openConnection())
        {
        $query="select  users.*, roles.name as role from users inner join roles on users.roleId = roles.id WHERE users.username = '$username'";
        return $this->db->select($query);
        }
        else
        {
        echo "Error in Database Connection";
        return false; 
        }
    }*/

    /*public static function getInfo($username)
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
    }*/

    /*public static function updateInfo(User $new, User $original)
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
            $newpassword = $original->getPassword();
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
            
   }*/

}
?>