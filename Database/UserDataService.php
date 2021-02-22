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
            $users[$index] = array($row["ID"], $row["User_Name"], $row["First_Name"], $row["Last_Name"], $row["Email"], $row["Password"], $row["role"]);
            ++$index;
        }
        return $users;
    }
    
    
    function findByUserID($id){
        
        $db = new Database();
        $connection = $db->getConnect();
        
        
        $stmt = $connection->prepare("SELECT * FROM users WHERE ID LIKE ?");
        $like_id = "%" . $id . "%";
        $stmt->bind_param(s, $like_id);
        
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
            $users[$index] = array($row["ID"], $row["User_Name"], $row["First_Name"], $row["Last_Name"], $row["Email"], $row["Password"], $row["role"]);
            ++$index;
        }
        return $users;
        
        
    }
    
    
    function makeNew($user)
    {
        $db = new Database();
        $connection = $db->getConnect();
        
        
        $stmt = $connection->prepare("INSERT INTO `users` (`User_Name`, `First_Name`, `Last_Name`, `Email`, `Password`, `role`) VALUES (?,?,?,?,?,?)");
        
       
        
        $un = $user->getUserName();
        $fn = $user->getFirstName();
        $ln = $user->getLastName();
        $e = $user->getEmail();
        $p = $user->getPassword();
        $r = $user->getRole();
        
        
      
        $stmt->bind_param("ssssss", $un, $fn, $ln, $e, $p, $r);
        
        $stmt->execute();
        
        if($stmt->affected_rows > 0)
        {
            return true;
        }
        else
        {
            return false;
        }
        
        
    }
    
    function editUser($id, $user) {
        $db = new Database();
        $connection = $db->getConnect();
        
        
        $stmt = $connection->prepare("UPDATE users SET User_Name = ?, First_Name = ?, Last_Name = ?, Email = ?, Password = ?, role = ? WHERE ID = ?");
        
        
        
        $un = $user->getUserName();
        $fn = $user->getFirstName();
        $ln = $user->getLastName();
        $e = $user->getEmail();
        $p = $user->getPassword();
        $r = $user->getRole();
        
        
        
        
        
        $stmt->bind_param("ssssssi", $un, $fn, $ln, $e, $p, $r, $id);
        
        $stmt->execute();
        
        if($stmt->affected_rows > 0)
        {
            return true;
        }
        else
        {
            return false;
        }
    }
    
    function deleteUser($id) {
        $db = new Database();
        $connection = $db->getConnect();
        
        
        $stmt = $connection->prepare("DELETE FROM users WHERE ID = ?");
        
        if(!$stmt)
        {
            echo "Something went wrong in the binding process. sql error?";
            exit;
        }
        
        $stmt->bind_param("i", $id);
        
        $stmt->execute();
        
        if($stmt->affected_rows > 0)
        {
            return true;
        }
        else
        {
            return false;
        }
    }
    
    
}