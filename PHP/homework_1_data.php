<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Wynik</title>
</head>
<body>
    <?php
        if (!empty($_GET['pole_liczba'])) {
            echo <<<T
                Pole wynosi: $_GET[pole_liczba]
            T;
        }else {
            ?>
            <script>
                // history.back();
            </script>
            <?php
        }
        if (!empty($_GET['obwod_liczba'])) {
            echo <<<T
                Obwód: $_GET[obwod_liczba]
            T;
        }else {
            ?>
            <script>
                // history.back();
            </script>
            <?php
        }

    ?>
</body>
</html>