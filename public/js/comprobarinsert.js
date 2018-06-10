//funciones comprobar insertar

function validar() {

var nombre = document.getElementById("nombre").value;
var apellidos = document.getElementById("apellidos").value;
var edad = document.getElementById("edad").value;
var curso = document.getElementById("curso").value;
var puntuacion = document.getElementById("puntuacion").value;

if(nombre == ''){
  alert('Nombre esta vacio');
  return false;
}

else if(apellidos == ''){
  alert('Apellidos esta vacio');
  return false;
}

else if(edad == ''){
  alert('Edad esta vacio');
  return false;
}

else if(curso == ''){
  alert('Curso esta vacio');
  return false;
}

else if(puntuacion == ''){
  alert('Punctuación esta vacio');
  return false;
}else{
  return true;
}
}
