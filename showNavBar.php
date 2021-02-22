<?php
/*
 * Michael Duisenberg
 * Navbar
 * This is the navbar for the main application. Admin pages will not show in navbar if user is not an admin
 * last updated 02-17-21
 * Milestone 3 of the Webstore application in PHP and web design level 2 class
 */
session_start();
require_once 'Autoloader.php';
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




<meta charset="ISO-8859-1">

</head>
<body>

<?php 



//$differenceInDirectories = substr(getcwd(), strlen(__DIR__));

//$newDir = substr(getcwd(), strlen($differenceInDirectories));
//echo $differenceInDirectories . "<br>";
//echo getcwd() . "<br>";

//echo $newDir . "<br>";

//echo __DIR__;






?>


	<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
		<a class="navbar-brand" href="#"> Welcome <?php echo $_SESSION['username']; ?> </a>
		<button class="navbar-toggler" type="button" data-toggle="collapse"
			data-target="#navbarSupportedContent"
			aria-controls="navbarSupportedContent" aria-expanded="false"
			aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
		</button>

		<div class="collapse navbar-collapse" id="navbarSupportedContent">
			<ul class="navbar-nav ml-auto">
				<li class="nav-item"><a class="nav-link" href="/Milestone/Presentation/Views/main-welcome.php">Home
						<span class="sr-only">(current)</span>
				</a></li>
				<li class="nav-item"><a class="nav-link" href="/Milestone/Presentation/Handlers/Product Catalog Display.php">Product Display</a>
				</li>
				<?php 
				if($_SESSION['role'] == 'admin')
				{
				    ?>
				
				 <li class="nav-item dropdown">
        			<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
         				 Admin
       				 </a>
            		<div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
          				<a class="dropdown-item" href="/Milestone/Presentation/Views/Admin/Adminpage-DisplayUsers.php">Users</a>
          				<a class="dropdown-item" href="/Milestone/Presentation/Views/Admin/Adminpage-DisplayProducts.php">Products</a>
              		</div>
              		<div class="dropdown-divider">Add</div>
     			 </li>
     			 <?php 
     			 }
     			 ?>
				<li class="nav-item">
					<a class="nav-link" href="/Milestone/logOut.php">Logout</a>
				</li>
			</ul>
		</div>
		
		
		 <form action="/Milestone/Presentation/Handlers/ProductSearchHandler.php" class="form-inline my-2 my-lg-0">
      		<input class="form-control mr-sm-2" type="search" placeholder="Search" name="name" aria-label="Search">
      		<button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form>
	</nav>






<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

</body>
</html>