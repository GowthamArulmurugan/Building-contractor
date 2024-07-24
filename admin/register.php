<?php
 	include("dbconnect.php");
	extract($_POST);
	session_start();
if(isset($_POST['btn']))
{
$qry=mysqli_query($conn,"insert into register(name,gender,age,email,phone,location,address,uname,psw) values('$name','$gender','$age','$email','$phone','$loc','$address','$uname','$psw')");
	if($qry)
	{
	echo "<script>alert('inserted sucessfully')</script>";
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
  <li><a  href="index.php">Home Page</a></li>
  <li><a href="#">&nbsp;</a></li> <li><a href="admin.php">contracor login</a></li>
  <li><a href="#">&nbsp;</a></li>
  <li><a  href="user.php">User Login</a></li>
</ul>
<div id="bg1">   </div>
	 <form id="f1" name="f1" method="post" action="#">
  <table width="36%" border="0" align="center">	
    <tr>
          <td colspan="2"  align="center" ><div class="style5"><h3>New User Registation</h></div></td>
    </tr>
    <tr>
      <td width="38%">Name</td>
      <td width="62%"><input name="name" type="text" id="name" onChange="return name ()"/>
      </td>  
    </tr>
    <tr>
      <td>Gender</td>
      <td><input name="gender" type="radio" value="male" />
        Male
          <input name="gender" type="radio" value="female" /> 
          Female</td>
    </tr>
    <tr>
      <td>Age</td>
      <td>
        <input name="age" type="text" id="age" onChange="return age ()" />
      </td>
    </tr>
    <tr>
      <td>Email Id</td>
      <td><input name="email" type="text" id="email" onChange="return email()" /></td>
    </tr>
	  <tr>
      <td>Phone Number </span></td>
      <td><input name="phone" type="text" id="phone" onChange="return phone()" /></td>
    </tr>	
		<tr>
      <td>Location</td>
      <td><input type="text" name="loc" id="loc"></td>
    </tr>
	   <tr>
      <td>Address</td>
      <td><textarea name="address" id="address"></textarea></td>
       </tr>
    <tr>
      <td>User Name</td>
      <td><input name="uname" type="text" id="uname" /></td>
    </tr>	
    <tr>
     <td>Passwrod</td>
      <td><input name="psw" type="password" id="psw" /></td>
    </tr>
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