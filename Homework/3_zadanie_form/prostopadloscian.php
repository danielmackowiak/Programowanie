<!DOCTYPE html>
<html lang="pl">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Prostopadłościan</title>
  <style>
    img {
       width: 15%;
    }
  </style>
</head>
<body>
  <h4>Prostopadłościan</h4>
  <img src="./prosto.png"><hr>
  <h4>Dane</h4>
  <form method="post">
  <label for="a">a: </label>
    <input type="number" name="a" placeholder="a"
      <?php 
        if (isset($_POST['a'])) {
          echo "value=\"$_POST[a]\"";
        }
      ?> 
    ><br><br>
    <label for="b">b: </label>
    <input type="number" name="b" placeholder="b"
    <?php 
        if (isset($_POST['b'])) {
          echo "value=\"$_POST[b]\"";
        }
      ?>
    ><br><br>
    <label for="c">c: </label>
    <input type="number" name="c" placeholder="c"
    <?php 
        if (isset($_POST['c'])) {
          echo "value=\"$_POST[c]\"";
        }
      ?>
    ><br><br>
    <input type="submit" value="Oblicz">
  </form>
  <?php 


if (!empty($_POST['a']) && !empty($_POST['b']) && !empty($_POST['c'])) {
 
    if($_POST['a'] <= 0 || $_POST['b'] <= 0 || $_POST['c'] <= 0){
      echo '<h4>Dane podane w formularzu muszą być liczbami dodatnimi!</h4>';
    }else{
            require_once './scripts/prostopadloscian.php';
            /* number_format(pole(), 2, 2, ); */
            echo '<ul>';
              echo '<li>Pole: ',pole($_POST['a'],$_POST['b'],$_POST['c']),'cm<sup>2</sup></li>';
              echo '<li>Objętość: ',objetosc($_POST['a'],$_POST['b'],$_POST['c']),'cm<sup>3</sup></li>';
              echo '<li>Długość przekątnej: ',przekatna($_POST['a'],$_POST['b'],$_POST['c']),'cm</li>';
            echo '<ul>';
          }
    
    }else{
      if (isset($_POST['a']) && isset($_POST['b']) && isset($_POST['c'])) {
        if ($_POST['a'] === '0' || $_POST['b'] === '0' || $_POST['c'] === '0') {
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