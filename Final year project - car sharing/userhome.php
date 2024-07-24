<?php
include("dbconnect.php");
extract($_POST);
session_start();
$uid=$_SESSION['uid'];

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta name="description" content="" />
<meta name="keywords" content="" />
<title>Car Sharing Application Portal</title>
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<link rel="stylesheet" type="text/css" href="style.css" />
<style type="text/css">
<!--
.style1 {	font-size: 16px;
	color: #000000;
}
.style14 {color: #000000; font-weight: bold; font-size: 14px; }
-->
</style>
</head>
<body>
<div id="wrapper">
	<div id="header">
	  <div id="logo">
	  <h1><a href="#" style="font-size:35px; color:#800000;"> Grab Your Cab </a>- Car Sharing Portal</h1>
      </div>
	  <div id="slogan">
			<h2></h2>
	  </div>
	</div>
	<div id="menu">
      <ul>
        <li class="first current_page_item"><a href="userhome.php" style="font-family:system-ui; font-size:18px">Home</a> </li>
        <li><a href="ViewB.php"style="font-family:system-ui; font-size:18px">View Booking </a></li>
		<li><a href="index.php" style="font-family:system-ui; font-size:18px">Logout</a></li>
        <li class="last"></li>
      </ul>
	  <br class="clearfix" />
    </div>
	<div id="splash">
		<img class="pic" src="images/pic01.jpg" width="870" height="230" alt="" />
	</div>
	<div id="page">
		 <div id="content">
			<div class="box">
				<h2>Welcome Driver Home </h2>
				<p align="justify">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</p>
				
				
			    <form action="" method="post" enctype="multipart/form-data" id="form1">
                  <p align="center" class="style1">Driver Details </p>
		      </form>
			</div>
			<table width="100%" border="0" align="center">
              <tr>
                <td height="38"><div align="center" class="style14" style="font-size:15px; color:Blue"><b>Sl.No </b></div></td>
                <td><div align="center" class="style14" style="font-size:15px; color:Blue"><b>Vehicle Name </b></div></td>
                <td><div align="center" class="style14"style="font-size:15px; color:Blue"><b>Driver Name </b></div></td>
                <td><div align="center" class="style14"style="font-size:15px; color:Blue"><b>From </b></div></td>
                <td><div align="center" class="style14"style="font-size:15px; color:Blue"><b>To </b></div></td>
                <td><div align="center" class="style14"style="font-size:15px; color:Blue"><b>Seat </b></div></td>
                <td><div align="center" class="style14"style="font-size:15px; color:Blue"><b>Phone Number </b></div></td>
                <td><div align="center" class="style14"style="font-size:15px; color:Blue"><b>Date & Time </b></div></td>
                <td><div align="center" class="style14"style="font-size:15px; color:Blue"><b>Apply Now </b></div></td>
                <
              </tr>
			  <?php
			  $qry=mysqli_query($connect,"select * from journey");
			  while($row=mysqli_fetch_array($qry))
			  {
			 
			  ?>
              <tr>
                <td><div align="center" class="style14" style="font-family:system-ui; font-size:15px"><?php echo $row['id'];?></div></td>
                <td><div align="center" class="style14" style="font-family:system-ui; font-size:15px"><?php echo $row['vname'];?></div></td>
                <td><div align="center" class="style14" style="font-family:system-ui; font-size:15px"><?php echo $row['dname'];?></div></td>
                <td><div align="center" class="style14" style="font-family:system-ui; font-size:15px"><?php echo $row['fromm'];?></div></td>
                <td><div align="center" class="style14" style="font-family:system-ui; font-size:15px"><?php echo $row['too'];?></div></td>
                <td><div align="center" class="style14" style="font-family:system-ui; font-size:15px"><?php echo $row['seat'];?></div></td>
                <td><div align="center" class="style14" style="font-family:system-ui; font-size:15px"><?php echo $row['contact'];?></div></td>
				 <td><div align="center" class="style14" style="font-family:system-ui; font-size:15px"><?php echo $row['dt'];?></div></td>
              
                <td><div align="center" class="style14"><a href="book.php?id=<?php echo $row['id'];?>&did=<?php echo $row['did'];?>">Request</a></div></td>
              </tr>
			  <?php
			  }
			  ?>
            </table>
			<br class="clearfix" />
		</div>
		<br class="clearfix" />
	</div>
	<div id="page-bottom"><br class="clearfix" />
  </div>
</div>
<div id="footer">
&copy; Untitled. All rights reserved. Design Admin </div>
</body>
</html>