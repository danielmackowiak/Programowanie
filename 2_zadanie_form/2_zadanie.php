<?php
  session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Kalkulator</title>
</head>
<body>
  <h4>Kalkulator</h4>
  <form method="POST">
    <input type="number" name="liczba1" id="1">
      <select name="znak">
        <option value="add">+</option>
        <option value="sub">-</option>
        <option value="multi">*</option>
        <option value="div">/</option>
      </select>
    <input type="number" name="liczba2" id="2">
    <input type="submit" name="button" value="=">
    <input type="number" step="0.0001" name="wynik" id="wynik" disabled>
  </form>
  <?php
  if (!isset($_SESSION['liczba1'])&& !isset($_SESSION['liczba2'])) {
    $_SESSION['liczba1'] = $_POST['liczba1'];
    $_SESSION['liczba2'] = $_POST['liczba2'];
  }
    if (isset($_POST['button'])) {
      if (!empty($_POST['liczba1'])&& !empty($_POST['liczba2'])) {
        switch ($_POST['znak']) {
          case 'add':
            require './function.php';
            $_SESSION['result'] = add($_SESSION['liczba1'], $_POST['liczba2']);
            break;
          case 'sub':
            require './function.php';
            $_SESSION['result'] = sub($_SESSION['liczba1'], $_POST['liczba2']);
            break;
          case 'multi':
            require './function.php';
            $_SESSION['result'] = multi($_SESSION['liczba1'], $_POST['liczba2']);
            break;
          case 'div':
            require './function.php';
            $_SESSION['result'] = div($_SESSION['liczba1'], $_POST['liczba2']);
            break;
          default:
            echo "Poprawnie wypełnij wszystkie pola liczbowe!";
            break;
        }
        ?>
        <script>
          document.getElementById('wynik').value = <?php echo $_SESSION['result'] ?>;
        </script>
        <?php
      }else {
        echo 'Wypełnij pola poprawnie!';
      }
    }
  ?>
</body>
</html>