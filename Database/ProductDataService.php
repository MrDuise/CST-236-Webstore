<?php 

require_once 'Database.php';

class ProductDataService
{
 
    function findByProductName($n){
        
        $db = new Database();
        $connection = $db->getConnect();
        
        
        $stmt = $connection->prepare("SELECT ID, Name, Description, Price FROM products WHERE Name LIKE ?");
        $like_first = "%" . $n . "%";
        $stmt->bind_param(s, $like_first);
        
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
        $products = array();
        
        while($row = $result->fetch_assoc())
        {
            $products[$index] = array($row["ID"], $row["Name"], $row["Description"], $row["Price"]);
            ++$index;
        }
        return $products;
        
       
        
    }
    
    
    
    function findAllProducts() 
    {
        $db = new Database();
        $connection = $db->getConnect();
        
        
        $stmt = $connection->prepare("SELECT * FROM products");
        
        
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
        $products = array();
        
        while($row = $result->fetch_assoc())
        {
            $products[$index] = array($row["ID"], $row["Name"], $row["Description"], $row["Price"]);
            ++$index;
        }
        return $products;
    }
    
    
    function findByProductID($id){
        
        $db = new Database();
        $connection = $db->getConnect();
        
        
        $stmt = $connection->prepare("SELECT * FROM products WHERE ID LIKE ?");
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
        $products = array();
        
        while($row = $result->fetch_assoc())
        {
            $products[$index] = array($row["ID"], $row["Name"], $row["Description"], $row["Price"]);
            ++$index;
        }
        return $products;
        
        
    }
    
}
?>