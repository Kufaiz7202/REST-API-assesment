<!DOCTYPE html>
<html>
<head>
	<title>Customer Search Form</title>
</head>
<body>

	<form name="frmseacrhcustomer" method="post" action="">
		<p>
			<center>
				<table>

					<tr>
					<h1>Search Customer By Customer ID and Email</h1>
					<td>Customer ID : </td>
					<td><input type="text" name="custid" placeholder="Enter Customer ID" required /> </td>
					</tr>

					<tr>
					<td>Customer Email : </td>
					<td><input type="text" name="custemail" placeholder="Enter Customer Email" required /></td>
					</tr>

				</table>
		</p>
		
		<p>
			<input type="submit" name="btnsearch" value="Search" />
		</p>
			</center>
	</form>

	<?php
		$dbc=mysqli_connect("localhost","root","","stocksystem");
			if(mysqli_connect_errno())
				{
					echo"Failed to connect to MySQL: ".mysqli_coonnect_errno();
				}
			if(isset($_POST['btnsearch']))
				{
					$cid = $_POST['custid'];
					$sql = "SELECT * FROM customer WHERE `Custid` = '$cid'";
					$rquery = mysqli_query($dbc,$sql);
					$countrec = mysqli_num_rows($rquery);
					
					if ($countrec == 0) 
					{
						print '<script>alert("Customer ID not found");</script>';					
					}
					if($rquery === FALSE)
					{
						echo mysql_error();
					}
					while($row = mysqli_fetch_array($rquery))
					{
						echo '<div align="center">'.'Customer ID : '.$row['Custid'];
						echo '<br> Name : '.$row['Custname'];
						echo '<br> Email : '.$row['Custemail'];
					}

				}
	?>
			
</body>
</html>