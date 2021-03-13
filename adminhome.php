
<?php
 	include("dbconnect.php");
	extract($_POST);
	session_start();

if(isset($_POST['btn']))
{



$max_qry = mysql_query("select max(id) from bikes");
		$max_row = mysql_fetch_array($max_qry); 
		$id=$max_row['max(id)']+1;

$qry=mysql_query("insert into bikes values('$id','$name','$year','$model','$amnt','$biken','$img')");
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
  <li><a class="active" href="adminhome.php"><strong>Admin Home</a></li>
  <li><a href="#">&nbsp;</a></li>
  <li><a href="booking.php"><strong>Booking Details</a></li>
   <li><a href="#">&nbsp;</a></li>
  <li><a href="viewu.php"><strong>User Details</a></li>
   <li><a href="#">&nbsp;</a></li>
   <li><a href="index.php"><strong>LogOut</a></li>
</ul>

<br />
<br />
<div id="bg1">Online Bike Rental System</div>








<form id="f1" name="f1" method="post" action="#">
  <table width="39%" height="438" border="0" align="center">
		

	
    <tr>
    
      
      <td height="42" colspan="2"  align="center" ><div class="style5"><h3>Enter Rental Bike Details</h3></div></td>
    
    </tr>
	
	
	
	
	
	
	
    <tr>
    
      <td height="54">Bike Name</td>
      <td><label>
        <input name="name" type="text" id="name" />
      </label></td>
     
    </tr>
	
	
	
    <tr>
       <td height="47">Year</td>
      <td><input name="year" type="text" id="year" /></td>
      
    </tr>
	
	  <tr>
       <td height="41">Model</td>
      <td><input name="model" type="text" id="model"  /></td>
     
    </tr>
	
	
	
	
	<tr>
      <td height="45">Rent Amount(per day)</td>
      <td><input type="text" name="amnt" id="amnt"></td>
     
    </tr>
	
	
    <tr>
   
      <td height="51">Bike Number</td>
      <td><input name="biken" type="text" id="biken" /></td>
      
    </tr>
	
	
	
	
	
    <tr>
    
      <td height="41">Bike Image</td>
      <td><input name="img" type="file" id="img" /></td>
   
    </tr>
	
	
	<tr>
       <td height="55">&nbsp;</td>
      <td><input name="btn" type="submit" id="btn" value="Submit" />
      <input type="reset" name="Submit2" value="Reset" /></td>
    </tr>
  </table>
</form>









<div id="footer"> <p>copyrights & designedby@Bike Portal</p>
</div>