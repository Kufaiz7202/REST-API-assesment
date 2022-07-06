<!DOCTYPE html>
<html>
<head>
	<title>Customer Update Form</title>
</head>
<body>

	<?php
		$cid=$_GET['fcustid'];
		$dbc=mysqli_connect("localhost","root","","stocksystem");
		if(mysqli_connect_errno())
		{
			echo"Failed to connect to MySQL: ".mysqli_coonnect_error();
		}
		$cari="Select * from `customer` where `Custid`='$cid'";
		$result=mysqli_query($dbc,$cari);
		$row = mysqli_fetch_assoc($result);
	?>

	<form name="frmupdcustomer" method="Post" action="updcustomer.php?fid=<?php echo $cid;?>">
		<table align="center" border="1">
			<tr>
				<td>Customer Id</td>
				<td><input type="text" name="fcustid" value="<?=$row['Custid']?>" disabled></td>
			</tr>
			<tr>
				<td>Customer Name</td>
				<td><input type="text" name="fcustname" value="<?=$row['Custname']?>"></td>
			</tr>
			<tr>
				<td>Email</td>
				<td><input type="email" name="fcustemail" value="<?=$row['Custemail']?>"></td>
			</tr>
			<tr>
				<td colspan="2" align="center"><input type="Submit" name="btnsubmit" value="Update" onclick="return confirm('Are you sure?')"></td>
			</tr>
		</table>
		
	</form>
</body>
</html>