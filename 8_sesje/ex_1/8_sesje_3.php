<!-- Dodać na pierwszej stronie formularz z województwami (3, select)
formularz przekierowuje do drugiej strony gdzie wyświetla wybrane województwo
na drugiej stronie w zależności od wybranego województwa mamy do wyboru po 3 miasta (checkbox)
po zatwierdzaniu formularza jesteśmy przekierowani do trzeciej strony, gdzie będzie wyświetlone wybrane województwo i miasta
na trzeciej stronie możliwość powrotu do strony pierwszej -->
<?php
  session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Strona 3</title>
</head>
<body>
  <?php
    $_SESSION['poz'] = $_POST['Poznań'];
    $_SESSION['kal'] = $_POST['Kalisz'];
    $_SESSION['kon'] = $_POST['Konin'];
    $_SESSION['kra'] = $_POST['Kraków'];
    $_SESSION['boc'] = $_POST['Bochnia'];
    $_SESSION['brz'] = $_POST['Brzesko'];
    $_SESSION['gda'] = $_POST['Gdańsk'];
    $_SESSION['byt'] = $_POST['Bytów'];
    $_SESSION['cho'] = $_POST['Chojnice'];
/*     echo 'Twoje województwo: ';
    echo $_SESSION['wojewodztwo']; 
    echo 'Twoje wybrane miasta: '; */
    /* echo $_SESSION['miasto1']; */
  ?>
  <a href="./8_sesje_1.php">Powrót do storny startowej</a>
</body>
</html>