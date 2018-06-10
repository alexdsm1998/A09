<?php
require_once __DIR__.'/../../vendor/autoload.php';
use Daw\models\classes\Usuario;





    if(isset($_POST["borrar"])){
      $usuario=new Usuario();
$usuario->borrarusuario($id=$_POST['id']);
    }

?>


<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">

  </head>
  <body>
    <h3>Borarr Usuario</h3>
    <form class="" action="borrarusuario.php" method="post" onsubmit="seguro()">
  <label for="id">Id: </label> <input type="text" name="id" id="miCampo"><br>
  <br>
<input type="hidden" name="borrar">
<input type="submit" name="borrar"  value="borrar"  class="boton">
</form>



      <br>
      <a href="../../public/index.php">
        <input type='submit' value="Volver">
      </a>

  </body>
</html>
