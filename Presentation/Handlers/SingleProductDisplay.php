<?php 
session_start();
//This page displays a single product when the user clicks on the display product link

?>

<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="../../welcomeStyle.css">


	<style type="text/css">
	
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




</head>
<body>
<?php include_once '../../showNavBar.php';?>
<div class="postView">
<p>
<?php 
//This page displays a single product when the user clicks on the display product link

        $ID = $_GET['id'];
        
        require_once '../../Autoloader.php';


       
        $products = array();
        $p = new ProductDataService();
        $products = $p->findByProductID($ID);
        
        for($x = 0; $x < count($products); $x++)
        {
            echo "Product ID - " .  $products[$x][0] . "<br>";
            echo "Product Name - " .  $products[$x][1] . "<br>";
            echo "Product Description - " . $products[$x][2]   . "<br>";
            echo "Price - $" . $products[$x][3]; 
        }
 



 

?>
</p>
</div>


</body>
</html>