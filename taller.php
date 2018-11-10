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
  <title> Go Boat Repairs </title>
  <link rel="stylesheet" type="text/css"  href="css/styles.css" >
  <link rel="shortcut icon" type="image/x-icon" href="img/favic.ico">
</head>
<body>
  <div id="redes">
    <!-- # hace referencia a la misma pagina web -->
    <a href="http://www.facebook.com" target="_blank"><img src="img/fb.png" alt="Facebook" title="Facebook"  width="55" height="60"></a>
    <a href="http://www.instagram.com" target="_blank"><img src="img/ig.png" alt="Instagram" title="Instagram" width="73" height="60" ></a>
    <a href="http://www.twitter.com" target="_blank"><img src="img/twitter.png" alt="Twitter" title="Twitter" width="55" height="60"></a>
  </div>
  <div id="contenedor">
      <div id="cabecera">
        <div id="logo"> <em>Go Boat Repairs </em></div>
        <div id="menu">
          <ul>
            <li> <a href="taller.php" id="activo"> Inicio</a></li>
            <li> <a href="bill2.php" >Generar Factura</a></li>
            <li> <a href="bill.php" >Facturas</a></li>
            <li> <a href="customer.php" >Usuario</a></li>
            <li> <a href="product.php" >Añadir Productos</a></li>
            <li> <a href="workshop.php" >Talleres</a></li>
            <li> <a href="#contacto" >Contáctanos</a></li>
          </ul>
        </div>
        <div id="mensaje">
            <h2>Facturación</h2>
            <p>Taller de Reparación y Mantenimiento de Lanchas</p>
        </div>
      </div>
      <div id="principal">
        <img src="img/chorreo_de_casco.png" alt="Curso HTML & CSS" title="Chorreo de casco en reparación" style="max-width:100%;height:auto;">
        <h1>Proceso de Facturación</h1>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Expedita, facilis, tempore. Doloribus neque, voluptas fuga vero, rerum veniam cum culpa enim nemo facilis praesentium deleniti, voluptates perspiciatis is itaque perferendis soluta iusto ducimus? Officia unde accusamus, laborum iste sit, quod possimus sed ipsa eveniet numquam quas harum accusantium quam corporis, facilis, totam modi impedit in quibusdam quia fugiat nulla fugit itaque squibusdam quia fugiat nulla fugit itaque sequi! Consequatur laboriosam dolorum minus, maiores equi! Consequatur laboriosam dolorum minus, maiores aliquam inventore soluta impedit, perspiciatis quasi,Lorem ipsum dolor sit amet, debitis dolore quia. Voluptates, ducimus,squibusdam quia fugiat nulla at. Quo eaque voluptate, sit minima dicta fugit voluptatum assumenda, facilis praesentium deleniti,laboriosam dolorum minus, maiores equi! voluptates perspiciatis iste sit, quod possimus sed ipsa eveniet num  vhaler lorem ipsu</p>
        <hr>
        <iframe src="https://www.google.com/maps/embed?pb=!1m10!1m8!1m3!1d26393.91436529028!2d-68.01059145003642!3d10.462866620210525!3m2!1i1024!2i768!4f13.1!5e0!3m2!1ses!2sve!4v1540785253927" width="100%" height="300" frameborder="0" style="border:0;" ></iframe>
        <fieldset id="contacto">
          <legend><em> Contacto </em></legend>
          <table>
            <tr>
              <td align="right"><strong>Email:</strong></td>
            </tr>
            <tr>
              <td align="right">jlberenguerl@gmail.com</td>
            </tr>
            <tr>
              <td align="right"> <strong>Teléfono:</strong></td>
            </tr>
            <tr>
              <td align="right">0412-647-0512</td>
            </tr>
            <tr>
              <td align="right"> <strong> Dirección:</strong></td>
            </tr>
            <tr>
              <td align="right">Cumboto Norte, Puerto Cabello Edo-Carabobo </td>
            </tr>
            <tr>
              <td align="right"> <strong>RIF:</strong></td>
            </tr>
            <tr>
              <td align="right">J-209824430</td>
            </tr>
          </table>
        </fieldset>
      </div>
  </div>
  <div id="footer">
    <p> Copyright &copy; Desarrollo Web - 2018 José Luis Berenguer </p>
    <a href="#contenedor" > <img src="img/flecha.png" alt="Volver Arriba" title="Presione para volver hacía arriba" width="50" height="17" ></a>
  </div>
</body>
</html>
