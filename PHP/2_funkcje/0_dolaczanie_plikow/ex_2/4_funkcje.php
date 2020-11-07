<!-- 
Dodaj na stronie 4_funkcje.php formularz z imieniem, nazwiskiem, kolor (pole typu kolor)
Po zatwierdzeniu danych wywołaj funkcję z pliku 2_function_1.php (3 parametry), wcześniej sprawdzając czy dane
zostały poprawnie wypełnione

Wyświetl wynik pobrany z funkcji w formacie:
Imię i nazwisko: np. Jan Nowak
Kolor: np. #AA1122
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

   <label for="color">Kolor:</label>
   <input type="color" name="color">

    <input type="submit" name="button" value="Prześlij dane">
   </form>
   <?php
   if (isset($_POST['button'])) {
     
    if (!empty($_POST['name'])&& !empty($_POST['surname'])&& !empty($_POST['color']) ) {
      include_once './2_function_1.php';
      echo data($_POST['name'], $_POST['surname'], $_POST['color']);
    }else {
      echo 'Wypełnij poprawnie wszystkie pola!';
    }
   }
   ?>
 </body>
 </html>