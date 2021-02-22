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
  $ud = new UserDataService();
  $user = array();
  
  $user = $ud->findByUserID($id);
  
  ?>
  

<h2>Please confirm your choice</h2>
       
  <div class="postView">
  <p>
  <?php
  //This page displays a single product when the user clicks on the display product link
  
  
  
  for($x = 0; $x < count($user); $x++)
  {
      echo "Users ID - " .  $user[$x][0] . "<br>";
      echo "Users Username - " .  $user[$x][1] . "<br>";
      echo "Users First Name - " . $user[$x][2]   . "<br>";
      echo "Users Last Name - " . $user[$x][3] . "<br>";
      echo "Users Role - " . $user[$x][6] . "<br>";
  }
  
  
 
 
  ?>
</p>

<p> <?php echo "Do you really want to delete this User? <br>"?></p>
 <form action="/Milestone/Presentation/Handlers/processDeleteUser.php">
  <div class="form-group">
  <input type="hidden" name="id" value="<?php echo $user[$a][0]?>">
  </div>
  <div class="form-group">
  <input type="submit" value="Yes" />
  </div>
  </form>
  
<a class="btn btn-outline-primary" href="/Milestone/Presentation/Views/Admin/Adminpage-DisplayUsers.php" role="button">No</a> 
</div>






  




</body>
</html>

