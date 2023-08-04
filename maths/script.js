//var inputs = document.querySelectorAll("input");
var sectionPerimeter = document.getElementsByTagName("section")[0].getElementsByTagName("form");
var sectionArea = document.getElementsByTagName("section")[1].getElementsByTagName("form");
var sectionVolume = document.getElementsByTagName("section")[2].getElementsByTagName("form");


var forms = document.getElementsByTagName("form");
var text = document.getElementsByClassName("result");
var arrayInputs = [];
var j = 0;

/*var figuras = ["TrianglePerimeter", "SquarePerimeter", "CirclePerimeter", "TriangleArea", "SquareArea", "CircleArea", "CubeVolume"];*/

for (var i = 0; i < sectionPerimeter.length; i++) {

  var arrayInputs = sectionPerimeter[i].getElementsByTagName('input');
  //let inputs = forms[i].getElementsByTagName('input');

  arrayInputs[i].onclick = function() {

    var result = inputs[i].innerHTML;

    console.log(result);
    /*if (i < 3) {

      if (figuras[i] == "TrianglePerimeter") {

        text[i].innerHTML = "Perimeter: " + '<?php $flecha = new Triangle(' + result + ',' + result + ',' + result + '); $flecha->getPerimetro() ?>';

        text[i].innerHTML = "Perimeter: " + result;

      } else if (figuras[i] == "SquarePerimeter") {
        //text[i].innerHTML = "Perimeter: " + '<?php echo $flecha = new Triangle(2, 4); ?>';
        text[i].innerHTML = "Perimeter: " + result;
      } else {
        text[i].innerHTML = "Perimeter: " + result;
      }
      
    } else if (i < 6) {
      text[i].innerHTML = "Area: " + result;
    } else {
      text[i].innerHTML = "Volume: " + result;
    }*/
  };
}