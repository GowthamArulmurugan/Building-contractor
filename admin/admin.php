<?php
 	include("dbconnect.php");
	extract($_POST);
	session_start();
	
if(isset($_POST['btn']))
{
$qry=mysqli_query($conn,"select * from contractor where uname='$uname' && psw='$password'");
$num=mysqli_num_rows($qry);
if($num==1)
{
$qry1=mysqli_query($conn,"select * from contractor where uname='$uname' && psw='$password'");
$row=mysqli_fetch_assoc($qry1);
$_SESSION['cid']=$row['id'];

?>
<script>alert('welcome to contractor home page');
</script>
<?php

header("location:adminhome.php");
}
else
{
echo "<script>alert('User Name Password Wrong.....')</script>";

}
}
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
  <li><a  href="index.php">Home Page</a></li>
  <li><a href="#">&nbsp;</a></li>
  <li><a class="active" href="admin.php">Contractor login</a></li>
  <li><a href="#">&nbsp;</a></li>
  <li><a href="user.php">User Login</a></li>
</ul>
<div id="bg1">   </div>
<div> &nbsp;</div>
<form  method="post" action="">
	   <table width="46%" border="0" align="center">
         <tr>
           <td colspan="2" rowspan="1"><div align="center" class="style1"><strong><font size="+1">Contractor Login</font> </div></td>
		 </tr>
			<tr>
		<td width="48%">&nbsp;</td>
		    <td width="52%">&nbsp;</td>
	  		</tr>
         </tr>
         <tr>
           <td height="31"align="center"><span class="style2"><strong>User Name </strong></span></td>
           <td><label>
             <input name="uname" type="text" id="uname" />
           </label></td>
         </tr>
         <tr>
           <td height="44" align="center"><span class="style2"><strong>Password</strong></span></td>
           <td><label>
             <input name="password" type="password" id="password" />
           </label></td>
         </tr>
         <tr>
           <td>&nbsp;</td>
           <td rowspan="2"><label>
             <input name="btn" type="submit" id="btn" value="Login" />
             <input type="reset" name="Submit2" value="Cancel" />
           </label></td>
         </tr>
		   <tr>
           <td>&nbsp;</td>
           <td >
            <a href="bregister.php">New contractor Register Here</a>          </td>
         </tr>
  </table>
</form>
<br>
<br>
<br>
<div id="footer"> <strong>copyrights & designedby@Building Constraction </strong></div>