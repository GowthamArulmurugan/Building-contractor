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
.button{
  background-color:#4CAF50;
  border:none;
  color: white;
  padding: 4px 4px;
  text-align: center;
  font-size: 12px;
}
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
         <li class="first current_page_item"><a href="userhome.php"style="font-family:system-ui; font-size:18px">Home</a> </li>
        <li><a href="ViewB.php"style="font-family:system-ui; font-size:18px">View Booking </a></li>
		<li><a href="index.php"style="font-family:system-ui; font-size:18px">Logout</a></li>
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
                  <p align="center" class="style1">Application Status</p>
                  <table width="100%" border="0" align="center">
                    <tr>
                      <td height="38"><div align="center" class="style10" style="font-size:15px; color:Blue">S.NO</div></td>
                      <td><div align="center" class="style10" style="font-size:15px; color:Blue">Driver ID ID </div></td>
                      <td><div align="center" class="style10" style="font-size:15px; color:Blue">From</div></td>
                      <td><div align="center" class="style10" style="font-size:15px; color:Blue">User</div></td>
                      
                      <td><div align="center" class="style10" style="font-size:15px; color:Blue">Action</div></td>
                    </tr>
                    <?php
			  $qrt=mysqli_query($connect,"select * from book where uid='$uid'");
			  while($rt=mysqli_fetch_array($qrt))
			  {
		
			 
			  ?>
                    <tr>
                      <td><div align="center" class="style10" style="font-family:system-ui; font-size:15px"><b><?php echo $rt['id'];?></div></td>
                      <td><div align="center" class="style10" style="font-family:system-ui; font-size:15px"><b><?php echo $rt['did'];?></div></td>
                      <td><div align="center" class="style10" style="font-family:system-ui; font-size:15px"><b><?php echo $rt['ufromm'];?></div></td>
                      <td><div align="center" class="style10" style="font-family:system-ui; font-size:15px"><b><?php echo $rt['utoo'];?></div></td>
                      
                      <td><div align="center" class="style10" style="font-family:system-ui; font-size:15px"><?php
					  
					  $st= $rt['status'];
					  
					  if($st==''){
					  
					  echo "<b>Waiting</br>";
					  
					  }elseif($st=='3'){
					  
					  echo "<b>Rejected</b>";
					  }elseif($st=='1'){
					  ?>
					  <a style="font-color:#4CAF50;" href="payment.php?id=<?php echo $rt['id'];?>"><b>Paynow</a>
					  <?php
					  }elseif($st=='2'){
					  
					  echo "<b> Paided </b>";
					  
					  }
					  
					  
					  
					  
					   ?></div></td>
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