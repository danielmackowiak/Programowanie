<?php
  function data($name, $surname, $color) {
    $name = ucfirst($name);
    $surname = ucfirst($surname);
    $color = strtoupper($color);
    return "<hr>Imię i nazwisko: $name $surname <br>Kolor: $color";
  }
?>