<?php
 	include("dbconnect.php");
	extract($_POST);
	session_start();
	
	$id=$_GET['id'];
	
	$uid=$_GET['uid'];
	
		$qry1=mysqli_query($conn,"select * from register where id=$uid");
		
		$row1=mysqli_fetch_array($qry1);
		$mobile=$row1['phone'];
	
	
	
	
	$msg="your request has been accepted";
	
	
	?>
	
	<iframe src="http://smsserver9.creativepoint.in/api.php?username=fantasy&password=596692&to=<?php echo $mobile;?>&from=FSSMSS&message=Dear User your msg is <?php echo $msg;?> Sent By FSMSG FSSMSS&PEID=1501563800000030506&templateid=1507162882948811640"style="display:send sucess" class="iframe"></iframe>
	<?php 
		echo $a=$_SESSION['cid'];
		
		

$qry=mysqli_query($conn,"update book set status='1' where id =$id");














if($qry){?>
		 <script> alert('Accepted successfully')
window.location.href=("adminhome.php");</script>
<?php }  ?>