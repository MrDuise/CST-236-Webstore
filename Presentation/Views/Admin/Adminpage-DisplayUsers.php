<?php
session_start();

/*
 * Michael Duisenberg
 * Admin display Users page
 * This page displays all the users in the database as well as allowing the Admin to add, edit or delete a user
 * last updated 02-17-21
 * Milestone 3 of the Webstore application in PHP and web design level 2 class
 */

?>


<!doctype html>
<html lang="en">
<head>
<!-- Required meta tags -->
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<!-- My own css file and icon -->
<link rel="icon" href="letter-b-64v-prints.png">

<!-- Bootstrap CSS -->
<link rel="stylesheet"
	href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
	integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T"
	crossorigin="anonymous">
<link rel="stylesheet" href="../../welcomeStyle.css">
<title>Admin Page</title>
</head>
<body>
	<h1>Display Users</h1>
  <body>
    




<?php
include_once '../../../showNavBar.php';
 
//$mp = new myFunctions();

 //$numOfUsers = $mp->currentNumberofUsers();
 
 $users = array();
 $u = new UserDataService();
 
 $users = $u->getAllUsers();
 
 
 ?>

 
  
      
       
 		 
 	 	<p> <?php echo "The current number of Users: " . count($users) . "<br>";?></p>
		 


 <a class="btn btn-outline-primary" href="AddUserForm.php" role="button">Add</a>     

      <h2>Users</h2>
     
      <div class="table-responsive">
        <table class="table table-striped table-sm">
          <thead>
            <tr>
              <th>Edit</th>
              <th>Delete</th>
              <th>ID</th>
              <th>Username</th>
              <th>First Name</th>
              <th>Last Name</th>
              <th>Email</th>
              <th>Password</th>
              <th>Role</th>
            </tr>
          </thead>
          <tbody>
          <?php 
          for($x = 0; $x < count($users); $x++)
          {
              ?>
              <tr>
             <td>
              	<form action = "EditUserForm.php" class="btn btn-primary">
            		<input type="hidden" name="id" value = "<?php echo $users[$x][0];?>"></input>
                	<button type="submit">Edit</button>
           		</form>
			 </td>
			 <td>
              	<form action = "DeleteUser.php" class="btn btn-primary">
            		<input type="hidden" name="id" value = "<?php echo $users[$x][0];?>"></input>
                	<button type="submit">Delete</button>
           		</form>
			</td>
              <td><?php echo $users[$x][0]?></td>
              <td><?php echo $users[$x][1]?></td>
              <td><?php echo $users[$x][2]?></td>
              <td><?php echo $users[$x][3]?></td>
              <td><?php echo $users[$x][4]?></td>
              <td><?php echo $users[$x][5]?></td>
              <td><?php echo $users[$x][6]?></td>
            </tr>
             <?php  
          }
         ?> 
            
          </tbody>
        </table>
      </div>
 



  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
  </body>
</html>
