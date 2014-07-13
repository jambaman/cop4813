<?php

  error_reporting(0);
  $error = $_GET['error'];
  $status = $_GET['status'];
 
?>
<html>
<head>
	<title>Assignment 5</title>
	<link rel="stylesheet" type="text/css" href="../css/style.css">
</head>
<body>
<div class="top_container">
	<div id="header">
	<h1>Stephen Jamba</h1>
   <h2>Assignment 5</h2>
</div>
	<nav id="navbar">
		<ul class="navigation">
   			<li><a href="#">Assignments</a>
   				<ul>
   					<li><a href="../assign1/index.html">Assignment 1</a></li>
   					<li><a href="../assign2/index.html">Assignment 2</a></li>
   					<li><a href="../assign3/index.html">Assignment 3</a></li>
   					<li><a href="index.php">Assignment 4</a></li>
   					<li><a href="#">Assignment 5</a></li>
   					<li><a href="#">Assignment 6</a></li>
   				</ul>
   			</li>
   			<li><a href="../index.html">Home</a></li>
      </ul>
	</nav>
</div>
<div class="container">
<div class="assignment2">
<h2>Employees</h2>
  <?php include('config.php');?>
  </div>
  <div>

   
<?php if(isset($error)) {?>
<p><?php echo $error;?></p>
<?php } elseif (isset($status)) { ?>
<p><?php echo $status;?></p>
<?php }?>
</div>

</div>
<div id="footer">
   <h4 id="footerText">&#169;2014:  Stephen Jamba</h4>
</div>
</body>
</html>