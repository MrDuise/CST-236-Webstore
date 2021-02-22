
<?php
/*
 * Michael Duisenberg
 * Delete User handler
 * This page takes the id of the user, puts into a funtion that has the sql code for deleteing something from a 
 * database and then deletes it
 * last updated 02-18-21
 * Milestone 3 of the Webstore application in PHP and web design level 2 class
 */



require_once '../../Autoloader.php';



require_once '../Views/Header.php';

?>

<title> Delete Confirmed</title>

<?php 

if(isset($_GET))
{
    $id = $_GET['id'];
}
else
    echo "Nothing submited by the form";
    
    
    
    //send a new user object to the buesness service -> database service chain
    
    $ub = new UserDataService();
    
    
    if($ub->deleteUser($id)){
        echo "User Deleted.<br>";
    }
    else {
        echo "Nothing Inserted.<br>";
    }
    
    echo "<a href='/Milestone/Presentation/Views/Admin/Adminpage-DisplayUsers.php'>Return to Product Display</a>";
