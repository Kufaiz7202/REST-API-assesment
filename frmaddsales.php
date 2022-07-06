<!DOCTYPE html>
<html>
<head>
	<title>Sales</title>
	<script>
		function fchkqty()
		{
         var salesqty
         salesqty=document.frmsale.salesqty.value;
         if IsNaN(salesqty)
         {
         	alert("Please Enter Number");
         }
		}
    </script>
</head>
<body>
	<?php
	    $dbc=mysqli_connect("localhost","root","","stocksystem");
	    if (mysqli_connect_error())
		{
	  	echo "Failed to connect to MYSQL".mysqli_connect_error();
		}
	?>
  <form name="frmsale" method="post" action="addsales.php" onsubmit="return fchkqty()">
  	<table align="center" border="1">
  		<tr>
  			<td colspan="2" align="center">Sales Form</td>
  			
  		</tr>
  		<tr>
  			<td>Customer ID</td>
  			<td>
  				<?php
  				 $chkcust="Select * from customer";
  				 $sqlcust=mysqli_query($dbc,$chkcust);
  				?>
  				<select name="custid">
  				<?php
       			  while ($line = mysqli_fetch_assoc($sqlcust))
          		   {
     			?>
     			<option value="<?php echo $line['Custid'];?>">
     			               <?php echo $line['Custid'];?>
     			               <?php echo $line['Custname'];?>
     			</option>
    			<?php
          		  } 
          		?> 				
  			</td>
  		</tr>
  		<tr>
  			<td>Product ID</td>
  			<td>
  			 <?php
              $chkprod="Select * from product";
              $sqlprod=mysqli_query($dbc,$chkprod);
  			 ?>
  			 <select name="prodid">
  			 <?php
  			  while ($lprodid=mysqli_fetch_assoc($sqlprod))
  			  {
  			 ?>
  			 <option value="<?php echo $lprodid['Prodid']; ?>">
  			 	            <?php echo $lprodid['Prodid']; ?>
  			 	            <?php echo $lprodid['Prodname']; ?>

  			 </option>
  			 <?php	
  			  }
  			 ?>
  				
  			</td>
  		</tr>
  		<tr>
  			<td>Quantity</td>
  			<td><input type="text" name="salesqty"></td>
  		</tr>
  		<tr>
  			<td>Date</td>
  			<td><input type="date"></td>
  		</tr>
  		<tr>
  			<td>Payment Type</td>
  			<td>Credit<input type="radio" name="payment "value="Credit"><br>
  			    Cash<input type="radio" name="payment" value="Cash"></td>
  		</tr>
  		<tr>
  			<td colspan="2" align="center">
  				<input type="Submit">
  			    <input type="Reset">
  			</td>
  			
  		</tr>
  	</table>
</body>
</html>