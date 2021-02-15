<?php 
class Database
{
    private $host = "localhost";
    private $username = "root";
    private $password = "root";
    private $database_name = "cst-236 milestone";
    private $port = 8889;
   

        
   function getConnect()
    {
       $conn = new mysqli($this->host, $this->username, $this->password, $this->database_name, $this->port);
        
       
        // Check connection
       if($conn->connect_error)
       {
           echo "Connection failed" . $conn->connect_error . "<br>";
       }
       else 
       {
           return $conn;
       }    
       
    }
}


?>