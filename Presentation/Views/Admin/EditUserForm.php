<?php
session_start();
/*
 * Michael Duisenberg
 * Edit user form
 * This page is the form for editing a user. It takes the data already in the database and
 * displays it in the form so the admin can update it
 * last updated 02-17-21
 * Milestone 3 of the Webstore application in PHP and web design level 2 class
 */

require_once '../Header.php';

?>



<title>Admin Page Edit User</title>
</head>
<body>
	<h1>Edit form</h1>
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
<form action="/Milestone/Presentation/Handlers/processEditUser.php">
  <div class="form-group">
  <input type="hidden" name="id" value="<?php echo $user[$x][0]?>">
  </div>
  <div class="form-group">
    <label for="formGroupExampleInput">User Name</label>
    <input type="text" class="form-control" name="userName" value="<?php echo $user[$x][1]?>" required >
  </div>
   <div class="form-group">
    <label for="formGroupExampleInput2">First Name</label>
    <input type="text" class="form-control" name="firstName" value="<?php echo $user[$x][2]?>" required />
  </div>
   <div class="form-group">
    <label for="formGroupExampleInput2">Last Name</label>
    <input type="text" class="form-control" name="lastName" value="<?php echo $user[$x][3]?>" required />
  </div>
   <div class="form-group">
    <label for="formGroupExampleInput2">Email</label>
    <input type="text" class="form-control" name="email" value="<?php echo $user[$x][4]?>" required />
  </div>
   <div class="form-group">
    <label for="formGroupExampleInput2">Password</label>
    <input type="text" class="form-control" name="passWord" value="<?php echo $user[$x][5]?>" required />
  </div>
   <div class="form-group">
    <label for="formGroupExampleInput2">Role</label>
    <input type="text" class="form-control" name="role" value="<?php echo $user[$x][6]?>" required />
  </div>
  <div class="form-group">
  	<input type="submit" value="Update" />
  </div>
</form>
</div>
	
	 <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
  </body>
</html>
