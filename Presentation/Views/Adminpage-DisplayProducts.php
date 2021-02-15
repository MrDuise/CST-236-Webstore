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
<title>Admin Page Display Products</title>
</head>
<body>
	<h1>Display Products</h1>
  <body>
    




<?php
include_once '../../showNavBar.php';
 
$mp = new myFunctions();
 $numOfProducts =$mp->currentNumberofProducts();
 
 
 $products = array();
 $p = new ProductBuisnessService();
 
$products = $p->findAllProducts();
 
 
 ?>

 
  
      
        
        
 		 <p> <?php echo "The current number of products: " . $numOfProducts . "<br>";?></p>
 	 	
		 


      

      <h2>Products</h2>
     
      <div class="table-responsive">
        <table class="table table-striped table-sm">
          <thead>
            <tr>
              <th>ID</th>
              <th>Name</th>
              <th>Description</th>
              <th>Price</th>
            </tr>
          </thead>
          <tbody>
          <?php 
          for($x = 0; $x < $numOfProducts; $x++)
          {
              ?>
              <tr>
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
