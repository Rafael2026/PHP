<?php

  $a = 10;
  $b = 13.45;
  $c = true;
  $d = "¡Hola mundo!";
  $e = "142";

  is_bool($d); // false
  is_string($b); // false
  is_int($a); // true
  is_real($c); // false
  is_numeric($e); // true
  is_string($e); // true
  is_long($a); // true
  is_double($b); // true

?>