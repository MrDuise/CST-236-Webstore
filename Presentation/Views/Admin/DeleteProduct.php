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
<style>
            .postView{
			 border:1px solid black;
	       padding:20px;
	       margin-left:auto;
	       margin-right:auto;
	       margin-bottom:10px;
	       margin-top:5px;
	       width:60%;
	       border-radius:10px;
	       background-color:rgb(250, 250,250);
	       font-size:1.2em;
	       text-align:left;
			
			}


</style>


<title>Admin Page Delete Product</title>
</head>
<body>
	<h1>Delete Page</h1>
  <body>
  
  <?php 
  include_once '../../../showNavBar.php';
  $a = 0;
  $id = $_GET['id'];
  $pd = new ProductDataService();
  $products = array();
  
  $products = $pd->findByProductID($id);
  
  ?>
  

<h2>Please confirm your choice</h2>
       
  <div class="postView">
  <p>
  <?php
  //This page displays a single product when the user clicks on the display product link
  
  
  
  for($x = 0; $x < count($products); $x++)
  {
      echo "Product ID - " .  $products[$x][0] . "<br>";
      echo "Product Name - " .  $products[$x][1] . "<br>";
      echo "Product Description - " . $products[$x][2]   . "<br>";
      echo "Price - $" . $products[$x][3];
  }
  
  
 
 
  ?>
</p>

<p> <?php echo "Do you really want to delete this Product? <br>"?></p>
 <form action="/Milestone/Presentation/Handlers/processDeleteProduct.php">
  <div class="form-group">
  <input type="hidden" name="id" value="<?php echo $products[$a][0]?>">
  </div>
  <div class="form-group">
  <input type="submit" value="Yes" />
  </div>
  </form>
  
<a class="btn btn-outline-primary" href="/Milestone/Presentation/Views/Admin/Adminpage-DisplayProducts.php" role="button">No</a> 
</div>






  




</body>
</html>
