<?php

  $a = 10;
  $b = 18;

  !($a != $b); // False
  ($a != $b); // True
  !(($a + $b) > ($a * $b)); // True
  ($a > $b) || (! ($a <= $a - 5)); // True
  !(!($a != $b) && ($b <= $a + 15)); // True
  $c ?? null ?? $b ?? $a; // 18
  $a ?? null ?? $b; // 10
  null ?? $b ?? $a; // 18
?>