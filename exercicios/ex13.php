<?php

$a = 2;
$b = 4;
$c = -6;

$delta = $b*$b - 4 * $a * $c;

if ($delta < 0) {
  echo "Delta é menor que zero! ($delta)";
} else {
  echo "Valor de delta: $delta <br>";
  $raizDelta = sqrt($delta);
  $x1 = (-$b + $raizDelta) / (2*$a);
  $x2 = (-$b - $raizDelta) / (2*$a);

  echo "X1 = $x1 <br>";
  echo "X2 = $x2 <br>";
}

?>