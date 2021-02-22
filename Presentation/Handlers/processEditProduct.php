
<?php
/*
 * Michael Duisenberg
 * Edit Product handler
 * This page processes the data taken from the edit product form and modifies that product
 * last updated 02-17-21
 * Milestone 3 of the Webstore application in PHP and web design level 2 class
 */



require_once '../../Autoloader.php';



require_once '../Views/Header.php';



if(isset($_GET))
{
    $id = $_GET['id'];
    $name = $_GET['Name'];
    $description = $_GET['Description'];
    $price = $_GET['price'];
}
else
    echo "Nothing submited by the form";
    
    
    
    //send a new user object to the buesness service -> database service chain
    
    $ub = new ProductBuisnessService();
    $product = new Product(0, $name, $description, $price);
    
    if($ub->updateProduct($id, $product)){
        echo "Product Updated.<br>";
    }
    else {
        echo "Nothing Inserted.<br>";
    }
    
    echo "<a href='/Milestone/Presentation/Views/Admin/Adminpage-DisplayProducts.php'>Return to Product Display</a>";
    