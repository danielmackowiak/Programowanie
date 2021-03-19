<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Tabliczka mnozenia</title>
</head>
  <style>
    table, th, td, tr {
    border: 1px solid black;
    border-collapse: collapse;
    text-align: center;
    padding: 5px;
  }
  </style>
<body>
<form method="get">
  <label for="">Określ rozmiar tabelki mnożenia: </label>
  <input type="number" name="rozmiar" min="1">
  <input type="submit" value="Pokaż">
</form>
<table>
  <?php
    if (!empty($_GET['rozmiar'])) {
      $count = $_GET['rozmiar'];
      $row = 1;
      do {
        echo '<tr>';
        $col = 1;
        do {
          echo '<td>', $row * $col, '</td>';
          $col++;
        } while ($col <= $count);
          $row++;
          echo '</tr>';
      } while ($row <= $count);
    }
  ?>
</table>
</body>
</html> 