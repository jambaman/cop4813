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
<?php include 'header.php' ?>
<div id="space">

</div>
<div class="container">
<div class="sidebar">
<?php include 'add.php';
   if(isset($error)) { ?>
                <p style="color:red;font-weight:700;">
                        <?php echo $error;?>
                </p>
                <?php
                } elseif (isset($status)) { ?>
                <p><?php echo $status; ?></p><?php
        }
?>
</div>
<div id="assignment5">
  <h2>Employees</h2>
  <?php include 'config.php'; ?>

  </div>
  </div>
<div id="footer">
   <h4 id="footerText">&#169;2014:  Stephen Jamba</h4>
   
</div>
</body>
</html>