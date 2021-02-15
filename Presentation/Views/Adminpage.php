<?php
session_start();

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
include_once '../../showNavBar.php';
 
$mp = new myFunctions();
 $numOfProducts =$mp->currentNumberofProducts();
 $numOfUsers = $mp->currentNumberofUsers();
 
 $users = array();
 $u = new UserDataService();
 
 $users = $u->getAllUsers();
 
 
 ?>

 
  
      
        <h1 class="h2">Dashboard</h1>
        <div class="basic-info">
 		 <p> <?php echo "The current number of products: " . $numOfProducts . "<br>";?></p>
 	 	<p> <?php echo "The current number of Users: " . $numOfUsers . "<br>";?></p>
		 </div>


      

      <h2>Users</h2>
     
      <div class="table-responsive">
        <table class="table table-striped table-sm">
          <thead>
            <tr>
              <th>ID</th>
              <th>Username</th>
              <th>First Name</th>
              <th>Last Name</th>
              <th>Email</th>
              <th>Password</th>
            </tr>
          </thead>
          <tbody>
          <?php 
          for($x = 0; $x < $numOfUsers; $x++)
          {
              ?>
              <tr>
              <td><?php echo $users[$x][0]?></td>
              <td><?php echo $users[$x][1]?></td>
              <td><?php echo $users[$x][2]?></td>
              <td><?php echo $users[$x][3]?></td>
              <td><?php echo $users[$x][4]?></td>
              <td><?php echo $users[$x][5]?></td>
            </tr>
             <?php  
          }
         ?> 
            
          </tbody>
        </table>
      </div>
 



    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>
