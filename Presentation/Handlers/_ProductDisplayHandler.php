<?php 
require_once '../../Autoloader.php';
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
<title>Inventory Display</title>
</head>
<body>


	<?php


    
    $products = array();
    $p = new ProductBuisnessService();
    
    $products = $p->findAllProducts();
    
    if(count($products) <= 0)
    {
        echo "No data found";
    }
   
    echo "<br><br>";

    ?>
    <div class ="card-group">
    <?php 
    $totalNumOfProducts = count($products);
        for($x=0;$x < $totalNumOfProducts; $x++)
        {
            ?>
        <div class="col-12 col-sm-6 col-md-4 col-lg-3">
            <div class="card" style="width: 18rem;">
                <div class="card-body">
                <h5 class="card-title"><?php echo $products[$x][1]?></h5>
   				<p class="card-text"><?php echo $products[$x][2]?></p>
   			 	<p class="card-text"><?php echo $products[$x][3]?></p>
   			 	<form action = "SingleProductDisplay.php" class="btn btn-primary">
            		<input type="hidden" name="id" value = "<?php echo $products[$x][0];?>"></input>
                	 <button type="submit">View Product</button>
           			 </form>
  				</div>
			</div>
			
		</div>
			<?php 
        }
        ?>
        </div>
 

   
    
   
    








<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

</body>
</html>
