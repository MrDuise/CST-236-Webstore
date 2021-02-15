<?php
/*
 * Michael Duisenberg
 * 02-02-21
 * CST-236
 * Milestone 2 Product Catalog Display
 * This page uses a mix of my own css and css from bootstrap so certen aspects may look off as I learn to combine the two
 * my knowledge of CSS is still small but I wanted to use some of Bootstraps 'cards' to display each item which is why it has been included
 */
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
<title>Inventory Display</title>
</head>
<body>
	<h1>Product Display</h1>
    <?php
    
    
    include_once '../../showNavBar.php';
    require_once '../../Autoloader.php';
     include('_ProductDisplayHandler.php');
    ?>
    
   
    
 







<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

</body>
</html>