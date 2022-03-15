<?php

  $primeraSecuencia = "1, 2, 3, 4";
  $segundaSecuencia = "5, 6, 7, 8";

  "<form action='segundoScript.php' method='post'>
    <input type='text' name='secuencia1' value='$primeraSecuencia'><br>
    <input type='text' name='secuencia2' value='$segundaSecuencia'>
    <input type='submit'>
  </form>"

?>