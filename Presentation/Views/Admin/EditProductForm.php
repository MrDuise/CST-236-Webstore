<?php
session_start();

/*
 * Michael Duisenberg
 * Edit Product form
 * This page is the form for editing a product. It takes the data already in the database and
 * displays it in the form so the admin can update it
 * last updated 02-17-21
 * Milestone 3 of the Webstore application in PHP and web design level 2 class
 */

include_once "../Header.php";
?>



<title>Admin Page Edit Product</title>
</head>
<body>
	<h1>Edit form</h1>
  <body>
  
  <?php 
  include_once '../../../showNavBar.php';
  $x = 0;
  $id = $_GET['id'];
  $pd = new ProductDataService();
  $product = array();
  
  $product = $pd->findByProductID($id);
  
  
  ?>
  
 <div class="container">
  <form action="/Milestone/Presentation/Handlers/processEditProduct.php">
  <div class="form-group">
  <input type="hidden" name="id" value="<?php echo $product[$x][0]?>">
  </div>
  <div class="form-group">
    <label for="formGroupExampleInput">Name</label>
    <input type="text" class="form-control" name="Name" value="<?php echo $product[$x][1]?>" required >
  </div>
  <div class="form-group">
    <label for="formGroupExampleInput2">Description</label>
    <textarea rows="5" cols="30" class="form-control" name="Description" required><?php echo $product[$x][2] ?></textarea>
  </div>
   <div class="form-group">
    <label for="formGroupExampleInput2">Price</label>
    <input type="text" class="form-control" name="price" value="<?php echo $product[$x][3]?>" required />
  </div>
  <div class="form-group">
  	<input type="submit" value="Update" />
  </div>
</form>
</div>
  
 
	
	 <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
  </body>
</html>
