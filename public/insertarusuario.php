<?php
require_once __DIR__.'/../vendor/autoload.php';
use Daw\models\classes\Usuario;
if(isset($_POST["insertar"])){
  $usuario=new Usuario();
  $usuario->insertarusuario($nombre=$_POST['nombre'],$apellidos=$_POST['apellidos'],$edad=$_POST['edad'],$curso=$_POST['curso'],$puntuacion=$_POST['puntuacion'],$correo=$_POST['correo']);
}
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
  </head>
  <body>
<h3>Insertar Usuario</h3>

<form class="" action="insertarusuario.php" method="post" onsubmit="validar()">
<label for="nombre">Nombre: </label>  <input type="text" name="nombre" id="nombre"><br>
<label for="apellidos">Apellidos: </label>  <input type="text" name="apellidos" id="apellidos"><br>
<label for="edad">Edad: </label>  <input type="text" name="edad" id="edad"><br>
<label for="curso">Curso: </label>  <input type="text" name="curso" id="curso"><br>
<label for="puntuacion">Puntuacion: </label>  <input type="text" name="puntuacion" id="puntuacion"><br>
<label for="correo">Correo: </label>  <input type="text" name="correo" id="correo"><br>
<input type="hidden" name="insertar">
<input type="submit" onclick="validar" name="insertar" value="insertar" class="boton">
</form>
      <br>
      <a href="index.php">
        <input type="submit" value="Volver">
      </a>

  </body>
</html>
