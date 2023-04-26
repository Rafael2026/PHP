var inputs = document.querySelectorAll("input");
var arrayInputs = [];
var j = 0;

for (let i = 0; i < inputs.length; i++) {
  
  if (inputs[i].type == "button") {
    //console.log(inputs[i]);
    arrayInputs[j] = inputs[i];
    j++;
  }
}


for (let i = 0; i < arrayInputs.length; i++) {
  
  console.log(arrayInputs[i]);


  arrayInputs[i].onclick = function() {};
}


