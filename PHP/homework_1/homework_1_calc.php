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
    <title>Obliczenia</title>
        <style>
            body {
                padding: 100px; line-height: 35px; border: dotted 5px black; width: 20%; font: 200% Segoe UI;
            }
        </style>
</head>
<body>
    <?php
        if (!empty($_POST['bok_A'])&& !empty($_POST['bok_B'])&& $guzik == "p") {
            echo "Pole: $bokA x $bokB = $pole cm<sup>2</sup>";
        }elseif (!empty($_POST['bok_A'])&& !empty($_POST['bok_B'])&& $guzik == "o") {
            echo "Obwód: $bokA + $bokB = $obwod cm";
        }else {
            ?>
            <script>
              history.back();
            </script>
            <?php
        }
    ?>
</body>
</html>