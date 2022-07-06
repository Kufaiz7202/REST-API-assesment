<?php
$cid=$_GET['fid'];
$cname=$_POST['fcustname'];
$cemail=$_POST['fcustemail'];
$dbc=mysqli_connect("localhost","root","","stocksystem");
if(mysqli_connect_errno())
{
	echo"Failed to connect to MySQL: ".mysqli_coonnect_error();
}
$update="update customer set `custid`='$cid',`custname`='$cname',`custemail`='$cemail' where `custid`='$cid'";
$chksql=mysqli_query($dbc,$update);
if($chksql)
{
	print' <script>alert("Record had been Updated")</script>';
	print' <script>window.location.assign("listcustomer.php");</script>';
}

else
{
	print' <script>alert("Record had not been Updated")</script>';
	print' <script>window.location.assign("listcustomer.php");</script>';
}
?>