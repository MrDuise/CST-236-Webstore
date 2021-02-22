<?php 
class Database
{
    private $host = "td5l74lo6615qq42.cbetxkdyhwsb.us-east-1.rds.amazonaws.com";
    private $username = "kakp5w4hpvontlpb";
    private $password = "pd696xpbs4qihqla";
    private $database_name = "op511mbuvs0zumu9";
    private $port = 3306;
   

        
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
