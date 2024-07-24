<?php
include("dbconnect.php");
extract($_POST);
session_start();
if(isset($_POST['btn']))
{
$max_qry = mysqli_query($connect,"select max(id) from file");
	$max_row = mysqli_fetch_array($max_qry); 
	$id=$max_row['max(id)']+1;
	//$pb_key=$_POST['public_key'];
$imgpath=$_FILES['file']['name'];
	  $errors= array();
      $fname = $_FILES['file']['name'];
$file_size =$_FILES['image']['size'];
     $file_tmp =$_FILES['file']['tmp_name'];
     $file_type=$_FILES['image']['type'];

  move_uploaded_file($_FILES['file']['tmp_name'],"upload/".$fname);
$qry=mysqli_query($connect,"insert into file values('$id','$name','$fname','$details')");
   if($qry)
  {
   ?>
<script language="javascript">
	alert("File Upload Successfully..");
	window.location.href="adminhome.php";
	</script>
	<?php
  }
  else
  {
  ?>
<script language="javascript">
	alert("File Upload Unsuccessfully..");
	window.location.href="adminhome.php";
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
<title>Car Sharing Application Portal</title>
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<link rel="stylesheet" type="text/css" href="style.css" />
<style type="text/css">
<!--
.style1 {
	color: #000000;
	font-weight: bold;
	font-size: 18px;
}
.style5 {color: #000000; font-weight: bold; font-size: 12px; }
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
			<li class="first current_page_item"><a href="adminhome.php"style="font-family:system-ui; font-size:18px">Home</a></li>
						<li class="first current_page_item"><a href="aview.php" style="font-family:system-ui; font-size:18px">View Users</a></li>
			
			<li class="last"><a href="index.php" style="font-family:system-ui; font-size:18px">Logout</a></li>
		</ul>
		<br class="clearfix" />
  </div>

	<div id="page">
		 <div id="content">
			<div class="box">
				<h2>Welcome To Admin Home Page:</h2>
				<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</p>
				
				 <form action="" method="post" enctype="multipart/form-data" id="form1">
                  <p align="center" class="style1">Users Details </p>
		      </form>
			</div>
			<table width="100%" border="0" align="center">
              <tr>
                <td height="38"><div align="center" class="style14" style="font-size:15px; color:Blue"><b>Sl.No</b></div></td>
                <td><div align="center" class="style14" style="font-size:15px; color:Blue"><b>Name </div></td>
                <td><div align="center" class="style14" style="font-size:15px; color:Blue"><b>Gender</div></td>
                <td><div align="center" class="style14" style="font-size:15px; color:Blue"><b>Age</div></td>
                <td><div align="center" class="style14" style="font-size:15px; color:Blue"><b>Address</div></td>
                <td><div align="center" class="style14" style="font-size:15px; color:Blue"><b>Email Id </div></td>
                <td><div align="center" class="style14" style="font-size:15px; color:Blue"><b>Phone Number </div></td>
               
              </tr>
			  <?php
			  $qry=mysqli_query($connect,"select * from register");
			 
			  while($row=mysqli_fetch_array($qry)){
			  ?>
              <tr>
                <td><div align="center" class="style14" style="font-family:system-ui; font-size:15px"><b><?php echo $row['id'];?></div></td>
                <td><div align="center" class="style14" style="font-family:system-ui; font-size:15px"><b><?php echo $row['name'];?></div></td>
                <td><div align="center" class="style14" style="font-family:system-ui; font-size:15px"><b><?php echo $row['gender'];?></div></td>
                <td><div align="center" class="style14" style="font-family:system-ui; font-size:15px"><b><?php echo $row['age'];?></div></td>
                <td><div align="center" class="style14" style="font-family:system-ui; font-size:15px"><b><?php echo $row['address'];?></div></td>
                <td><div align="center" class="style14" style="font-family:system-ui; font-size:15px"><b><?php echo $row['email'];?></div></td>
                <td><div align="center" class="style14" style="font-family:system-ui; font-size:15px"><b><?php echo $row['pnumber'];?></div></td>
     
               
              
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
	
</body>
</html>            
				
				
		   