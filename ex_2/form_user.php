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
  <title>Miasto</title>
</head>
<body>

  <form action="./form_user_data.php" name="form_m" method="POST">

  <label for="miasto">Miasto:</label>
    <input type="text" name="miasto" placeholder="Miasto"><br><br>

  <label for="kolor">Ulubiony kolor:</label>
    <select name="kolor" id="kolor">
      <option value="Czerwony">Czerwony</option>
      <option value="Zielony">Zielony</option>
      <option value="Niebieski">Niebieski</option>
    </select><br><br>

  <input type="submit" value="Prześlij dane">
  </form>
</body>
</html>