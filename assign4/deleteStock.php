<?php
  session_start();
  error_reporting(0);
  $error = $_GET['error'];
  include 'validate.php';
  //User tried to access without loggin in.
  $username = $_SESSION['username'];
  if($username == "")
  {
    header("Location:index.php?error=Please login first.");
  }
  if(isset($_POST['submit'])) {
    $stock = strtoupper($_POST['stock']);
    
    $myFile = "stockPortfolio.csv";
    $owned = bought($stock);
    if($owned[0]) {
        $ownedStocks = getStocks();
        $newStocks = "";
        $pattern = "/^" . $stock . "/";
        foreach ($ownedStocks as $entry) {
            
            if (!preg_match($pattern, $entry)) {
                $newStocks = $newStocks . $entry;
            }
        }
        file_put_contents($myFile, $newStocks);
                header("Location:admin.php?status=Stock deleted from portfolio");
    }
    else {        
        header("Location:admin.php?error=You do not own $stock");
    }
  }?>

<html>
<head>
<title>Delete a stock</title>
<link rel="stylesheet" type="text/css" href="../css/style.css">

</head>
<body>
<div class="top_container">
  <div id="header">
  <h1>Stephen Jamba</h1>
   <h2>Assignment 4</h2>
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
        <li><a href="admin.php">Admin</a></li>
      </ul>
  </nav>
</div>
<div class="container">
<div class="assignment4">
<div>
        <h2 id="heading">Delete a Position, <?php echo ucfirst($username);?></h2>
</div>
<form action=""method="post">
        <input name="stock" type="text" placeholder="Ticker Symbol">Stock to Delete</input><br>
        <button class="btn"type="submit" name="submit">Delete</button>
        <a  name="cancel" class="btn" href="admin.php">Cancel</a>
</form>
</div>
</div>
<div class="assignment2">
<h2 id="heading">Current Positions</h2>
<?php include 'positions.php'; 
?>
</div>

<div id="footer">
   <h4 id="footerText">&#169;2014:  Stephen Jamba</h4>
</div>
</body>
</html>
Show details
