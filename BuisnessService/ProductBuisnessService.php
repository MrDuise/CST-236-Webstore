<?php 
require_once '../../Autoloader.php';

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
    
    function makeNewProduct($product) {
        $dbService = new ProductDataService();
        return  $dbService->makeNewProduct($product);
    }
    
    function updateProduct($id, $product){
        $dbService = new ProductDataService();
        return  $dbService->editProduct($id, $product);
        
    }
    
    function deleteProduct($id){
        $dbService = new ProductDataService();
        return  $dbService->deleteProduct($id);
    
}
}








?>