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
  <form class="form" action="validar.php" method="post">
    <h1 class="titulo">Bienvenido entrenador</h1>
    <section class="casilla">
      <label for="usuario">Usuario</label>
      <input id="usuario" type="text" placeholder="Coloca tu usuario" name="usuario" >
    </section>
    <section class="casilla">
      <label for="usuario">Contraseña</label>
     <input type="password" placeholder="Coloca tu contraseña" name="password" >
    </section>

    <!-- <?php
$noUser = $_GET["user"];
if($noUser==="1") {
  echo '<p class="error"> Usuario o contraseña incorrectos </p>';
}
 ?> -->
    <section class="actions">
      <a href="../sesionadmin/index.php?user=0">Iniciar sesión como admin</a>
      <input type="submit" name="" value="Ingresar" >
    </section>
  </form>
</div>
</body>
</html>


        