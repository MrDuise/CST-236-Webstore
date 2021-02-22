<?php
/*
 * Michael Duisenberg
 * Add user handler
 * This page processes the data taken from the add user form and adds a new user to the database
 * last updated 02-17-21
 * Milestone 3 of the Webstore application in PHP and web design level 2 class
 */



require_once '../../Autoloader.php';



require_once '../Views/Header.php';



if(isset($_GET))
{
    $userName = $_GET['userName'];
    $firstName = $_GET['firstName'];
    $lastName = $_GET['lastName'];
    $email = $_GET['email'];
    $passWord = $_GET['passWord'];
    $role = $_GET['role'];
}
else 
    echo "Nothing submited by the form";

   
    
    //send a new user object to the buesness service -> database service chain
    
    $ub = new UserBuisnessService();
   $user = new User(0, $userName, $firstName, $lastName, $email, $passWord, $role);
   
   if($ub->makeNew($user)){
       echo "Item Inserted.<br>";
   }
   else {
       echo "Nothing Inserted.<br>";
   }
   
   echo "<a href='/Milestone/Presentation/Views/Admin/Adminpage-DisplayUsers.php'>Return to User Display</a>";
    
    
