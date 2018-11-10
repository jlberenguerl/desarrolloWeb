<!--José Luis Berenguer . November 9th, 2018  -->
<!DOCTYPE html>
<?php
include("includes/db.php");
?>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <meta name="robots" content="index,follow">
  <title> Workshop </title>
  <link rel="stylesheet" type="text/css" href="css/style_form.css">
</head>

<body>
	<form action="workshop.php" method="post" enctype="multipart/form-data">
		<table align="center" width="480" border="2" >
			<tr align="center">
				<td colspan="6" ><h2><b>Add a New Workshop!</b></h2></td>
			</tr>
			<tr>
				<td align="right"><b>Order_ID:</b></td>
				<td><input type="text" name="order_id" size="20" required autofocus/></td>
			</tr>
      <tr>
        <td align="right"><b>Customer ID:</b></td>
        <td><input type="text" name="cust_id"  required> </td>
      </tr>
      <tr>
        <td align="right"><b>Product ID:</b></td>
        <td><input type="text" name="product_id" required> </td>
      </tr>
      <tr>
				<td align="right"><b>Date:</b></td>
				<td><input type="datetime-local" name="date" required/></td>
			</tr>
      <tr>
        <td align="right"><b>State:</b></td>
        <td><input type="text" name="state" required/></td>
      </tr>
      <tr>
        <td align="right"><b>Branch:</b></td>
        <td><input type="text" name="branch" required/></td>
      </tr>
			<tr align="center">
				<td colspan="6"><input type="submit" name="workshop" value="Insert Workshop"/></td>
			</tr>
		</table>
	</form>
</body>
</html>

<?php

	if(isset($_POST['workshop'])){

		$order_id= $_POST['order_id'];
		$cust_id = $_POST['cust_id'];
		$product_id = $_POST['product_id'];
		$date = $_POST['date'];
    $state = $_POST['state'];
    $branch = $_POST['branch'];

		 $insert_ws = "insert into workshop (order_id, cust_id, product_id, date, state, branch) values ('$order_id','$cust_id','$product_id','$date','$state','$branch')";

		 $insert_w = mysqli_query($con, $insert_ws); //conexión a la bd

			 if($insert_w){

			 echo "<script>alert('has been inserted!')</script>";
			 echo "<script>window.open('taller.php','_self')</script>";
			 }
	}

?>
