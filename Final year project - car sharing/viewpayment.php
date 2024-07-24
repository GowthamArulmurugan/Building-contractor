<?php
include("dbconnect.php");
extract($_POST);
session_start();
$did=$_SESSION['did'];

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
.style3 {font-size: 16px}
.style10 {color: #000000; font-weight: bold; font-size: 14px; }
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
        <li class="first current_page_item"><a href="driverhome.php"style="font-family:system-ui; font-size:18px">Home</a> </li>
        <li><a href="ViewBooking.php" style="font-family:system-ui; font-size:18px">View Booking </a></li>
        <li><a href="viewpayment.php" style="font-family:system-ui; font-size:18px">View Payment </a></li>
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
                  <p align="center" class="style1">Booked Details</p>
                  <table width="100%" border="0" align="center">
                    <tr>
                      <td height="38"><div align="center" class="style10" class="style10" style="font-size:15px; color:Blue"><b>S.NO</div></td>
                      <td><div align="center" class="style10" class="style10" style="font-size:15px; color:Blue"><b>User ID </div></td>
					   <td><div align="center" class="style10" class="style10" style="font-size:15px; color:Blue"><b>User Name</div></td>
					    <td><div align="center" class="style10" class="style10" style="font-size:15px; color:Blue"><b>Mobile</div></td>
                      <td><div align="center" class="style10" class="style10" style="font-size:15px; color:Blue"><b>From</div></td>
                      <td><div align="center" class="style10" class="style10" style="font-size:15px; color:Blue"><b>User</div></td>
					      <td><div align="center" class="style10" class="style10" style="font-size:15px; color:Blue"><b>Status</div></td>
                      
                 
                    </tr>
                    <?php
			  $qrt=mysqli_query($connect,"select * from book where did='$did' && status='2'");
			  while($rt=mysqli_fetch_array($qrt))
			  {
			  
			  $uid=$rt['uid'];
		  $qrt1=mysqli_query($connect,"select * from register where id='$uid'");
		  $rt1=mysqli_fetch_array($qrt1);
			 
			  ?>
                    <tr>
                      <td><div align="center" class="style10" style="font-family:system-ui; font-size:15px"><b><?php echo $rt['id'];?></div></td>
                      <td><div align="center" class="style10" style="font-family:system-ui; font-size:15px"><b><?php echo $rt['uid'];?></div></td>
					  <td><div align="center" class="style10" style="font-family:system-ui; font-size:15px"><b><?php echo $rt1['name'];?></div></td>
					   <td><div align="center" class="style10" style="font-family:system-ui; font-size:15px"><b><?php echo $rt1['pnumber'];?></div></td>
                      <td><div align="center" class="style10" style="font-family:system-ui; font-size:15px"><b><?php echo $rt['ufromm'];?></div></td>
                      <td><div align="center" class="style10" style="font-family:system-ui; font-size:15px"><b><?php echo $rt['utoo'];?></div></td>
					    <td><div align="center" class="style10"style="font-family:system-ui; font-size:15px"><b>Booked</div></td>
                      
                     
                    </tr>
                    <?php
			  }
			  ?>
                  </table>
                  <p align="center" class="style1">&nbsp;</p>
                  </form>
	  
</div>
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