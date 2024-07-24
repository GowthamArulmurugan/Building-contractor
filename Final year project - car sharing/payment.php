<?php
include("dbconnect.php");
extract($_POST);
session_start();
$uid=$_SESSION['uid'];
	
	$id=$_REQUEST['id'];

if(isset($_POST['btn']))
{


	
	$qy=mysqli_query($connect,"update book set status='2',payment='$pay' where id='$id'");
if($qy){?>
	<script> alert('payment Success')
window.location.href=("viewbooking.php");</script>

<?php } } ?>



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
  background-color:#019;
  border:none;
  color:white; 
  padding: 7px 8px;
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
                 <form method="post" action="#">
	  <table width="50%" border="0" align="center" style="margin:0 auto">
        <tr>
          <td colspan="2"><span class="style1">Payment Mode.... </span></td>
        </tr>
        <tr>
          <td>&nbsp;</td>
          <td><label>
            <input type="image" name="imageField" src="images/payment.png" />
          </label></td>
        </tr>
        <tr>
          <td width="35%"><span class="style4">Amount</span> </td>
		  <td> <input style="font-family:system-ui;" name="pay" type="text" /></td>
        </tr>
        <tr>
          <td height="33"><span class="style4">Enter Card Number</span></td>
          <td><input style="font-family:system-ui;" name="cno" type="text" id="cno" pattern="[0-9]{16}" title="16 digits"/></td>
        </tr>
        <tr>
          <td height="36"><span class="style4">CVV Number </span></td>
          <td><input style="font-family:system-ui;" name="cvv" type="password" id="cvv" pattern="[0-9]{3}" title="3 digits" /></td>
        </tr>
        <tr>
          <td><span class="style4">Card Name </span></td>
          <td><input style="font-family:system-ui;" name="cname" type="text" id="cname" /></td>
        </tr>
        <tr> </br></br>
          <td>&nbsp;</td>
          <td><input style="font-family:system-ui;" name="btn" type="submit" class="button" value="Pay" /></td>
        </tr>
      </table> 
  </form>
  
  <br>
	  <br>
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