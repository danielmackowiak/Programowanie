<?php
/* Użytkownik w formularzu podaje
a) swoje miasto (form_user.php)
b) ulubiony kolor (rgb)
po zatwierdzeniu formularza zostanie przekierowany do strony
form_user_data.php, na której wyświetlimy dane:

Miasto: ...
Kolor: ... np. zielony

1) Sprawdź czy dane został wypełnione, jeśli nie to użytkownik zostanie przekierowany do strony z formularzem (history.back)
2) zabezpiecz przed modyfikacją value w kolorze np. value=";)"
*/
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Twoje miasto</title>
</head>
<body>
    <?php
        $miasto = $_POST['miasto'];
        $kolor = $_POST['kolor'];
        $error = 0;

        if ($error == 1) {
          ?>
          <script>
            history.back();
          </script>
          <?php
        }

      if (!empty($miasto)&& !empty($kolor)) {
        echo "Miasto: $miasto<br>";
        switch ($kolor) {
          case 'Czerwony':
            echo "Ulubiony kolor: $kolor";
            break;
          case 'Zielony':
            echo "Ulubiony kolor: $kolor";
            break;
          case 'Niebieski':
            echo "Ulubiony kolor: $kolor";
            break;
          default:
            $error = 1;
            break;
        }
      }else {
        $error = 1;
      }
    ?>
</body>
</html>