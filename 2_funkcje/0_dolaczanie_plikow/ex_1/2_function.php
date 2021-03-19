<?php
  function data($name, $surname) {
    $name = ucfirst($name);
    $surname = ucfirst($surname);
    return "<hr>Imię: $name <br> Nazwisko: $surname";
  }
?>