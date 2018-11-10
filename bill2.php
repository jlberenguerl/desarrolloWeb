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
  <meta name="robots" content="index,follow"> <!-- que indique que hacer -->
  <title>Bill Expenses</title>
  <link rel="stylesheet" type="text/css" href="css/style_form.css">
</head>

<body>
	<form action="bill2.php" method="post" enctype="multipart/form-data">
		<table align="center" border="2" background="#187eae">
			<tr align="center">
				<td colspan="7" ><h2><b>Bill Expenses</b></h2></td>
			</tr>
      <tr>
				<td align="right"><b>Concept:</b></td>
				<td><textarea name="concept" cols="30" rows="10" autofocus></textarea></td>
			</tr>
      <tr>
				<td align="right"><b>Unit Price:</b></td>
				<td><input type="text" name="unit_price" required/></td>
			</tr>
      <tr>
				<td align="right"><b>Number of elements:</b></td>
				<td><input type="text" name="n_elements" required/></td>
			</tr>
      <tr>
        <!-- n_elements * unit_price -->
          <td align="right"><b>Total:</b></td>
          <td> </td>
      </tr>
      <tr>
          <td align="right"><b>Sub_Total_W_Taxes:</b></td>
          <td>  </td>
      </tr>
      <tr>
        <!--  total * iva, ej 300*1.16-->
          <td align="right"><b>Total_Taxes:</b></td>
          <td> </td>
      </tr>
      <tr>
          <td align="right"><b>General Total:</b></td>
          <td>  </td>
      </tr>
			<tr align="center">
				<td colspan="7"><input type="submit" name="bill" value="Generate"/></td>
			</tr>
		</table>
	</form>
</body>
</html>

<?php

	if(isset($_POST['bill'])){


		$concept= $_POST['concept'];
		$unit_price = $_POST['unit_price'];
		$n_elements = $_POST['n_elements'];

		$total = $unit_price * $n_elements;
		$sub_t_w_tax = $total;
    $total_tax = $total * 0.16; //iva actual 16%
    $general_total = $total + $total_tax;

		 $insert_b = "insert into bill_expense (concept, unit_price, n_elements, total,sub_t_w_tax,total_tax,general_total) values ('$concept','$unit_price','$n_elements','$total','$sub_t_w_tax','$total_tax','$general_total')";

		 $insert = mysqli_query($con, $insert_b); //conexión a la bd

			 if($insert){
			 echo "<script>alert('A new Bill Expense has been inserted with its whole values in the database!')</script>";
			 echo "<script>window.open('taller.php','_self')</script>"; // para que no se inserte al actualizar
			 }
	}

?>
