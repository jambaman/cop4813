<?php
  session_start();
  error_reporting(0);
  $error = $_GET['error'];
  $status = $_GET['status'];
  $username = $_SESSION['username'];
  
 
  if($username == "")
  {
    header("Location:index.php?error=Please login first.");
  }
include 'validate.php';
?>
<html>
<head>
	<title>Assignment 4 Admin Page</title>
	<link rel="stylesheet" type="text/css" href="../css/style.css">
</head>
<body>
<div class="top_container">
	<div id="header">
		<h1>Welcome <?php echo $username?></h1>
   		<h2>To Your Stock Management Screen</h2>
	</div>
		<nav id="navbar">
			<ul class="navigation">
   				
   					<li><a href="addStock.php">Add</a></li>
   					<li><a href="modify.php">Modify</a></li>
   					<li><a href="deleteStock.php">Delete</a></li>
   					<li><a href="logout.php">Log out</a></li>
   					
      		</ul>
		</nav>
	</div>
<div class="container">
	
	<div id="content">
		<?php if(isset($error)) { ?>
	 		<p style="color:red;font-weight:700;">
	  		<?php echo $error;?></p>
	  		<?php } elseif (isset($status)) {?>
	  		<p><?php echo $status;?></p>
	  		<?php }?>
	</div>
<div class="assignment2">
<h2 id="heading">Current Positions</h2>
<?php include 'positions.php'; 
?>

</div>
</div>
<div id="footer">
   <h4 id="footerText">&#169;2014:  Stephen Jamba</h4>
</div>
</body>
</html>

