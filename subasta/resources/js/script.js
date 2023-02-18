// var botones = document.getElementsByClassName("buscarSubasta");
var links = document.getElementsByClassName("disabled");

var cards = document.querySelectorAll(".cardFeatures");

var time = document.getElementsByClassName("tiempo");
var fecha = document.getElementsByClassName("fecha");

const ctx = document.getElementById('myChart');

function reloj() {

  let today = new Date();
  let horas = today.getHours();
  let minutos = today.getMinutes();
  let segundos = today.getSeconds();
  let dia = today.getDate();
  let mes = today.getMonth();
  const semana = new Array('Lunes','Martes','Miercoles','Jueves','Viernes','Sabado', 'Domingo');

  fecha[0].innerHTML = semana[today.getDay()] + ", " + String(dia).padStart(2, '0') + "/" + String(mes).padStart(2, '0') + "/" + today.getFullYear();
  time[0].innerHTML = String(horas).padStart(2, "0") + ":" + String(minutos).padStart(2, "0") + ":" + String(segundos).padStart(2, "0");

  setTimeout(reloj, 1000);
}

document.getElementsByClassName("nav")[0].onclick = function foldNav() {

  var topNav = document.getElementById("myTopnav");

  if (topNav.className == "topnav") {
    topNav.className += " responsive";
  } else {
    topNav.className = "topnav";
  }
};

window.onload = function() {
  reloj();
};

for (let i = 0; i < links.lenght; i++) {

  links[i].disabled = true;

  links[i].onclick = function() {

    if (links[i].className == "disabled") {
      links[i].disabled = false;
      links[i].style.pointerEvents = "all";
    }
  };
}

/*window.history.pushState(null, null, window.location.href);
window.onpopstate = function () { window.history.go(1); };*/

for (let i = 0; i < cards.length; i++) {

  cards[i].onclick = function() {
    location.replace("http://127.0.0.1:8000/subasta?indice=" + parseInt(i + 1));
  };
}

document.getElementsByClassName("pujar")[0].onclick = function() {

  let ultimaPuja = document.getElementsByClassName("valorPuja")[0].min;
  let valorActual = document.getElementsByClassName("valorPuja")[0].value;

  let codigoUsu = document.getElementsByClassName("codUsu")[0].value;
  let codigoSub = document.getElementsByClassName("indice")[0].value;

  console.log("Ultimo valor: " +  parseFloat(ultimaPuja).toFixed(2));
  console.log("Valor actual: " + parseFloat(valorActual).toFixed(2));

  if (parseFloat(valorActual).toFixed(2) > parseFloat(ultimaPuja).toFixed(2)) {
    document.getElementsByClassName("valorPuja")[0].min = valorActual;
    document.getElementsByClassName("valorPuja")[0].value = valorActual;
    // document.getElementsByClassName("prueba")[0].innerHTML = valorActual;
  }
};

/*document.getElementsByClassName("valorPuja")[0].onchange = function() {

  console.log("Ultimo valor: " +  parseFloat(ultimaPuja).toFixed(2));
  console.log("Valor actual: " + parseFloat(valorActual).toFixed(2));

  if (parseFloat(valorActual).toFixed(2) > parseFloat(ultimaPuja).toFixed(2)) {
    document.getElementsByClassName("valorPuja")[0].min = valorActual;
    document.getElementsByClassName("valorPuja")[0].value = valorActual;
    // document.getElementsByClassName("prueba")[0].innerHTML = valorActual;
  }
};*/

new Chart(ctx, {

  type: 'bar',

  data: {

    labels: ['Red', 'Blue', 'Yellow', 'Green', 'Purple', 'Orange'],

    datasets: [{
      label: '# of Votes',
      data: [12, 19, 3, 5, 2, 3],
      borderWidth: 1
    }]
  },

  options: {

    scales: {

      y: {
        beginAtZero: true
      }
    }
  }
});
