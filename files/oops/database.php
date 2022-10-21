<?php 

class connection
{
    private $conn;
 
function __construct()
{      $servername = "localhost";
     $username = "root";
    $password = "";
   $database="myalbum";   

    $this->conn = mysqli_connect($servername, $username, $password,$database);
    
}
function getdatabase()
{
    return $this->conn;
}
}

?>