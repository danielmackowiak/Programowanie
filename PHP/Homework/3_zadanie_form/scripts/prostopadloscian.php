<?php
  function pole($a, $b, $c) {
    return number_format((2 * ($a * $b + $a * $c + $b * $c)),2);
  }
  function objetosc($a, $b, $c) {
    return number_format(($a * $b * $c),2);
  }
  function przekatna($a, $b, $c) {
    return number_format(sqrt(($a * $a) + ($b * $b) + ($c * $c)),2);
  }
?>