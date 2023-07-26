<?php
  include('db.php');
 ?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0 user-scalable=no">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer"/>
    <link rel="stylesheet" href="css/style.css">
    <title>IDAE SPORTS</title>
</head>
<body>
  
<form action="validar.php" method="post">
<div class="contenido">
  <form action="#" >
    <div class="form-content">
      <div class="inicio-formulario">
        <div class="titulo">Inicia tu sesión de administrador</div>
        <div class="casilla-entrada">
          <div class="casilla">
            <i class="fa-solid fa-user"></i>
            <input type="text" placeholder="Usuario de admin" name="usuario" >
          </div>

          <div class="casilla">
            <input type="password" placeholder="Contraseña" name="password" >
          </div>
          <div class="button-casilla">
          <input type="submit" name="" value="Ingresar" >
        </form>
        <?php
$noUser = $_GET["user"];
if($noUser==="2") {
  echo '<p>No admin</p>';
}
 ?>
          </div>
        </div>
      </div>
    </div>
  </form>
</div>
</body>
</html>