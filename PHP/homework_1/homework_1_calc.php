<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Obliczenia</title>
</head>
<body>
    <?php
        if (!empty($_POST['bok_A'])&& !empty($_POST['bok_B'])&& $guzik == "p") {
            echo "Pole = $bokA x $bokB";
        }elseif (!empty($_POST['bok_A'])&& !empty($_POST['bok_B'])&& $guzik == "o") {
            echo "Obwód = $bokA + $bokB";
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