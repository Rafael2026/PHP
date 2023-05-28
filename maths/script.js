//var inputs = document.querySelectorAll("input");
var forms = document.getElementsByTagName("form");
var text = document.getElementsByClassName("result");
var arrayInputs = [];
var j = 0;

for (let i = 0; i < forms.length; i++) {
  
  console.log(arrayInputs[i]);

  let inputs = forms[i].getElementsByTagName('input');

  inputs[(inputs.length - 1)].onclick = function() {

    var result = inputs[(inputs.length - 2)].value;

    if (i < 3) {
      text[i].innerHTML = "Perimeter: " + result;
    } else if (i < 6) {
      text[i].innerHTML = "Area: " + result;
    } else {
      text[i].innerHTML = "Volume: " + result;
    }
  };
}