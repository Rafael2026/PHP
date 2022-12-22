function validacion () {

  var email = document.getElementById("correo").value;
  var password = document.getElementById("asunto").value;
  var loginValido = false;

  if (email == "" || password == "") {
    loginValido = false;
  }

  return respuesta;
}


if (validacion()) {
  window.alert("El campo correo está vacío\n");
}
