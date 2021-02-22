<?php


class User
{
    private $id;
    private  $userName;
    private  $firstName;
    private $lastName;
    private $email;
    private $passWord;
    private $role;
    
    
    public function __construct($id, $userName,$firstName, $lastName,$email,$passWord,$role)
    {
        $this->id = $id;
        $this->userName = $userName;
        $this->firstName = $firstName;
        $this->lastName = $lastName;
        $this->email = $email;
        $this->passWord = $passWord;
        $this->role = $role;
    }
    
    //getters
    public function getID() {
        return $this->id;
    }
    
    public function getUserName() {
        return $this->userName;
    }
    public function getFirstName() {
        return $this->firstName;
    }
    public function getLastName() {
        return $this->lastName;
    }
    public function getEmail() {
        return $this->email;
    }
    public function getPassword() {
        return $this->passWord;
    }
    public function getRole() {
        return $this->role;
    }
    
    //setter
    public function setID($id) {
        $this->id = $id;
    }
    
    public function setUserName($userName) {
       $this->userName = $userName;
    }
    public function setFirstName($firstName) {
         $this->firstName = $firstName;
    }
    public function setLastName($lastName) {
        $this->lastName = $lastName;
    }
    public function setEmail($email) {
         $this->email = $email;
    }
    public function setPassword($passWord) {
        $this->passWord = $passWord;
    }
    public function setRole($role) {
        $this->role = $role;
    }
    
}

