<?php 
require_once '../../Autoloader.php';
//require_once '../Database/ProductDataService.php';
class ProductBuisnessService{
  
    
    function findByProductName($n) 
    {
       
        $products = array();
        
        $dbService = new ProductDataService();
        
        $products = $dbService->findByProductName($n);
        
        return  $products;
    }
    
    
    function findAllProducts() 
    {
        
        
        $products = array();
        $p = new ProductDataService();
        
        $products = $p->findAllProducts();
        
        return  $products;
    }
    
    
    function findByProductID($id) {
        $products = array();
        $p = new ProductDataService();
        $products = $p->findByProductID($id);
        return $products;
    }
    
}








?>