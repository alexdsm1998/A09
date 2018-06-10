<?php
require_once __DIR__.'/../../vendor/autoload.php';
use Daw\models\classes\Usuario;
?>




<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
  </head>
  <body>


  <h3>Usuarios en la bd:</h3>
    <?php
      $usuario=new Usuario();
      $resultado=$usuario->encontrarusuario();
    ?>
              <?php
                foreach ($resultado as $usuario)
                {
              ?>
                  <p><?php echo "ID:" .$usuario["id"]."<br>". "Nombre:" .$usuario["nombre"]."<br>" ."Apellido: ".$usuario["apellidos"]."<br>"."Edad:".$usuario["edad"]."<br>" ."Curso:".$usuario["curso"]."<br>"."Correo:".$usuario["correo"]."<br>"."Puntuacion:".$usuario["puntuacion"];?></p>
             <?php
                }
              ?>
      <br>
      <a href="../../public/index.php">
        <input type='submit' value="Volver">
      </a>



  </body>
</html>
