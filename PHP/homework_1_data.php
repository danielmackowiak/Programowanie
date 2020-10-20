<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Wynik</title>
</head>
<body>
    <?php
        $bokA = $_POST['bok_A'];
        $bokB = $_POST['bok_B'];
        $guzik = $_POST['typ'];

        $pole = $bokA * $bokB;
        $obwod = $bokA + $bokB;

        if (!empty($_POST['bok_A'])&& !empty($_POST['bok_B'])&& $guzik == "p") {
            echo "Pole wynosi: $pole cm<sup>2</sup>";
        }elseif (!empty($_POST['bok_A'])&& !empty($_POST['bok_B'])&& $guzik == "o") {
            echo "Obwód wynosi: $obwod cm";
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