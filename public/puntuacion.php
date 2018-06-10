<?php
require_once __DIR__.'/../vendor/autoload.php';
use Daw\security\Session;
?>




<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Puntuacion</title>
  </head>
  <body>
    <h1>AHORCADO</h1>
    <?php
      $selectOption = $_POST["usuario"];
      $usuario=explode("-", $selectOption);
      $session= new Session($usuario[0]);
     ?>
     <h2> Usuario <?php echo  $session->getUsuario()." Puntuación: ".$usuario[1].?></h2>
     <br>
     <a href="index.php">
       <input type="button" name="" value="LOGOUT" onclick= <?php $session->Logout();?>>
     </a>
  </body>
</html>
