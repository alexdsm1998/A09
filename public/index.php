<?php
require_once __DIR__.'/../vendor/autoload.php';
use Daw\models\classes\Usuario;
?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <script type="text/javascript" src="js/comprobar.js"></script>
  </head>
  <body>
    <h1>Escoge tu usuario</h1>
    <?php
        $usuario=new Usuario();
        $resultado=$usuario->listadousuario();
        $usaurio=$_POST["usuario"];
    ?>
<form action='puntuacion.php' method='POST'>
<select id="select" name="usuario">
  <option>Selecciona Usuario</option>
    <?php
  foreach ($resultado as $usuario)
{
  ?>
 <option value= <?php echo $usuario["nombre"]."-".$usuario["puntuacion"];?>><?php echo $usuario["nombre"];?></option>
 <?php
      }
  ?>
 <option>Administrador</option>
      </select>
      <br>
      <input type="submit" value="Jugar">
    </form>
    <br><br>
    <div id="buttonHidden">
      <a href="../src/security/listadousuario.php">
        <input type='button' value="Lista de xUsuarios">
      <a href="../src/security/actualizarusuario.php">
      <input type='button' value="Actualizar Usuario">
      <a href="../src/security/borrarusuario.php">
        <input type='button' value="Borrar Usuario">
  </div>
  <a href="insertarusuario.php">
    <input type='button' value="Insertar Usuario">
  </body>
</html>
