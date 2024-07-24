<?php
 	include("dbconnect.php");
	extract($_POST);
	session_start();
	$uid= $_SESSION['uid'];
$id=$_REQUEST['id'];
$k=$_REQUEST['cost'];
 if(isset($_POST['btn']))
{
$qry=mysqli_query($conn,"update book set payment='$k' where id=$id");

if($qry){
?>
<script language="javascript">
	alert("Amount Transfer Successfull..");
	window.location.href="userhome	.php";
	</script>
<?php
}}
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
  <li><a href="userBooking.php">My booking</a></li>
   <li><a href="#">&nbsp;</a></li>
   <li><a href="index.php">LogOut</a></li>
</ul>
<div id="bg1">   </div>
<div> &nbsp;</div>
<form method="post" action="#" >
	  <table width="50%" border="0" align="center" style="margin:0 auto;">
        <tr>
          <td colspan="2"><span class="style1">Payment Mode.... </span></td>
        </tr>
        <tr>
          <td>&nbsp;</td>
          <td><label>
            <input type="image" name="imageField" src="images/payment.png" />
          </label></td>
        </tr>
        <tr>
          <td width="35%"><span class="style4">Amount</span> </td>
		  <td> <?php echo $k;?></td>
        </tr>
        <tr>
          <td height="33"><span class="style4">Enter Card Number</span></td>
          <td><input name="cno" type="text" id="cno" pattern="[0-9]{16}" title="16 digits"/></td>
        </tr>
        <tr>
          <td height="36"><span class="style4">CVV Number </span></td>
          <td><input name="cvv" type="password" id="cvv" pattern="[0-9]{3}" title="3 digits" /></td>
        </tr>
        <tr>
          <td><span class="style4">Card Name </span></td>
          <td><input name="cname" type="text" id="cname" /></td>
        </tr>
        <tr>
          <td>&nbsp;</td>
          <td><input name="btn" type="submit"value="Pay" /></td>
        </tr>
      </table> 
  </form>
 <br>
<br>
<br>
<br>
<div id="footer"> <strong>copyrights & designedby@Building Constraction </strong></div>