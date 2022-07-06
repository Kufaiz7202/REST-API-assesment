<!DOCTYPE html>
<html>
<head>
	<title>Customer list</title>
</head>
<body>
	<form>
		<h3 align="center">Customer List</h3>
		<table align="center" border="1">
			
			<tr>
				<td>
					Customer ID
				</td>
				<td>
					Customer Name
				</td>
				<td>
					Email
				</td>
				<td colspan="2">
					Action
				</td>
			</tr>

			<?php
			$dbc=mysqli_connect("localhost","root","","stocksystem");

			if(mysqli_connect_errno())
			{
				echo "Failed to connect to MySQL:".mysqli_connect_errno();
			}
			$mylist="select * from customer";
			$chkmylist=mysqli_query($dbc,$mylist);

			while ($list=mysqli_fetch_assoc($chkmylist)) 
			{
				Print
				'
				<tr>
					<td>'.$list['Custid'].'</td>
					<td>'.$list['Custname'].'</td>
					<td>'.$list['Custemail'].'</td>
					<td> <a href="frmcustdel.php?fcustid='.$list['Custid'].'">Delete</a> </td>
					<td><a href="frmcustupd.php?fcustid='.$list['Custid'].'">Update</a> </td>
				</tr>';
				
			}
			?>
		</table>
	</form>

</body>
</html>