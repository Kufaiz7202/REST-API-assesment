<?php
$cid=$_GET['fid'];
$cname=$_POST['fcustname'];
$cemail=$_POST['fcustemail'];
$dbc=mysqli_connect("localhost","root","","stocksystem");
if(mysqli_connect_errno())
{
	echo"Failed to connect to MySQL: ".mysqli_coonnect_error();
}
$delete="delete from `customer`where `custid`='$cid'";
$chksql=mysqli_query($dbc,$delete);
if($chksql)
{
	print' <script>alert("Record had been Deleted")</script>';
	print' <script>window.location.assign("listcustomer.php");</script>';
}

else
{
	print' <script>alert("Record had not been Deleted")</script>';
	print' <script>window.location.assign("listcustomer.php");</script>';
}
?>