<?php
require_once __DIR__.'/../../vendor/autoload.php';
use Daw\models\classes\Usuario;

    if(isset($_POST["actualizar"])){
      $usuario=new Usuario();
      $usuario->actualizarusuario($id=$_POST['id'],$nombre=$_POST['nombre'],$apellidos=$_POST['apellidos'],$edad=$_POST['edad'],$curso=$_POST['curso'],$puntuacion=$_POST['puntuacion'],$correo=$_POST['correo']);
    }
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
  </head>
  <body>
    <h1>Actualizar usuario/h1>

<form class="" action="actualizarusuario.php" method="post" onsubmit="validar2()">
<label for="id">Id: </label>  <input type="text" name="id" id="id"><br>
<label for="nombre">Nombre: </label>  <input type="text" name="nombre" id="nombre2"><br>
<label for="apellidos">Apellidos: </label>  <input type="text" name="apellidos" id="apellidos2"><br>
<label for="edad">Edad: </label>  <input type="text" name="edad" id="edad2"><br>
<label for="curso">Curso: </label>  <input type="text" name="curso" id="curso2"><br>
<label for="puntuacion">Puntuacion: </label>  <input type="text" name="puntuacion" id="puntuacion2"><br>
<label for="correo">Correo: </label>  <input type="text" name="correo" id="correo2"><br>
<input type="hidden" name="actualizar" value="actualizar">
  <br>
<input type="submit" name="actualizar"  value="actualizar"  class="boton">
</form>
      <br>
      <a href="../../public/index.php">
        <input type='submit' value="Volver">
      </a>
  </body>
</html>
