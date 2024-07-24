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
table{
font-size:18px;
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
   .add{
	   padding:10px;
	  background:#0033FF;
	  color:#FFFFFF;
	  
	  font-weight:800;
	align-items:flex-end;
	  border-radius:5px;
	    width:90px;
	  text-align:center;
	  margin-left:150px;
	  margin-top:20px;
	  font-size:14px;
	  }
	  .add a{
	  text-decoration:none;
	  color:#FFF;
	  }
	
	   .main{
	  display:flex;
	  flex-wrap:wrap;
	  column-gap:50px;
	  row-gap:20px;
	  margin-bottom:10px;
	
	  }
	  .main2{
	  display:flex;
	  flex-direction:column;
	  flex-wrap:wrap;
	  width:350px;
	  height:250px;
	  row-gap:5px;
	  padding:25px;
	  box-shadow:2px 2px  10px 2px lightgray;
	  margin-left:20px;
	  box-sizzing:border-box;
	  border-top-left-radius:10px;
	
	  border-top-right-radius:10px;
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
	.main table,th,td{
	  paddding:10px;
	  }
	  
	  input{
border:1px solid black;
}
textarea{
border:1px solid black;
}
	  
</style>
</head>

<p>Building Contractor Booking  Site</p>

<ul>
	 <li><a href="#">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp;</a></li>
	  <li><a href="#">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp;</a></li>
  <li><a href="userhome.php">Home</a></li>
  <li><a class="active" href="userSearch.php">Search</a></li>
  <li><a href="userBooking.php">My booking</a></li>
    
   <li><a href="#">&nbsp;</a></li>
   <li><a href="index.php">logOut</a></li>
</ul>
<div id="bg1">   </div>
	 <div class="main"> 
	<?php
	    $qry=mysqli_query($conn,"select * from service ");	  
	  while($row=mysqli_fetch_array($qry)){ ?>
	    <div class="main2">
	  <table border="0" >
	  <tr>
	  <td>Service Name</td> <td><?php echo $row['ser']; ?></td></tr>
	    <tr> <td>Budget</td><td><?php echo $row['cost']; ?></td></tr>
	  <tr><td>Size</td><td><?php echo $row['area']; ?></td></tr>
	   <td>Details</td> <td><?php echo $row['des']; ?></td></tr>
	  </table>
	<td colspan="2" align="center" class="add"> <strong><a href="userSendRequest.php?id=<?php echo $row['id'];?>" class="add">Request</a></strong></td>
		  </div>
	  <?php } ?>		
	  </div>
<br><br> 
</body>
<div id="footer"> copyrights & designedby@Building Contractor </div>
</html>
