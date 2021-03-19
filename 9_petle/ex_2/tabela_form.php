<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Tabela - wymiary</title>
</head>
<body>
  <form action="./tabela.php" method="post">
    <label for="kolumna">Ilość kolumn: </label>
      <input type="number" name="kolumna" min="1"><br><br>
    <label for="wiersz">Ilość wierszy: </label>
      <input type="number" name="wiersz" min="1"><br><br>
    <input type="submit" value="Zatwierdź">
  </form>
</body>
</html>