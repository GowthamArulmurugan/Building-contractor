
<?php
 	include("dbconnect.php");
	extract($_POST);
	session_start();
		$a=$_SESSION['cid'];
	?>


<html>
<title>Building Shop</title>
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
  <li><a href="adminhome.php">Admin Home</a></li>
<li><a class="active" href="adminViewProduct.php">View service</a></li>
 <li><a  href="adminBooking.php">Booking</a></li>
   
   <li><a href="#">&nbsp;</a></li>
   <li><a href="index.php">logOut</a></li>
</ul>
<div id="bg1">   </div>



  
	
	<table width="90%" align="center" border="1">
<tr>
		<td colspan="13" align="center"><strong><h3>Service Details </h3></strong></td>
  </tr>
	
	
		    <tr>
        
   <td width="154"><div align="center" class="style6"><strong>Service ID</strong> </div></td>
   <td width="154"><div align="center" class="style6"><strong>Contractor ID</strong> </div></td>
		   <td width="154"><div align="center" class="style6"><strong>Service Name</strong> </div></td>
		    <td width="153"><div align="center" class="style6"><strong>Budget</strong> </div></td>
		    <td width="153"><div align="center" class="style6"><strong>Size</strong> </div></td>
			 <td width="142"><div align="center" class="style6"><strong>Details</strong> </div></td>
			  
            
	    </tr>
		<tr>
		<td height="21" colspan="10">&nbsp;</td>
		
		</tr>
		<?php
		$qry=mysqli_query($conn,"select * from service	 where cid='$a' ");
		
		while($row=mysqli_fetch_array($qry))
		{
		?>

        <tr>
		
	 <td><div align="center"><?php echo $row['id'];?></div></td>
	  <td><div align="center"><?php echo $row['cid'];?></div></td>
		    <td><div align="center"><?php echo $row['ser'];?></div></td>
			 <td><div align="center"><?php echo $row['cost'];?></div></td>
			  <td><div align="center"><?php echo $row['area'];?></div></td>
				 <td><div align="center"><?php echo $row['des'];?></div></td>
				  <th scope="col"><a href="deletebooks.php?id=<?php echo $row['id'];?>">Delete</a></th>
			 
	
			
        </tr>
		
		
				
        <?php
	
		}
		
		
		?>
</table>
   


</body>
<div id="footer"> copyrights & designedby@Building Contractor </div>
</html>