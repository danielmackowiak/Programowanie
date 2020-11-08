<!DOCTYPE html>
<html lang="pl">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Ostrosłup</title>
</head>
<body>
  <h4>Ostrosłup</h4>
  <img src="./ostroslup.png"><hr>
  <h4>Dane</h4>
  <form method="post">
    <input type="number" name="a" placeholder="a"><br><br>
    <input type="number" name="h" placeholder="h"><br><br>
    <input type="number" name="hh" placeholder="H"><br><br>
    <input type="submit" value="Oblicz">
  </form>
<?php 
if (!empty($_POST['a'])&& !empty($_POST['h'])&& !empty($_POST['hh'])) {
  if($_POST['a'] <= 0 || $_POST['h'] <= 0 || $_POST['hh'] <= 0){
    echo '<h4>Dane podane w formularzu muszą być liczbami dodatnimi!</h4>';
  }else{
    require_once './scripts/ostroslup.php';
    echo '<ul>';
      echo '<li>Pole powierzchni: ',pole($_POST['a'], $_POST['h']),'cm<sup>2</sup></li>';
      echo '<li>Objętość: ',objetosc($_POST['a'], $_POST['hh']),'cm<sup>3</sup></li>';
    echo '<ul>';
  }
  
}else{
  if (isset($_POST['a'])&& isset($_POST['h'])&& isset($_POST['hh'])) {
    if ($_POST['a'] === '0' || $_POST['h'] === '0' || $_POST['hh'] === '0') {
      echo '<h4>Dane w formularzu nie mogą być 0!</h4>';
    }else{
      echo '<h4>Dane w formularzu nie mogą być puste!</h4>';
    }
  }
}

?>
<a href="./3_zadanie_formularze_geometria.php">Powrót do strony głównej<a>
</body>
</html>