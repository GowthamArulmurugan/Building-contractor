<?php
include("dbconnect.php");
extract($_POST);
session_start();
$uid=$_SESSION['uid'];
$jid=$_REQUEST['id'];
$did=$_REQUEST['did'];



if(isset($_POST['btn'])){
$qry=mysqli_query($connect,"insert into book values('','$jid','$did','$uid','','','$fromm','$too')");


if($qry){?>
		 <script> alert('Apply successfully')
window.location.href=("userhome.php");</script>
<?php }} ?>


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
.style15 {color: #000000}
.style17 {font-size: 12px}
.style21 {font-size: 14px; color: #000000; }
-->
.button{
  background-color:#008cba;
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
        <li class="first current_page_item"><a href="userhome.php" style="font-family:system-ui; font-size:18px">Home</a> </li>
        <li><a href="ViewB.php" style="font-family:system-ui; font-size:18px">View Booking </a></li>
        
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
                  <p align="center" class="style1">Driver Booking </p>
                  <table width="80%" border="0" align="center">
                    <tr>
                      <td colspan="6">&nbsp;</td>
                    </tr>
                    <tr>
                      <td colspan="6"><div align="center"><span class="style1">Payment Mode.... </span></div></td>
                    </tr>
                   
                    <tr>
                      <td>&nbsp;</td>
                      <td>&nbsp;</td>
                      <td>&nbsp;</td>
                      <td>&nbsp;</td>
                      <td height="33"><span class="style21">From</span></td>
                      <td><label>
                        <input name="fromm" type="text" />
                      </label></td>
                    </tr>
                    <tr>
                      <td>&nbsp;</td>
                      <td>&nbsp;</td>
                      <td>&nbsp;</td>
                      <td>&nbsp;</td>
                      <td height="29"><span class="style21">To</span></td>
                      <td><label>
              <input name="too" type="text" />
                      </label></td>
                    </tr>
                   
                    <tr>
                      <td>&nbsp;</td>
                      <td>&nbsp;</td>
                      <td>&nbsp;</td>
                      <td>&nbsp;</td>
                      <td>&nbsp;</td>
                      <td><input name="btn" type="submit" class="button"value="Book" /></td>
                    </tr>
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