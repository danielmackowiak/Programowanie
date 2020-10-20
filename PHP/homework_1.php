<?php
// Użytkownik podaje z klawiatury dwie długości do wyboru w polu radio ma pole i obwód domyślnie zaznaczone ma być 'pole'
// Zabezpiecz formularz przed podaniem pustych danych

// Wynik wyświetl w formacie:
// Pole wynosi: 20cm2 (2 ma byc w indeksie górnym)
// Obwód wynosi: 20cm
// Dane wyślij z formularza bezpiecznie (POST)
// Obliczenia mają być wyidoczne w innym pliku
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Zadanie Domowe</title>
</head>
<body>
    <form name="form1" action="./homework_1_data.php" method="get">
        <input type="radio" name="typ" value="p" checked>
        <label>Pole:</label>
        <input type="number" name="pole_liczba" size="1">
        <input type="radio" name="typ" value="o">
        <label>Obwód:</label>
        <input type="number" name="obwod_liczba" size="1">

        <input type="submit" value="Pokaż wynik">
    </form>
</body>
</html>