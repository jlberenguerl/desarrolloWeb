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
  <title> Bills </title>
  <link rel="stylesheet" type="text/css" href="css/style_form.css">
</head>

<body>
	<form action="bill.php" method="post" enctype="multipart/form-data">
		<table align="center"  border="2" >
			<tr align="center">
				<td colspan="7" ><h2><b>Add a new BILL</b></h2></td>
			</tr>
			<tr>
				<td align="right"><b>Order_ID:</b></td>
				<td><input type="text" name="o_id" size="20" required autofocus/></td>
			</tr>
			<tr>
				<td align="right"><b>ID:</b></td>
        <td><input type="text" name="id" size="20" required/></td>
			</tr>
      <tr>
      	<td align="right"><b>Product_ID:</b></td>
        <td><input type="text" name="prod_id" size="30" required/></td>
      </tr>
			<tr>
				<td align="right"><b>Sub_Total_W_Taxes:</b></td>
				<td><input type="text" name="sub_t_w_tax" size="30" required/></td>
			</tr>
			<tr>
				<td align="right"><b>Total_Taxes:</b></td>
        <td> </td>
			</tr>
			<tr>
  				<td align="right"><b>General_Total:</b></td>
				<td>
        </td>
			</tr>
      <tr>
          <td align="right"><b>Printed?:</b></td>
        <td>
          <!--  Factura impresa o no-->
            <select  name="status">
                <option>No</option>
                <option>Yes</option>
            </select>
        </td>
      </tr>
			<tr align="center">
				<td colspan="7"><input type="submit" name="insert_bb" value="Insert Bill"/></td>
        <!-- <td colspan="7" align="right"><input type="reset" name="reset" value="Reset"/></td> -->
			</tr>
		</table>
	</form>
</body>
</html>

<?php

	if(isset($_POST['insert_bb'])){

		//getting the text data from the fields
		// $bill_id = $_POST['bill_id'];  PRIMARY KEY
		$o_id= $_POST['o_id'];
		$id = $_POST['id'];
		$prod_id = $_POST['prod_id'];
		$sub_t_w_tax = $_POST['sub_t_w_tax'];
		$total_tax = $sub_t_w_tax * 0.16; //iva actual 16%
    $general_total = $sub_t_w_tax + $total_tax;
    $status = $_POST['status'];

		 $insert_bill = "insert into bill (o_id, id, prod_id, sub_t_w_tax, total_tax, general_total, status) values ('$o_id','$id','$prod_id','$sub_t_w_tax','$total_tax','$general_total','$status')";

		 $insert_b = mysqli_query($con, $insert_bill); //conexión a la bd

			 if($insert_b){
			 echo "<script>alert('Bill has been Inserted!')</script>";
			 echo "<script>window.open('taller.php','_self')</script>";
			 }
	}

?>
