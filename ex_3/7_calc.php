
<?php
/*Użytkownik ma w formularzu dwa pola input (wynik oraz liczba).
Za pomocą radio buttona wybiera działanie(dodawanie lub odejmowanie)
Dodaj w formularzu przycisk.
Utwórz dwie funkcje (Dodawanie i odejmowanie), które pobierają dane z wyniku oraz liczbę z formularza.
Wynik wyświetl z precyzją dwóch miejsc. (funckcja number_format())
Pole wynik jest nieaktywne, tylko wyświetla wynik.*/
?>
<?php
  session_start();
  if (!isset($_SESSION['result'])) {
    $_SESSION['result'] = 0;
  }else{
    $_SESSION['result'] = number_format($_SESSION['result'],2);
  }
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Kalkulator</title>
</head>
<body>

<?php
  function add($wynik, $liczba){
      return $wynik + $liczba;
  }
  function sub($wynik,$liczba){
      return $wynik - $liczba;
  }
  function multi($wynik, $liczba){
      return $wynik * $liczba;
  }
  function div($wynik,$liczba){
      return $wynik / $liczba;
  }
?>

<form method="GET">
    <input type="number" step="0.01" name="liczba" placeholder="liczba"><br><br>
    <input type="number" step="0.01" name="wynik" value="0" id="wynik" placeholder="wynik" disabled><br><br>
    <label for="dzialanie">Rodzaj działania:</label><br>
    <input type="radio" name="dzialanie" value="dodawanie" id="1" checked>
  <label for="1">Dodawanie</label><br>
    <input type="radio" name="dzialanie" value="odejmowanie" id="2">
  <label for="2">Odejmowanie</label><br>
    <input type="radio" name="dzialanie" value="mnozenie" id="3">
  <label for="3">Mnożenie</label><br>
    <input type="radio" name="dzialanie" value="dzielenie" id="4">
  <label for="4">Dzielenie</label><br>
    <input type="submit" name="button" value="Oblicz">
    <input type="submit" name="sess_reset" value="Zresetuj">

</form>

<?php
if (isset($_GET['sess_reset'])){
  $_SESSION['result'] = 0;
  /* session_destroy(); */
}

  if (isset($_GET['button'])){
    if (!empty($_GET['liczba'])&&!empty($_GET['dzialanie'])){
        $result = 0;
      switch ($_GET['dzialanie']) {
        case 'dodawanie':
          $_SESSION['result'] = add($_SESSION['result'], $_GET['liczba']);
            break;
        case 'odejmowanie':
          $_SESSION['result'] = sub($_SESSION['result'], $_GET['liczba']);
            break;
        case 'mnozenie':
          $_SESSION['result'] = multi($_SESSION['result'], $_GET['liczba']);
            break;
        case 'dzielenie':
          $_SESSION['result'] = div($_SESSION['result'], $_GET['liczba']);
            break;
        default:
          echo 'Wypełnij prawidłowo pole działanie';
          exit();
            break;
      }

      $_SESSION['result'] = number_format($_SESSION['result'],2);
      /* echo $_SESSION['result'] */
          // dodanie wyniku do pola wynik w formularzu
          ?>
          <script>
            document.getElementById('wynik').value = <?php echo $_SESSION['result'] = number_format($_SESSION['result'],2); ?>;
          </script>
          <?php

    }else{
      echo '<hr>Wypełnij wszystkie pola';
    } 
  }
?>
</body>
</html>