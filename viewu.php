
<?php
 	include("dbconnect.php");
	extract($_POST);
	session_start();
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


<table width="98%" align="center">

<tr>
		<td colspan="10" align="center"><strong>User Details</strong></td>
  </tr>

	<tr>
		<td colspan="10">&nbsp;</td>
  </tr>
	
		    <tr>
          <td width="1%">&nbsp;</td>
          <td width="7%"><div align="center" class="style6"><strong>Id</strong> </div></td>
		   <td width="11%"><div align="center" class="style6"><strong>User Name</strong> </div></td>
		   <td width="11%"><div align="center" class="style6"><strong>Gender</strong> </div></td>
		    <td width="11%"><div align="center" class="style6"><strong>Age</strong> </div></td>
			  <td width="9%"><div align="center" class="style6"><strong>Email</strong> </div></td>
			   <td width="10%"><div align="center" class="style6"><strong>Contact No</strong> </div></td>
			     <td width="10%"><div align="center" class="style6"><strong>Address</strong> </div></td>
				  </tr>
		<tr>
		<td colspan="10">&nbsp;</td>
		</tr>
		<?php
		$qry=mysql_query("select * from register");
		$i=1;
		while($row=mysql_fetch_array($qry))
		{
		?>

        <tr>
		 <td width="1%">&nbsp;</td>
		    <td><div align="center"><?php echo $row['id'];?></div></td>
		   <td><div align="center"><?php echo $row['name'];?></div></td>
			  <td><div align="center"><?php echo $row['gender'];?></div></td>
			   <td><div align="center"><?php echo $row['age'];?></div></td>
				 <td><div align="center"><?php echo $row['email'];?></div></td>
				  <td><div align="center"><?php echo $row['phone'];?></div></td>
				   <td><div align="center"><?php echo $row['address'];?></div></td>

		 
        </tr>
		
		
		 <tr>
		  	 	<td>&nbsp;</td>
		   		<td>&nbsp;</td>
				<td>&nbsp;</td>
			 	<td>&nbsp;</td>
			 	<td>&nbsp;</td>
			 	<td>&nbsp;</td>
		
		
		</tr>
		
        <?php
		$i++;
		}
		?>
				<tr>

		<td colspan="10" align="center">&nbsp;</td>
		</tr>
		
</table>





<div id="footer"> <p>copyrights & designedby@Bike Portal</p>
</div>