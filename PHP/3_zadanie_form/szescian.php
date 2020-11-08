<!DOCTYPE html>
<html lang="pl">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Sześcian</title>
</head>
<body>
  <h4>Sześcian</h4>
  <img src="./szescian.png"><hr>
  <h4>Dane</h4>
  <form method="post">
    <input type="number" name="a" placeholder="a"><br><br>
    <input type="submit" value="Oblicz">
  </form>
<?php 
if (!empty($_POST['a'])) {
  if($_POST['a'] <= 0){
    echo '<h4>Dane podane w formularzu muszą być liczbami dodatnimi!</h4>';
  }else{
    require_once './scripts/szescian.php';
    echo '<ul>';
      echo '<li>Pole: ',pole($_POST['a']),'cm<sup>2</sup></li>';
      echo '<li>Objętość: ',objetosc($_POST['a']),'cm<sup>3</sup></li>';
      echo '<li>Długość przekątnej: ',przekatna($_POST['a']),'cm</li>';
      echo '<li>Promień kuli wpisanej w sześcian: ',promien_kuli_wpisanej($_POST['a']),'cm</li>';
      echo '<li>Promień kuli opisanej na sześcianie: ',promien_kuli_opisanej($_POST['a']),'cm</li>';
    echo '<ul>';
  }
  
}else{ 
  if (isset($_POST['a'])) {
    if ($_POST['a'] === '0') {
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