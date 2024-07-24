<?php
 	include("dbconnect.php");
	extract($_POST);
	session_start();
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
<li><a class="active" href="adminViewService.php">View Product</a></li>   
   <li><a href="#">&nbsp;</a></li>
   <li><a href="index.php">logOut</a></li>
</ul>
<div id="bg1">   </div>
  <?php 
	  if(isset($_POST['btn'])){
	  ?>
	 <div class="main"> 
	<?php
	    $qry=mysqli_query($conn,"select * from serviceTB");
	  while($row=mysqli_fetch_array($qry)){ ?>	  
	  <table border="0" >
	  <tr>
	  <td>Service Name</td> <td><?php echo $row['ServiceName']; ?></td></tr>
	  <tr> <td>Budget</td><td><?php echo $row['Budget']; ?></td></tr>
	  <tr><td>Details</td><td><?php echo $row['Details']; ?></td></tr>
	   <td>Size</td> <td><?php echo $row['Size']; ?></td></tr>
	  </table>
		  </div>
	  <?php } ?>
	  </div>
<br><br> <?php } ?>
</body>
<div id="footer"> copyrights & designedby@Building Contractor </div>
</html>