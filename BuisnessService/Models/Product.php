<?php 
class Product{
    private $id;
    private  $name;
    private  $description;
    private $price;
    
    
    public function __construct($id, $name, $description, $price)
    {
        $this->id = $id;
        $this->name = $name;
        $this->description = $description;
        $this->price = $price;
    }
    
    //getters
    public function getID() {
        return $this->id;
    }
    
    public function getName() {
        return $this->name;
    }
    public function getDescription() {
        return $this->description;
    }
    public function getPrice() {
        return $this->price;
    }
    
    //setter
    public function setID($id) {
        $this->id = $id;
    }
    public function setName($name) {
        $this->name = $name;
    }
    public function setDecription($description) {
        $this->description = $description;
    }
    public function setPrice($price) {
        $this->price = $price;
    }
    
    
}


?>