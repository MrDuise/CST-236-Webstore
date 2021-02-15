<?php


require_once 'Database.php';

class UserDataService
{
    function getAllUsers()
    {
        $db = new Database();
        $connection = $db->getConnect();
        
        
        $stmt = $connection->prepare("SELECT * FROM users");
        
        
        $stmt->execute();
        
        $result = $stmt->get_result();
        
        
        
        if(!$result)
        {
            echo "Assume that sql statement has an error";
            exit;
        }
        
        if($result->num_rows == 0)
        {
            return null;
        }
        // else
        // {
        //    echo "I found " . $result->num_rows . " results<br>";
        // }
        
        
        $index = 0;
        $users = array();
        
        while($row = $result->fetch_assoc())
        {
            $users[$index] = array($row["ID"], $row["User_Name"], $row["First_Name"], $row["Last_Name"], $row["Email"], $row["Password"]);
            ++$index;
        }
        return $users;
    }
}