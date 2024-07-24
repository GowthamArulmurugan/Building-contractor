<?php
 	include("dbconnect.php");
	extract($_POST);
	session_start();
	echo $a=$_SESSION['cid'];
	
if(isset($_POST['btn']))
{


					
$qry=mysqli_query($conn,"insert into  service values('','$a','$serviceName','$size','$budget','$details')");
if($qry)
{
			echo "<script>alert('Service Added')</script>";
	
							}
							
					else
							{
	
							echo "failed";
	
							}
				 
			
		
}

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
  <li><a class="active" href="adminhome.php">Admin Home</a></li>
<li><a  href="adminViewProduct.php">View Service</a></li>
 <li><a  href="adminBooking.php">Booking</a></li>
   
   <li><a href="#">&nbsp;</a></li>
   <li><a href="index.php">logOut</a></li>
</ul>
<div id="bg1">   </div>










	 <form id="f1" name="f1" method="post" action="#" enctype="multipart/form-data" >
  <table width="36%" height="404" border="0" align="center">
	
    <tr>
          <td colspan="2"  align="center" ><div class="style5"><h3>Add Service</h3></div></td>
    </tr>
	
    <tr>
     
      <td width="38%" height="59">Service Name</td>
      <td width="62%"><input name="serviceName" type="text" id="pname" />      </td>
    </tr>
	
	
	  <tr>
      <td height="48">Budget</td>
      <td><input name="budget" type="text" id="price"/></td>
    </tr>
	
	   <tr>
      <td height="60">Area Size</td>
      <td><textarea name="size" id="usage"></textarea></td>
       </tr>
	
	<tr>
    
      <td height="51">Details</td>
      <td><textarea name="details" id="stk"></textarea></td>
    </tr>

    <tr>
     
   
	
	<tr>
      <td>&nbsp;</td>
      <td><input name="btn" type="submit" id="btn" value="Submit" />
      <input type="reset" name="Submit2" value="Reset" /></td>
    </tr>
  </table>
</form>


</body>
<div id="footer"> copyrights & designedby@Building Contractor </div>
</html>