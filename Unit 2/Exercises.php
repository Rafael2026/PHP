<!DOCTYPE html>

<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Exercises - Unit 2</title>
</head>

<body>

  <h1>Exercise 1</h1>

  <?php
    echo "Name: Rafael Aguilar Muñoz<br/>";
    echo "Address: C/ Ceres, Nº 8<br/>";
    echo "Phone: 609213851";
  ?>

  <hr/>

  <h1>Exercise 2</h1>

  <?php
    echo "«La simplicidad llevada al extremo se convierte en elegancia»<br/>";
    echo "(<i>Jon Franklin</i>)";
  ?>

  <hr/>

  <h1>Exercise 3</h1>

  <?php
    echo "  *  <br/>";
    echo " *** <br/>";
    echo "*****<br/>";
    echo " *** <br/>";
    echo "  *  ";
  ?>

  <hr/>

  <h1>Exercise 4</h1>
  
  <?php

    is_bool("¡Hola mundo!"); // false
    is_string(13.45); // false
    is_int(10); // true
    is_float(true); // false
    is_numeric("142"); // true
    is_string("142"); // true
    is_long(10); // true
    is_double(13.45); // true

  ?>

  <hr/>

  <h1>Exercise 5</h1>
  
  <?php
    
    $a = 27;
    $b = 43;

    echo "a + b = " .($a + $b);
    echo "a - b = " .($a - $b);
    echo "a * b = " .($a * $b);
    echo "a / b = " .($a / $b);
    
  ?>

  <hr/>

  <h1>Exercise 6</h1>

  <?php
    echo "Goonies never say die!";
  ?>

  <hr/>

  <h1>Exercise 7</h1>

  <?php
    
    $a = 10;
    $b = 18;

    !($a != $b); // False
    $a != $b; // True
    !(($a + $b) > ($a * $b)); // True
    $a > $b || !($a <= $a - 5); // True
    !(!($a != $b) && ($b <= $a + 15)); // True
    $c ?? null ?? $b ?? $a; // 18
    $a ?? null ?? $b; // 10
    null ?? $b ?? $a; // 18
    
  ?>

  <hr/>

  <h1>Exercise 8</h1>

  <?php

    5 <=> 8; // -1
    5 <=> 10/2; // 0
    5 <=> 10/2.1; // 1
    3.142 <=> 22/7; // -1
    gettype("Hola mundo") <=> "string"; // 0
    true <=> (10 <= 8); // 1
    (8/2 > 2) || (11 != 352/11) <=> false // 1

  ?>
  
</body>

</html>