<?php 
include("dbconnect.php");
$id=$_GET['id'];
session_start();
	$uid= $_SESSION['uid'];
	$qry= mysqli_query($conn,"select * from service where id=$id");
	$row=mysqli_fetch_array($qry);
	$sid=$row['id'];
	$cid=$row['cid'];
	$cost=$row['cost'];
	$book=mysqli_query($conn,"insert into book values('','$sid','$cid','$uid','$cost','','')");
if($book){?>
		 <script> alert('Request Sended successfully')
window.location.href=("userhome.php");</script>
<?php } ?>
