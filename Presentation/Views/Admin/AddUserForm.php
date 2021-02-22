<?php
session_start();

/*
 * Michael Duisenberg
 * Add user Form
 * This page is the form for adding a new user to the database 
 * last updated 02-17-21
 * Milestone 3 of the Webstore application in PHP and web design level 2 class
 */

require_once '../Header.php';

?>



<title>Admin Page Add User</title>
</head>
<body>
	<h1>Add form</h1>
  <body>
  
  <?php 
  include_once '../../../showNavBar.php';
  $x = 0;
  $id = $_GET['id'];
  $ud = new UserDataService();
  $user = array();
  
  $user = $ud->findByUserID($id)
  
  
  ?>
  
  
	
<div class="container">
<form action="/Milestone/Presentation/Handlers/processAddUser.php">
  <div class="form-group">
    <label for="formGroupExampleInput">User Name</label>
    <input type="text" class="form-control" name="userName" placeholder="Username" required >
  </div>
   <div class="form-group">
    <label for="formGroupExampleInput2">First Name</label>
    <input type="text" class="form-control" name="firstName" placeholder="First Name" required />
  </div>
   <div class="form-group">
    <label for="formGroupExampleInput2">Last Name</label>
    <input type="text" class="form-control" name="lastName" placeholder="Last Name" required />
  </div>
   <div class="form-group">
    <label for="formGroupExampleInput2">Email</label>
    <input type="email" class="form-control" name="email" placeholder="Email" required />
  </div>
   <div class="form-group">
    <label for="formGroupExampleInput2">Password</label>
    <input type="text" class="form-control" name="passWord" placeholder="Password" required />
  </div>
   <div class="form-group">
    <label for="formGroupExampleInput2">Role</label>
    <input type="text" class="form-control" name="role" placeholder="User or Admin" required />
  </div>
  <div class="form-group">
  	<input type="submit" value="Add" />
  </div>
</form>
</div>
	
	 <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
  </body>
</html>