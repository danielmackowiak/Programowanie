<!DOCTYPE html>
<html lang="pl">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Walec</title>
  <style>
    img {
       width: 15%;
    }
  </style>
</head>
<body>
  <h4>walec</h4>
  <img src="./walec.png"><hr>
  <h4>Dane</h4>
  <form method="post">
  <label for="r">r: </label>
    <input type="number" name="r" placeholder="r"><br><br>
  <label for="h">h: </label>
    <input type="number" name="h" placeholder="h"><br><br>
    <input type="submit" value="Oblicz">
  </form>
<?php 
if (!empty($_POST['r'])&& !empty($_POST['h'])) {
  if($_POST['r'] <= 0 || $_POST['h'] <= 0){
    echo '<h4>Dane podane w formularzu muszą być liczbami dodatnimi!</h4>';
  }else{
    require_once './scripts/walec.php';
    echo '<ul>';
      echo '<li>Pole podstawy: ',pole_podstawy($_POST['r']),'cm<sup>2</sup></li>';
      echo '<li>Pole powierzchni bocznej: ',pole_powierzchni_bocznej($_POST['r'], $_POST['h']),'cm<sup>2</sup></li>';
      echo '<li>Pole powierzchni całkowitej: ',pole_powierzchni_calkowitej($_POST['r'], $_POST['h']),'cm<sup>2</sup></li>';
      echo '<li>Objętość: ',objetosc($_POST['r'], $_POST['h']),'cm<sup>3</sup></li>';
    echo '<ul>';
  }
}else{
  if (isset($_POST['r'])&& isset($_POST['h'])) {
    if ($_POST['r'] === '0' || $_POST['h'] === '0') {
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