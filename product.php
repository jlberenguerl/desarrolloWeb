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
  <title> Products</title>
  <link rel="stylesheet" type="text/css" href="css/style_form.css">
</head>
<body>
	<form action="product.php" method="post" enctype="multipart/form-data">
		<table align="center" width="480" border="2" >
			<tr align="center">
				<td colspan="5" ><h2><b>Insert Products</b></h2></td>
			</tr>
			<tr>
				<td align="right"><b>Product_ID:</b></td>
				<td><input type="text" name="p_id" size="20" required autofocus/></td>
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
          <td align="right"><b>Total:</b></td>
          <td>  </td>
      </tr>
			<tr align="center">
				<td colspan="5"><input type="submit" name="product" value="Insert Product"/></td>
			</tr>
		</table>
	</form>
</body>
</html>

<?php

	if(isset($_POST['product'])){

		//getting the text data from the fields
		$p_id= $_POST['p_id'];
		$concept = $_POST['concept'];
		$unit_price = $_POST['unit_price'];
		$n_elements = $_POST['n_elements'];
    $total = (($unit_price * $n_elements) * 1.16); // precio por cantidad de elementos y su valor agreagdo de iva

		 $insert_pr = "insert into product (p_id, concept, unit_price, n_elements, total) values ('$p_id','$concept','$unit_price','$n_elements','$total')";

		 $insert_p = mysqli_query($con, $insert_pr); //conexión a la bd

			 if($insert_p){

			 echo "<script>alert('A new product has been inserted!')</script>";
			 echo "<script>window.open('taller.php','_self')</script>";
			 }
	}

?>
