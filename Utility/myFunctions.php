<?php
session_start(); 

require_once '../../Autoloader.php';

class myFunctions{
    

    function currentNumberofProducts() {
    
        $products = array();
        $p = new ProductBuisnessService();
    
        $products = $p->findAllProducts();
    
        $totalNumOfProducts = count($products);
    
     return $totalNumOfProducts;
    
    }


    function currentNumberofUsers() {
    
         $users = array();
         $u = new UserDataService();
    
          $users = $u->getAllUsers();
    
         $totalNumOfUsers = count($users);
    
        return $totalNumOfUsers;
    
        }

}