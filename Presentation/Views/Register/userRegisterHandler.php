<?php 
session_start(); 
//require_once '../../../Autoloader.php';

?>

<!-- Michael Duisenberg -->
<!-- CST-236-->
<!-- 01-14-21-->
<!-- Topic 1 -->
<!-- This page handles the form gathering and inserts the data in the database-->
<!-- Version 1.0 -->

<!-- html was used around the PHP code in order to add CSS styling. -->
<html>
	<head>
		<title> Registration Complete</title>
		<link rel="icon" href="../../../letter-b-64v-prints.png">
		<link rel="stylesheet" href="../../../welcomeStyle.css">	
		<style>
		/* centers output on screen */
				p{
					height: 6em;
					position: relative;
					margin: 0;
					position: absolute;
					top: 50%;
					left: 50%;
					margin-right: -50%;
					transform: translate(-50%, -50%);
					text-align: center;
					background-color:#8BD5EF;
					width:400px;
					border:1px solid black;
				}
				
				body{
				background-color: grey;
				}
		
		</style>
		
	</head>
	<body>
	
		<div class="topnav">
		<a href="userRegister.php">Register</a>
		<a href= "../Login/userLogin.php">Login</a>
		</div>
		<p>
		
		
			<?php
			require_once '../../../Autoloader.php';
			//require_once '../../../Database/Database.php';
			
			
			$db = new Database();
			
			
			
			$connection = $db->getConnect();
			
			
			//variables are set to the value of the data entered in the form if the connection to the database is made
			if($connection)
			{
			    $personFirst = addslashes($_POST["firstName"]);
			    $personLast = addslashes($_POST["lastName"]);
			    $userName = $_POST["userName"];
			    $email = $_POST["email"];
			    $passWord = $_POST["passWord"];
			}
					
					//if the username chosen is already taken, prompt the user to enter a different one
					$sql_user = "SELECT * FROM users WHERE User_Name = '$userName'";
					//$sql_pass = "SELECT * FROM users WHERE Password = '$passWord'";
					$result_u = mysqli_query($connection, $sql_user);
					//$result_p = mysqli_query($conn, $sql_pass);
					
					$defaultRole = "user";
					
					
					
					//checks if the username and password combo already is in the database, if it is, outputs a warning
					//if not, inputs the data into the table and informs the user that they are now registered
					if (mysqli_num_rows($result_u) > 0) {
					    ?>
					    <script>
					    alert("Sorry... username already taken. Please try again");
					    window.location.replace('userRegister.php');
					    </script>
					    <?php
					}
					else{
					    
					    $sql = "INSERT INTO `users` (`User_Name`, `First_Name`, `Last_Name`, `Email`, `Password`, `role`) VALUES ( '$userName', '$personFirst', '$personLast', '$email', '$passWord', '$defaultRole')";
					    if (mysqli_query($connection, $sql)) {
					        echo "You are now a registered<br>";
					        echo "at the best PC parts store<br>";
					        echo "You can either Login or<br>";
					        echo "register a new user<br>";
					    } else {
					        echo "Data failed to insert. Press the back button and try again<br>";
					        echo "Error: " . $sql . "<br>" . mysqli_error($connection);
					    }
					    exit();
					}

				
					?>
			</p>
			<p><?php include '../footer.php' ?> </p>
	</body>
</html>
