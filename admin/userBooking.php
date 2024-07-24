<?php
 	include("dbconnect.php");
	extract($_POST);
	session_start();
	$uid= $_SESSION['uid'];
	error_reporting(0);	
?>
<style>
p
{
	color:#000000;
	text-align: center;
	text-transform: uppercase;
	 font-size:40px;
}
ul {
  list-style-type: none;
  margin: 0;
  padding: 30px;
  overflow: hidden;
  background-color: #666699;
  position: -webkit-sticky; /* Safari */
  position: sticky;
  top: 0;
   border-radius:0px;
}
li {
  float: left;
}
li a {
  display: block;
  color: white;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
}
li a:hover {
  background-color: #111;
}
.active {
  background-color: #4CAF50;
}
#footer {
  padding: 45px;
  background: #666699;
  background-repeat: no-repeat;
  background-size: 1420px  100px;
  border-radius:10px;
  text-align:center;
  text-decoration:blink;
   font-family: Arial;
   font-size:15px;
}
#bg1 {
  padding:180px;
  background:url("images/cont.jpg");
  background-repeat: no-repeat;
  background-size: 1420px  300px;
  border-radius:5px;
   border-radius:0px;
   font-size:35px;
}
</style>
</head>
<p>Building Contractor Booking  Site</p>
<ul>
	 <li><a href="#">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp;</a></li>
	  <li><a href="#">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp;</a></li>
  <li><a href="userhome.php">Home</a></li>
  <li><a href="userSearch.php">Search</a></li>
  <li><a class="active" href="userBooking.php">My booking</a></li>
   <li><a href="#">&nbsp;</a></li>
   <li><a href="index.php">LogOut</a></li>
</ul>
<div id="bg1">   </div>
<div> &nbsp;</div>
	<table width="90%" align="center" border="1">
<tr>
		<td colspan="13" align="center"><strong><h3>Your Booking Details</h3></strong></td>
  </tr>
		    <tr>
        
   <td width="154"><div align="center" class="style6"><strong>Booking Id</strong> </div></td>
		   <td width="154"><div align="center" class="style6"><strong>Service ID</strong> </div></td>
		    <td width="153"><div align="center" class="style6"><strong>Contractor ID</strong> </div></td>
					    <td width="153"><div align="center" class="style6"><strong>Contractor Name</strong> </div></td>
			   <td width="153"><div align="center" class="style6"><strong>Contractor Number</strong> </div></td>
		    <td width="153"><div align="center" class="style6"><strong>Cost</strong> </div></td>
			 <td width="142"><div align="center" class="style6"><strong>Status</strong> </div></td>
			   <td width="142"><div align="center" class="style6"><strong>Payment</strong> </div></td>    
	    </tr>
		<tr>
		<td height="21" colspan="10">&nbsp;</td>
		</tr>
		<?php
		$qry=mysqli_query($conn,"select * from book where uid='$uid'");		
		while($row=mysqli_fetch_array($qry))
		{
		?>
        <tr>
	 <td><div align="center"><?php echo $row['id'];?></div></td>
		    <td><div align="center"><?php echo $row['sid'];?></div></td>
			 <td><div align="center"><?php echo $row['cid'];?></div></td>	 
			 <?php
			$cid= $row['cid'];
			 $con=mysqli_query($conn,"Select * from contractor where id='$cid'");
			 $row3=mysqli_fetch_array($con);
			  ?>
			 		 <td><div align="center"><?php echo $row3['name'];?></div></td>
			 <td><div align="center"><?php echo $row3['phone'];?></div></td>
			  <td><div align="center"><?php echo $row['cost'];?>
				 <td><div align="center"><?php 
				 if($row['status']==''){
				 echo "pending";				 
				 }elseif($row['status']=='2'){
				echo "rejected";
				 }elseif($row['status']=='1' && $row['payment']==''){
				 ?>
<div align="center"><a href="payment.php?id=<?php echo  $row['id']?>&cost=<?php echo $row['cost'];?>" >Paynow</a></div>
				 <?php
				  }else{
				  echo "";
				  }
				  ?>
				 </div></td>				 
				 <td><div align="center"><?php echo $row['payment'];?></div></td>
        </tr>		
        <?php
		}
		?>
</table>
<br>
<br>
<br>
<div id="footer"> <strong>copyrights & designedby@Building Constraction </strong></div>