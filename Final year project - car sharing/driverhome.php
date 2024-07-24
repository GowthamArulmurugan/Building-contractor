<?php
include("dbconnect.php");
extract($_POST);
session_start();
$did=$_SESSION['did'];
if(isset($_POST['btn']))
{

$qry=mysqli_query($connect,"insert into journey values('','$vname','$dname','$fromm','$too','$seat','$contact','$dt','$did')");

if($qry)
{


echo "<script>alert('journey Added Successfull');</script>";

}
else
{
echo "<script>alert('Login UnSuccessfull');</script>";
}
}
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
.button{
  background-color:#4CAF50;
  border:none;
  color:white; 
  padding: 7px 8px;
  text-align: center;
  font-size: 12px;}
.button1{
  background-color:#FF4122;
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
        <li class="first current_page_item"><a href="driverhome.php"style="font-family:system-ui; font-size:18px">Home</a> </li>
        <li><a href="ViewBooking.php"style="font-family:system-ui; font-size:18px">View Booking </a></li>
        <li><a href="viewpayment.php"style="font-family:system-ui; font-size:18px">View Payment </a></li>
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
                  <p align="center" class="style1">Update Driver  Details  </p>
		     
			</div>
			
			
			
			<table style="width:200px;margin:0 auto;height:400px;">
              <tr>
                <td height="33">&nbsp;</td>
                <td>&nbsp;</td>
                <td><span class="style10">Vehicle Name & Number</span></td>
                <td><label>
                  <input type="text" name="vname" style="font-family:system-ui;" required />
                </label></td>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
              </tr>
              <tr>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
                <td><span class="style10">Driver Name</span></td>
                <td><label>
                  <input name="dname" type="text" style="font-family:system-ui;" required />
                </label></td>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
              </tr>
            
			
			
			
			
			
			  <tr>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
                <td><span class="style10">From</span></td>
                <td><label>
                  <input name="fromm" type="text" style="font-family:system-ui;" required />
                </label></td>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
              </tr>
			
			
			 <tr>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
                <td><span class="style10">To</span></td>
                <td><label>
                  <input name="too" type="text" style="font-family:system-ui;"  required />
                </label></td>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
              </tr>
			
			
			
			
			 <tr>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
                <td><span class="style10">Seats Available</span></td>
                <td><label>
                  <input name="seat" type="text" style="font-family:system-ui;" required />
                </label></td>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
              </tr>
			
			
			
			 <tr>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
                <td><span class="style10">Contact</span></td>
                <td><label>
                  <input name="contact" type="number" style="font-family:system-ui;" required />
                </label></td>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
              </tr>
			
			
			 <tr>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
                <td><span class="style10">Date & Time</span></td>
                <td><label>
                  <input name="dt" type="datetime-local" style="font-family:system-ui;" required />
                </label></td>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
              </tr>
			
			
			
			
			
			
			
              <tr>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
                <td><label>
                  <input name="btn" type="submit" id="btn" class="button" value="Submit" /> &nbsp&nbsp&nbsp
                  <input type="reset" name="Submit2" class="button1" value="Reset" />
                </label></td>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
              </tr>
              <tr>
                <td height="33">&nbsp;</td>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
              </tr>
              <tr>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
              </tr>
            </table>
			 </form>
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