<!-- Michael Duisenberg -->
<!-- CST-236 -->
<!-- 01-20-21 -->
<!-- Welcome page for shop. This page serves as a home page to access the other starting pages.  -->
<!-- Version 1.0 -->

<!DOCTYPE html>
<html>
	<head>
	<link rel="icon" href="letter-b-64v-prints.png">
	<title>  Shop of Wonders </title>
	<link rel="stylesheet" href="welcomeStyle.css">
	<style>
		/* centers output on screen */
				.middle p{
					height: 6em;
					position: relative;
					margin: 0;
					position: absolute;
					top: 50%;
					left: 50%;
					margin-right: -50%;
					transform: translate(-50%, -50%);
					text-align: center;
					background-color:grey;
					width:400px;
					border:1px solid black;
				}
		</style>
	
	
		
	<meta charset="ISO-8859-1">

	</head>
	<body>
		
		<h1> Computer Parts Shop</h1>
		
		<div class="topnav">
		<a class="active" href="index.php">Home</a>
		<a href="Presentation/Views/Register/userRegister.php">Register</a>
		<a href= "Presentation/Views/Login/userLogin.php">Login</a>
		</div>
		
		<div class="middle">
		
		<p>Welcome to my shop, where we sell all your computing needs. Weither it be a new laptop,
		desktop, or you want to go the techie route and build your own, you have come to the right place.
		</p>
		</div>
		
		
		<p><?php include 'footer.php' ?> </p>
		
		
	</body>
</html>