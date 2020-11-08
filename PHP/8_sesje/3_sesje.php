<?php
  session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Sesja 3</title>
</head>
<body>
  <h4>Strona 3</h4>
  <?php
    echo "identyfikator sesji: ", session_id();
    unset($_SESSION["name"]);
    echo "<hr>Imię: $_SESSION[name]<br>";
  ?>
  <a href="./1_sesje.php">Strona startowa</a>
</body>
</html>
<!-- Usunać na stronie 3 zmienną sesyjną name i cofnąć się do drugiej strony i sprawdzić wynik -->