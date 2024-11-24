<?php

require_once '../../Models/user.php';
require_once '../../Models/role.php';
require_once '../../Controllers/DBController.php';
require_once '../../Controllers/UserController.php';
require_once 'fpdf186\fpdf.php'; 


class Admin
{

   protected $db;
   protected $user = new UserController;

   public function __construct() {
   }

   public function viewPersons()
   {
      $this->db=new DBController;
      if($this->db->openConnection())
      {
         $query="select users.username, users.name, users.email, roles.name as 'role' from users, roles where users.roleId = roles.id";
         return $this->db->select($query);
      }
      else
      {
         echo "Error in Database Connection";
         return false; 
      }
   }

   public function addUser(User $person)
   {
      $this->db=new DBController;
      if($this->db->openConnection())
      {
         $query="insert into users values ('$person->getUsername()','$person->getName()','$person->getEmail()','$person->getPassword()',$person->getRoleId())";
         return $this->db->insert($query);
      }
      else
      {
         echo "Error in Database Connection";
         return false; 
      }
            
   }

   public function deleteUser($username)
   {
      $delete = $user->deleteAccount($username);
   }

   public function changeRole($username, $roleId)
   {
      $this->db=new DBController;
      if($this->db->openConnection())
      {
         $query="update users set roleId = $roleId WHERE users.username = '$username'";
         return $this->db->insert($query);
      }
      else
      {
         echo "Error in Database Connection";
         return false; 
      }
            
   }


   public function getReport()
   {
      $this->db=new DBController;
      if($this->db->openConnection())
      {
         $pdf = new FPDF();
         $pdf->AddPage();
         $query="SELECT * FROM feedbacktable'";
         $result = $this->db->select($query);
         if ($result->num_rows > 0) {
            // Add title to the PDF
            $pdf->SetFont('Arial', 'B', 16);
            $pdf->Cell(0, 10, 'Feedback Report', 0, 1, 'C');
            $pdf->Ln(10); // Add some space
            
            // Loop over the feedback data and add it to the PDF
            while ($row = $result->fetch_assoc()) {
               $pdf->Cell(0, 10, 'User: ' . $row['name'], 0, 1);
               $pdf->Cell(0, 10, 'Email: ' . $row['email'], 0, 1);
               $pdf->Cell(0, 10, 'Message: ' . $row['message'], 0, 1);
               $pdf->Ln(10); // Add some space between feedback entries
            }
         }
        else
        {
            $pdf->SetFont('Arial', '', 12);
            $pdf->Cell(0, 10, 'No feedback entries found.', 0, 1);
         }
        
        // Output the PDF
        $pdf->Output('Feedback_Report.pdf', 'D'); // Output as a download

      }
      else
      {
         echo "Error in Database Connection";
         return false; 
      }
            
   }



   

}
?>