<?php
session_start();

/*
 * Michael Duisenberg
 * Admin display products page
 * This page displays all the products in the database as well as allowing the Admin to add, edit or delete a product
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
<title>Admin Page Display Products</title>
</head>
<body>
	<h1>Display Products</h1>
  <body>
    




<?php

include_once '../../../showNavBar.php';
 
//$mp = new myFunctions();
 //$numOfProducts = $mp->currentNumberofProducts();
 
 
 $products = array();
 $p = new ProductDataService();
 
$products = $p->findAllProducts();
 
 
 ?>
      
        <p> <?php echo "The current number of products: " . count($products) . "<br>";?></p>
        
        <a class="btn btn-outline-primary" href="AddProductForm.php" role="button">Add</a>   
        
      <h2>Products</h2>
     
      <div class="table-responsive">
        <table class="table table-striped table-sm">
          <thead>
            <tr>
              <th>Edit</th>
              <th>Delete</th>
              <th>ID</th>
              <th>Name</th>
              <th>Description</th>
              <th>Price</th>
            </tr>
          </thead>
          <tbody>
          <?php 
          for($x = 0; $x < count($products); $x++)
          {
              ?>
               <tr>
             <td>
              <form action = "EditProductForm.php" class="btn btn-primary">
            		<input type="hidden" name="id" value = "<?php echo $products[$x][0];?>"></input>
                	 <button type="submit">Edit</button>
           			 </form>
			</td>
			<td>
              <form action = "DeleteProduct.php" class="btn btn-primary">
            		<input type="hidden" name="id" value = "<?php echo $products[$x][0];?>"></input>
                	 <button type="submit">Delete</button>
           			 </form>
			</td>
              <td><?php echo $products[$x][0]?></td>
              <td><?php echo $products[$x][1]?></td>
              <td><?php echo $products[$x][2]?></td>
              <td><?php echo "$" . $products[$x][3]?></td>
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
