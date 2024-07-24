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
  <li><a class="active" href="userhome.php">Home</a></li>
  <li><a href="userSearch.php">Search</a></li>
  <li><a href="userBooking.php">My booking</a></li>
   <li><a href="#">&nbsp;</a></li>
   <li><a href="index.php">LogOut</a></li>
</ul>
<div id="bg1">   </div>
<div> &nbsp;</div>
	<table width="90%" align="center" border="1">
<tr>
		<td colspan="13" align="center"><strong><h3>Your Personal Details</h3></strong></td>
  </tr>
	    <tr>        
   <td width="154"><div align="center" class="style6"><strong> Name</strong> </div></td>
		   <td width="154"><div align="center" class="style6"><strong>Gender</strong> </div></td>
		    <td width="153"><div align="center" class="style6"><strong>Age</strong> </div></td>
		    <td width="153"><div align="center" class="style6"><strong>Email</strong> </div></td>
			 <td width="142"><div align="center" class="style6"><strong>Phone</strong> </div></td>
			   <td width="142"><div align="center" class="style6"><strong>location</strong> </div></td>
			    <td width="142"><div align="center" class="style6"><strong>Address</strong> </div></td>
				<td width="142"><div align="center" class="style6"><strong>Username</strong> </div></td>
	    </tr>
		<tr>
		<td height="21" colspan="10">&nbsp;</td>
		</tr>
		<?php
		$qry=mysqli_query($conn,"select * from register where id='$uid'");
		while($row=mysqli_fetch_array($qry))
		{
		?>
        <tr>
	 <td><div align="center"><?php echo $row['name'];?></div></td>
		    <td><div align="center"><?php echo $row['gender'];?></div></td>
			 <td><div align="center"><?php echo $row['age'];?></div></td>
			  <td><div align="center"><?php echo $row['email'];?></div></td>
				 <td><div align="center"><?php echo $row['phone'];?></div></td>
				 <td><div align="center"><?php echo $row['location'];?></div></td>
				 <td><div align="center"><?php echo $row['address'];?></div></td>
				  <td><div align="center"><?php echo $row['uname'];?></div></td>
        </tr>		
        <?php
		}
		?>
</table>
<br>
<br>
<br>
<div id="footer"> <strong>copyrights & designedby@Building Constraction </strong></div>