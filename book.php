<?php
 	include("dbconnect.php");
	extract($_POST);
	session_start();
	 $uid=$_SESSION['uid'];
 $bid=$_REQUEST['id'];
 $amnt=$_REQUEST['amnt'];
	


	
	
if(isset($_POST['btn']))
{

$qt=mysql_query("select * from book where bid='$bid' && frm='$frm'");
$num=mysql_num_rows($qt);
if($num>=1)
{

echo "Choose Another Day The Bike Is Aldredy Booked In That Day";


}

else
{


$start_date = strtotime($frm); 
$end_date = strtotime($to);

   echo $dt=($end_date - $start_date)/60/60/24; 


$amount=$amnt*$dt;


$max_qry = mysql_query("select max(id) from book");
		$max_row = mysql_fetch_array($max_qry); 
		$id=$max_row['max(id)']+1;

$qry=mysql_query("insert into book values('$id','$uid','$bid','$frm','$to','$amount','$license','')");
	if($qry)
	{
	
	echo "<script>alert('inserted sucessfully')</script>";
	header("location:payment.php?id=$id&amnt=$amount");
	}
	else
	{
	
	
		echo "failed";
	}
	
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
  <li><a class="active" href="uhome.php"><strong>User Home</a></li>
  <li><a href="#">&nbsp;</a></li>
  <li><a href="view.php"><strong>View Booking</a></li>
  <li><a href="#">&nbsp;</a></li>
   <li><a href="index.php"><strong>LogOut</a></li>
</ul>

<br />
<br />
<div id="bg1">Online Bike Rental System</div>




<form id="f1" name="f1" method="post" action="#" onSubmit="return vali()">
  <table width="39%" height="228" border="0" align="center">
		

	
    <tr>
    
      
      <td height="42" colspan="2"  align="center" ><div class="style5"><h3>Book The Bikes</h3></div></td>
    
    </tr>
	
	
	
	
	
	
	
    <tr>
    
      <td height="60">From Date</td>
      <td><label>
        <input name="frm" type="date" id="frm" />
      </label></td>
     
    </tr>
	
	
	
    <tr>
    
      <td height="56">To Date</td>
      <td><label>
        <input name="to" type="date" id="to" />
      </label></td>
     
    </tr>
	
    
	
	  <tr>
    
      <td height="56">Upload Your License</td>
      <td><label>
        <input name="license" type="file" id="license" />
      </label></td>
     
    </tr>

	
	
	
	
	
	<tr>
       <td height="60">&nbsp;</td>
      <td><input name="btn" type="submit" id="btn" value="Enter" />
      <input type="reset" name="Submit2" value="Reset" /></td>
    </tr>
  </table>
</form>






<div id="footer"> <p>copyrights & designedby@Bike Portal</p>
</div>