<?php
	$cid=$_POST['fcustid'];
	$cname=$_POST['fcustname'];
	$cemail=$_POST['fcustemail'];
					//   ipaddress        password  database
	$dbc=mysqli_connect("localhost","root","","stocksystem");
	if(mysqli_connect_errno())
	{
		echo "Failed to connect to MySQL:".mysqli_connect_errno();
	}
	$sql="INSERT INTO customer(`Custid`,`Custname`,`Custemail`) values ('$cid' , '$cname' , '$cemail')";

	$result=mysqli_query($dbc,$sql);
	if($result)
	{
		print '<script>alert("Record has been added");</script>';
		print '<script>window.location.assign("frmaddcustomer.php");</script>';
	}
	else
	{
	print '<script>alert("Record has not been added");</script>';
	print '<script>window.location.assign("frmaddcustomer.php");</script>';
	}
?>