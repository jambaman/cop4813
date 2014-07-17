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

<?php


if (!isset($_GET['id']))
{
	die('No record ID');
}

$id = $_GET['id'];
if(!is_numeric($id))
{
	die ('Not a number, abort.');
}
$mysqli = new mysqli('localhost', 'n00869815','copn00869815', 'n00869815');
if(!$mysqli)
{
	echo "Unable to connect to the database";
	exit;
}
$query = "Select * FROM Employee WHERE employeeID =" .  $id;
$result = mysqli_query($mysqli,$query);
    while($row = mysqli_fetch_row($result))
    {  	
    $fName = $row[1];
	$lName = $row[2];
	$email = $row[5];
	$phone = $row[4];
	$gender = $row[6];
	$department = $row[3];
	$e_ID = $row[0];
?>
<div id="form_wrapper">
            <form id="form" name="form" method="post" action="updateEmployee.php">
                <h1>Update Employee Information</h1>
                    <div class="col-1">
 
                        <label >First Name</label>

                        <label >Last Name</label>
                        
                        <label >Email</label>
 
                        <label >Phone
                        <span class="small">Example:  9999999999</span>
                        </label>
 
                        <label >Gender
                        <span class="small">Enter your gender</span>
                        </label>
                         <label>Manager
                        <span class="small">Is Employee a Manager</span>
                        </label>
 
                         <label>Department
                        <span class="small">Choose Employee's Department</span>
                        </label>
                        
                    </div>
                    <div class="col-2">
 
                        <input type="text" name="firstname" id="fname" value="<?php echo $fName;?>"/>
                        <input type="text" name="lastname" id="lname" value="<?php echo $lName;?>"/>
 
                        <input type="text" name="email" id="email"  value="<?php echo $email;?>"/>
 
                        <input type="text" name="phone" id="phone" value="<?php echo $phone;?>"/>
 
                        <input type="radio" name="gender" value="male" <?php if ($gender=='m') { echo 'checked'; } ?>/> Male
                        <input type="radio" name="gender" value="female" <?php if ($gender=='f') { echo 'checked'; } ?>/>Female<br>
                         <input name="manager" value="yes" type="checkbox"/> Yes
                        <select name="department"/><option value="<?php echo $department;?>"></option>
                            <option value="<?php echo $department;?>"> <?php echo $department;?> </option>   
                            <option>Operations</option>
                            <option>Sales</option>
                            <option>Dispatch</option>
                        </select>
                        <input type="hidden" name="e_ID" value="<?php echo $e_ID;?>"/>
                        </div>
 
                    <center>
                      <button type="submit">Update Employee</button>
                    </center>
                    </form>
                    </div>
                    <?php 
        
        mysqli_close($mysqli); 

        }?>
                    </div>
                    </div>
                    </body>
                    </html>
