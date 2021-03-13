<?php
 	include("dbconnect.php");
	extract($_POST);
	session_start();
	 $uid=$_SESSION['uid'];
	$amount=$_REQUEST['amnt'];
	echo $id=$_REQUEST['id'];
if(isset($_POST['btn']))
{

	$qry=mysql_query("update book set status='1' where id='$id'")


?>
<script language="javascript">
	alert("Amount Transfer Successfull..");
	window.location.href="view.php";
	</script>
<?php
}
?>

<html>
<title>Bike Portal</title>
<style>

p
{
	color:#ffffff;
	text-align: center;
	text-transform: uppercase;
	 font-size:15px;
}

ul {
	padding:30px;
	
  list-style-type: none;
  overflow: hidden;
  background:#666600;
   background-repeat: no-repeat;
   background-size: 1420px  200px;
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
  color: #ffffff;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
}

li a:hover {
  background-color: #99ff33;
}

.active {
  background-color: #99ff33;
}

#footer {
   padding: 30px;
  background: #666600;
  background-repeat: no-repeat;
  background-size: 1420px  100px;
  border-radius:10px;
  text-align:center;
  text-decoration:blink;
   font-family: Arial;
   font-size:15px;
}
#bg1 {

  padding:150px;
  background:url("images/4.jpg");
  background-repeat: no-repeat;
  background-size: 1420px  300px;
  border-radius:5px;
   border-radius:10px;
    text-align:left;
   font-size:30px;
   color:#ffffff;
}

</style>
</head>
<ul>
	 <li><a href="#">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp;</a></li>
  <li><a class="active" href="uhome.php"><strong>User Home</a></li>
  <li><a href="#">&nbsp;</a></li>
  <li><a href="view.php"><strong>View Booking</a></li>
  <li><a href="#">&nbsp;</a></li>
   <li><a href="index.php"><strong>LogOut</a></li>
</ul>

<br />
<br />
<div id="bg1">Online Bike Rental System</div>

<form method="post" action="#">
	  <table width="45%" height="312" border="0" align="center">
        <tr>
          <td colspan="2"><span class="style1">Payment Mode.... </span></td>
        </tr>
        <tr>
          <td height="48">&nbsp;</td>
          <td width="61%"><label>
            <input type="image" name="imageField" src="images/payment.png" />
          </label></td>
        </tr>
        <tr>
          <td width="39%" height="41"><span class="style4">Amount</span> </td>
		  <td> <?php echo $amount;?></td>
        </tr>
        <tr>
          <td height="48"><span class="style4">Enter Card Number </span></td>
          <td><input name="cno" type="text" id="cno" /></td>
        </tr>
        <tr>
          <td height="50"><span class="style4">CVV Number </span></td>
          <td><input name="cvv" type="password" id="cvv" /></td>
        </tr>
        <tr>
          <td height="44"><span class="style4">Card Name </span></td>
          <td><input name="cname" type="text" id="cname" /></td>
        </tr>
        <tr>
          <td>&nbsp;</td>
          <td><input name="btn" type="submit"value="Pay" /></td>
        </tr>
  </table> 
</form>


<div id="footer"> <p>copyrights & designedby@Bike Portal</p>
</div>