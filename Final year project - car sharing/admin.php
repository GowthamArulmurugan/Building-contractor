<?php
include("dbconnect.php");
extract($_POST);
session_start();
if(isset($_POST['btn']))
{
$qry=mysqli_query($connect,"select * from admin where name='$uname' && psw='$password'");
$num=mysqli_num_rows($qry);
if($num==1)
{
?>
<script>alert('welcome to admin home page');
</script>
<?php

header("location:adminhome.php");
}
else
{
echo "<script>alert('User Name Password Wrong.....')</script>";

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
.style2 {color: #000000}
.style3 {font-size: 16px}
-->
.button{
  background-color:#4CAF50;
  border:none;
  color: white;
  padding: 7px 8px;
  text-align: center;
  font-size: 12px;
}
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
      <li class="first current_page_item"><a href="index.php" style="font-family:system-ui; font-size:18px">Home</a> </li><li ><a href="admin.php" style="font-family:system-ui; font-size:18px">Admin</a> </li>
			<li><a href="login.php" style="font-family:system-ui; font-size:18px">Driver Login </a></li>
			<li><a href="userlogin.php" style="font-family:system-ui; font-size:18px">User Login </a></li>
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
				<h2>Welcome Login Page </h2>
				<p align="justify">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</p>
			    <form id="form1" method="post" action="">
                  <p align="center" class="style1">Admin Login </p>
			      <table width="100%" border="0">

                    <tr>
                      <td width="13%" height="41">&nbsp;</td>
                      <td width="28%">&nbsp;</td>
                      <td width="9%"><span class="style2">USER NAME </span></td>
                      <td width="22%"><label>
                        <input name="uname" type="text" id="uname" style="font-family:system-ui;"/>
                      </label></td>
                      <td width="15%">&nbsp;</td>
                      <td width="13%">&nbsp;</td>
                    </tr>
                    <tr>
                      <td height="33">&nbsp;</td>
                      <td>&nbsp;</td>
                      <td><span class="style2">PASSWORD</span></td>
                      <td><label>
                        <input name="password" type="password" id="password" style="font-family:system-ui;"/>
                      </label></td>
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
                    <tr>
                      <td>&nbsp;</td>
                      <td>&nbsp;</td>
                      <td>&nbsp;</td>
                      <td><label>
                        <input name="btn" type="submit" class="button" id="btn" value="  Login  " /> &nbsp&nbsp&nbsp&nbsp
                        <input type="reset" name="Submit2" class="button1"value=" Reset " />
                      </label></td>
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