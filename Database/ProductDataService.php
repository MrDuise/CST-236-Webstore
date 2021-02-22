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
    
    function makeNewProduct($product) {
        $db = new Database();
        $connection = $db->getConnect();
        
        
        $stmt = $connection->prepare("INSERT INTO `products` (`Name`, `Description`, `Price`) VALUES (?,?,?)");
        
        
        
        $pn = $product->getName();
        $pd = $product->getDescription();
        $pp = $product->getPrice();
        
     
        
        
        
        $stmt->bind_param("ssi", $pn, $pd, $pp);
        
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
    
    
    function deleteProduct($id) {
        $db = new Database();
        $connection = $db->getConnect();
        
        
        $stmt = $connection->prepare("DELETE FROM products WHERE ID = ?");
       
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
    
    function editProduct($id, $product) {
        $db = new Database();
        $connection = $db->getConnect();
        
        
        $stmt = $connection->prepare("UPDATE products SET Name = ?, Description = ?, Price = ? WHERE ID = ?");
        
        
        
        $pn = $product->getName();
        $pd = $product->getDescription();
        $pp = $product->getPrice();
        
        
        
        
        
        $stmt->bind_param("ssii", $pn, $pd, $pp, $id);
        
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
?>