<!-- 
Użytkownik w formularzu ma dwa pola input (wynik oraz liczba).
Za pomocą radio buttona wybiera działanie (dodawanie / odejmowanie)
Dodaj w formularzu przycisk.
Utwórz dwie funkcje (dodawanie / odejmowanie), które pobierają dane z wyniku oraz liczbę z pola formularza.
Wynik wyświetl z precyzją dwóch miejsc.
Pole wynik jest nieaktywne, tylko wyświetla wynik.
Wartość początkowa wyniku wynosi 0.
 -->

 <!DOCTYPE html>
 <html lang="en">
 <head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Dodawanie / odejmowanie</title>
 </head>
 <body>
   <form name="form1" method="POST">

   <label for="liczba">Liczba:</label>
    <input type="number" name="liczba"><br><br>

   <label for="radio">Rodzaj działania:</label><br>
   <label for="dodawanie">Dodawanie</label>
    <input type="radio" name="metoda" value="add" checked><br>
   <label for="odejmowanie">Odejmowanie</label>
    <input type="radio" name="metoda" value="sub"><br><br>

   <label for="wynik">Wynik:</label>
    <input type="number" name="wynik" placeholder="0" id="wynik" value="0"><br><br>

   <input type="submit" name="button" value="Oblicz">

   </form>

  <?php
    if (isset($_POST['button'])) {
      $num = $_POST['liczba'];
      /* $ans = $_POST['wynik']; */
      $ans = 0;

      switch ($_POST['metoda']) {
        case 'add':
          function add(&$ans){
            $num + $ans;
          }
          echo add($num);
          break;
        
        case 'sub':
          function sub(&$ans){
            $num - $ans;
          }
          echo sub($num);
          break;
        
        default:
          echo "Proszę wypełnić Pola!";
          break;
      }

    }
  ?>

 </body>
 </html>