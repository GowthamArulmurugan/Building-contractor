<?php
include("dbconnect.php");
session_start();
extract($_POST);
if(isset($_POST['btn']))
{

$file_name=$_FILES['img']['name'];  
$file_loc=$_FILES['img']['tmp_name'];
$folder = "upload/";   

$path=move_uploaded_file($file_loc,$folder.$file_name);
$img=$file_name;
$max_qry = mysqli_query($connect,"select max(id) from driver");
	$max_row = mysqli_fetch_array($max_qry); 
	$id=$max_row['max(id)']+1;
	$qry=mysqli_query($connect,"insert into driver values('$id','$name','$gender','$age','$address','$location','$email','$pnumber','$uname','$password','$img')");
if($qry)
{
?>
<script language="javascript">
alert("Registered successfully..");
window.location.href="login.php";
</script>
<?php
}
else
{
?>
<script language="javascript">
alert("Registered Unsuccessfully..");
window.location.href="register.php";
</script>
	<?php
}
}
?>




<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta name="description" content="" />
<meta name="keywords" content="" />
<title>Bank Server</title>
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<link rel="stylesheet" type="text/css" href="style.css" />
<style type="text/css">
<!--
.style1 {
	font-size: 16px;
	color: #000000;
}
-->
.button{
  background-color:#4CAF50;
  border:none;
  color:white; 
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
			<li class="first current_page_item"><a href="index.php"style="font-family:system-ui; font-size:18px">Home</a> </li><li ><a href="admin.php"style="font-family:system-ui; font-size:18px">Admin</a> </li>
			<li><a href="login.php"style="font-family:system-ui; font-size:18px">Driver Login </a></li>
			<li><a href="userlogin.php"style="font-family:system-ui; font-size:18px">User Login </a></li>
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
				<h2>Welcome Register Form </h2>
				<p align="justify">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</p>
			    <form id="form1" method="post" action="" enctype="multipart/form-data">
			      <p align="center" class="style1"> New Driver Register </p>
			      <table width="100%" border="0">
                    <tr>
                      <td width="13%" height="37">&nbsp;</td>
                      <td width="23%">&nbsp;</td>
                      <td width="15%"> Name </td>
                      <td width="23%"><label>
                        <input name="name" type="text" id="name" style="font-family:system-ui;"required/>
                      </label></td>
                      <td width="13%">&nbsp;</td>
                      <td width="13%">&nbsp;</td>
                    </tr>
                    <tr>
                      <td height="34">&nbsp;</td>
                      <td>&nbsp;</td>
                      <td>Gender</td>
                      <td><label>
                        <input name="gender" type="radio" id="gender" value="male" required/>
                      Male
                      <input name="gender" type="radio" id="gender" value="female" />
                      Female
                      </label></td>
                      <td>&nbsp;</td>
                      <td>&nbsp;</td>
                    </tr>
                    <tr>
                      <td height="36">&nbsp;</td>
                      <td>&nbsp;</td>
                      <td>Age</td>
                      <td><label>
                        <input name="age" type="text" id="age" style="font-family:system-ui;" required/>
                      </label></td>
                      <td>&nbsp;</td>
                      <td>&nbsp;</td>
                    </tr>
                    <tr>
                      <td height="40">&nbsp;</td>
                      <td>&nbsp;</td>
                      <td>Address</td>
                      <td><label>
                        <textarea name="address" id="address" style="font-family:system-ui;"required></textarea>
                      </label></td>
                      <td>&nbsp;</td>
                      <td>&nbsp;</td>
                    </tr>
                    <tr>
                      <td height="34">&nbsp;</td>
                      <td>&nbsp;</td>
                      <td>Location</td>
                      <td><label>
                        <input name="location" type="text" id="location" style="font-family:system-ui;"required />
                      </label></td>
                      <td>&nbsp;</td>
                      <td>&nbsp;</td>
                    </tr>
					
					
					
					 <tr>
                      <td height="34">&nbsp;</td>
                      <td>&nbsp;</td>
                      <td>Upload Licence</td>
                      <td><label>
                        <input name="img" type="file" required />
                      </label></td>
                      <td>&nbsp;</td>
                      <td>&nbsp;</td>
                    </tr>
					
					
					
					
					
                    <tr>
                      <td height="33">&nbsp;</td>
                      <td>&nbsp;</td>
                      <td>Email Id </td>
                      <td><label>
                        <input name="email" type="text" id="email" style="font-family:system-ui;"required/>
                      </label></td>
                      <td>&nbsp;</td>
                      <td>&nbsp;</td>
                    </tr>
                    <tr>
                      <td height="41">&nbsp;</td>
                      <td>&nbsp;</td>
                      <td>Phone Number </td>
                      <td><label>
                        <input name="pnumber" type="text" id="pnumber" style="font-family:system-ui;"required/>
                      </label></td>
                      <td>&nbsp;</td>
                      <td>&nbsp;</td>
                    </tr>
                    <tr>
                      <td height="33">&nbsp;</td>
                      <td>&nbsp;</td>
                      <td>User Name </td>
                      <td><label>
                        <input name="uname" type="text" id="uname"style="font-family:system-ui;" required/>
                      </label></td>
                      <td>&nbsp;</td>
                      <td>&nbsp;</td>
                    </tr>
                    <tr>
                      <td height="42">&nbsp;</td>
                      <td>&nbsp;</td>
                      <td>Password</td>
                      <td><label>
                        <input name="password" type="password" id="password" style="font-family:system-ui;"required/>
                      </label></td>
                      <td>&nbsp;</td>
                      <td>&nbsp;</td>
                    </tr>
                    <tr>
                      <td>&nbsp;</td>
                      <td>&nbsp;</td>
                      <td>&nbsp;</td>
                      <td><label>
                        <input name="btn" type="submit" id="btn" class="button" value=" Submit "/> &nbsp&nbsp&nbsp
                        <input type="reset" name="Submit2" class="button1" value=" Reset " />
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