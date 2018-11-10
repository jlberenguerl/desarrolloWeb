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
  <title>Personal Data</title>
  <link rel="stylesheet" type="text/css" href="css/style_form.css">
<!-- aqui puede ir el <style> </style> ó desde un archivo  -->
</head>
<body>
  <main>
    <section>
      <!--     form:post>fieldset>legend{Datos Personales}+table>tr>td[align=right]{Nombre}+td>input[name="nombre" required autofocus]^^tr>td[aling=right]{Email:}+td>input:email[name=correo required]^^tr>td[aling=right]{Móvil:}+td>input[name=movil required pattern title]^^tr>td[aling=right valing=top]{Mensaje:}+td>textarea[name=mensaje rows=4 required]^^tr>td+td>input:image[src=img/btn_enviar.png alt="Enviar Datos"]  /d es lo mismo a [0-9] -->
        <form action="customer.php" method="post">
          <fieldset>
            <legend>Personal Data</legend>
            <table>
              <tr>
                <td align="right"><b>ID:</b></td>
                <td><input type="text" name="id" autofocus required> </td>
              </tr>
              <tr>
                <td align="right"><b>Name:</b></td>
                <td><input type="text" name="name" required ></td>
              </tr>
              <tr>
                <td align="right"><b>Surname:</b></td>
                <td><input type="text" name="surname" required></td>
              </tr>
              <tr>
                <td aling="right"><b>Email:</b></td>
                <td><input type="email" name="email" required></td>
              </tr>
              <tr>
                <td aling="right"><b>Phone:</b></td>
                <td><input type="text" name="phone" required pattern="[0-9]{3}\s[0-9]{3}\s[0-9]{4}$" title="Debe ser un número de 3 dígitos seguido de espacio, a continuación otros 3 números seguido de espacio y que termine con 4 digitos. ej: 424 436 6400"></td>
              </tr>
              <tr>
                <td colspan="5" align="center"><input type="submit" name="customer" value="Add"/></td>
                <!-- <td><input type="image" name="submit" src="img/btn_enviar.png" alt="Send Data"></td> -->
                <td colspan="5" align="right"><input type="reset" name="reset" value="Reset"/></td>
              </tr>
            </table>
          </fieldset>
        </form>
    </section>
  </main>
</body>
</html>

<?php

	if(isset($_POST['customer'])){

		//getting the text data from the fields
    $id= $_POST['id'];
		$name= $_POST['name'];
		$surname = $_POST['surname'];
		$email = $_POST['email'];
		$phone = $_POST['$phone'];

		 $insert_cust = "insert into customer (id, name, surname, email, phone) values ('$id','$name','$surname','$email','$phone')";

		 $insert_c = mysqli_query($con, $insert_cust); //conexión a la bd

			 if($insert_c){
			 echo "<script>alert('A new Customer has been inserted!')</script>";
			 echo "<script>window.open('taller.php','_self')</script>";
			 }
	}

?>
