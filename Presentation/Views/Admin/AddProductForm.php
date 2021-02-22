<?php
session_start();

/*
 * Michael Duisenberg
 * Add Product Form
 * This page is the form for adding a new product to the database
 * last updated 02-17-21
 * Milestone 3 of the Webstore application in PHP and web design level 2 class
 */

include_once "../Header.php";
?>



<title>Admin Page Add Product</title>
</head>
<body>
	<h1>Add form</h1>
  <body>
  
  <?php 
  include_once '../../../showNavBar.php';

  
  
  ?>
  
 <div class="container">
  <form action="/Milestone/Presentation/Handlers/processAddProduct.php">
  <div class="form-group">
    <label for="formGroupExampleInput">Name</label>
    <input type="text" class="form-control" name="Name" placeholder="Name" required >
  </div>
  <div class="form-group">
    <label for="formGroupExampleInput2">Description</label>
    <textarea rows="5" cols="30" class="form-control" name="Description" placeholder="Description"></textarea>
  </div>
   <div class="form-group">
    <label for="formGroupExampleInput2">Price</label>
    <input type="text" class="form-control" name="price" placeholder="Price" required />
  </div>
  <div class="form-group">
  	<input type="submit" value="Add" />
  </div>
</form>
</div>
  
 
	
	 <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
  </body>
</html>