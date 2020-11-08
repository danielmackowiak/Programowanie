<?php
  function pole($a, $h) {
    return number_format((((($a * $a) * sqrt(3)) / (4)) + ((3 * $a * $h) / 2)),2);
  }
  function objetosc($a, $hh) {
    return number_format(((($a * $a) * $hh * sqrt(3))) * (12),2);
  }
?>