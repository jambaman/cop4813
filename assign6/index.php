<html>
<body>

<script type="text/javascript" language="javascript">
  
function ajaxDepFilter(){
        var ajaxReq;
        try{
                // Opera 8.0+, Firefox, Safari
                ajaxReq = new XMLHttpRequest();
        } catch (e){
                // Internet Explorer Browsers
                try{
                        ajaxReq = new ActiveXObject("Msxml2.XMLHTTP");
                } catch (e) {
                        try{
                                ajaxReq = new ActiveXObject("Microsoft.XMLHTTP");
                        } catch (e){
                                return false;
                        }
                }
        }
        ajaxReq.onreadystatechange = function(){
                if(ajaxReq.readyState == 4){
                        
                        document.getElementById('results').innerHTML = ajaxReq.responseText;
                }
        }
        //var selected = document.selection.employee.value;
        var selected = document.getElementById('department');
        var departValue=selected.options[selected.selectedIndex].value;
        console.log(departValue);
        ajaxReq.open("GET", "process.php?departValue=" + departValue, true);
        ajaxReq.send(null);
      }
        
</script>




<?php

  error_reporting(0);
  $error = $_GET['error'];
  $status = $_GET['status'];
 
?>
<html>
<head>
	<title>Assignment 6</title>
	<link rel="stylesheet" type="text/css" href="../css/style.css">
</head>
<body>
<?php include 'header.php' ?>
<div id="space">

</div>

<div class="container">
<div name="selection" id="assignment6">
<h2>Department Filter</h2>

                <select  id="department" placeholder="Department" onchange='ajaxDepFilter()'>
                        <option value="" default selected>Select A Department</option>
                        <option value="All">All Departments</option>
                        <option value="Dispatch">Dispatch</option>
                        <option value="Operations">Operations</option>
                        <option value="Sales">Sales</option>
                </select>
                <div id="results">


               </div>


</div>
</div>
<div id="footer">
   <h4 id="footerText">&#169;2014:  Stephen Jamba</h4>
   
</div>

</body>
</html>