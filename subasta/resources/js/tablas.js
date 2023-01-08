//var botones = document.getElementsByTagName("button");
var formularios = document.getElementsByClassName("formulario");
var tablas = document.getElementsByTagName("table");
var filas = tablas[(tablas.length - 1)].getElementsByTagName("tr");
var columnas = [];
var col = 0;

for (var fil = 1;  fil < filas.length; fil++) {

  //console.log(filas[fil].innerHTML);

  columnas[col] = filas[fil].getElementsByTagName("td")[0].innerHTML;
  col++;
}

console.log(columnas);

for (let column = 0; column < columnas.length; column++) {

  console.log(columnas[column]);

  //columnas[fil] = filas[fil].getElementsByTagName("td")[0];
}

for (var f = 0; f < formularios.length; f++) {

  //console.log("Input: " + formularios[0]);
  let input = formularios[f].getElementsByTagName("input");
  let botones = formularios[f].getElementsByTagName("button");
  
  input[0].disabled = false;
  input[(input.length - 1)].disabled = false;
  botones[1].type = "button";
  botones[2].type = "button";

  /*for (var b = 0; b < botones.length; b++) {

    //tablas[0].getElementsByTagName("tr")

    botones[b].onclick = function() {

      //input[0].disabled = false;

      if (b != 0) {
        
        botones[1].type = "submit";
        botones[2].type = "submit";
        //input[(input.length - 1)].disabled = false;
      }

      if (b == 0) {
        input[0].innerHTML = columnas[(columnas.length - 1)] + 1;
      } else {
        input[0].innerHTML = "";
        input[0].disabled = true;
        botones[1].type = "submit";
        botones[2].type = "submit";
      }
    };
  }*/

  formularios[f].onsubmit = function() {
    input[0].disabled = true;
    input[(input.length - 1)].disabled = true;
  };
}