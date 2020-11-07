<!-- 
Dodaj na stronie 3_funkcje.php formularz z imieniem i nazwiskiem
Po zatwierdzeniu danych wywołaj funkcję z pliku 2_function.php, wcześniej sprawdzając czy dane
zostały poprawnie wypełnione

Wyświetl wynik pobrany z funkcji
 -->

 <!DOCTYPE html>
 <html lang="en">
 <head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Formularz</title>
 </head>
 <body>
   <form name="form1" method="post">
   <label for="name">Imię:</label>
    <input type="text" name="name"><br><br>
   <label for="surname">Nazwisko:</label>
    <input type="text" name="surname"><br><br>
    <input type="submit" name="button" value="Prześlij dane">
   </form>
   <?php
   if (isset($_POST['button'])) {
     
    if (!empty($_POST['name'])&& !empty($_POST['surname'])) {
      include_once './2_function.php';
      echo data($_POST['name'], $_POST['surname']);
    }else {
      echo 'Wypełnij wszystkie pola';
    }
   }
   ?>
 </body>
 </html>