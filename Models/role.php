<?php

class Role
{
    public $id;
    public $name;

    public function getRole()
   {
      $this->db=new DBController;
      if($this->db->openConnection())
      {
        $query="select * from roles";
        return $this->db->select($query);
      }
      else
      {
         echo "Error in Database Connection";
         return false; 
      }
            
   }
}

?>