<?php
// Użytkownik podaje z klawiatury dwie długości do wyboru w polu radio ma pole i obwód domyślnie zaznaczone ma być 'pole'
// Zabezpiecz formularz przed podaniem pustych danych

// Wynik wyświetl w formacie:
// Pole wynosi: 20cm2 (2 ma byc w indeksie górnym)
// Obwód wynosi: 20cm
// Dane wyślij z formularza bezpiecznie (POST)
// Obliczenia mają być wyidoczne w innym pliku
?>

<?php
    session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Obliczenia</title>
        <style>
            body {
                padding: 90px; line-height: 35px; border: dotted 5px black; width: 30%; font: 200% Segoe UI; margin-left: auto; margin-right: auto; transform: translateY(93%);
            }
        </style>
</head>
<body>
    <center>
    <?php

        $pole = $_SESSION['bokA'] * $_SESSION['bokB'];
        $obwod = $_SESSION['bokA'] + $_SESSION['bokB'];     

        if (!empty($_SESSION['bokA'])&& !empty($_SESSION['bokB'])&& $_SESSION['guzik'] == "p") {
            echo "Pole: $_SESSION[bokA] x $_SESSION[bokB] = $pole cm<sup>2</sup>";
        }elseif (!empty($_SESSION['bokA'])&& !empty($_SESSION['bokB'])&& $_SESSION['guzik'] == "o") {
            echo "Obwód: $_SESSION[bokA] + $_SESSION[bokB] = $obwod cm";
        }else {
            ?>
            <script>
              history.back();
            </script>
            <?php
        }
    ?>
    </center>
</body>
</html>