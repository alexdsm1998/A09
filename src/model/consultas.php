<?php
namespace Daw\model;
use Daw\model\conectar;
class consultas extends conectar{
   function __construct(){
     parent::__construct();
   }
  public function listarusuario()
  {
    return parent::consultar("SELECT * FROM Usuarios");
  }
  public function encontrarusuario($nombre)
{
  return parent::consultar("SELECT * FROM Usuarios WHERE Name=$nombre");
}
  public function insertarusuario($nombre, $apellidos, $edad, $curso, $puntuacion)
  {
 return parent::consultar("INSERT INTO Usuarios (nombre,apellidos,edad,curso,puntuacion)
       VALUES ('$nombre','$apellidos',$edad,$curso,$puntuacion)");
  }
  public function actualizarusuario($id,$nombre,$apellidos,$edad, $curso, $puntuacion)
  {
     return parent::consultar("UPDATE  Usuarios SET id ='$id', nombre='$nombre',apellidos='$apellidos',edad='$edad',curso='$curso',puntuacion='$puntuacion'
             WHERE id='$id'");
  }
  public function borrarusuario ($id)
  {
      ;
       return parent::consultar("DELETE FROM Usuarios WHERE id='$id'");
  }

}
 ?>
