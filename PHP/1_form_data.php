<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dane</title>
</head>
<body>
    <h4>Dane pobrane z formularza </h4>
    <?php
        //echo '<pre>' ,print_r($_GET), '</pre>';
        //echo $_GET_['surname'];

        /*
        echo '<pre>';
            print_r($_GET);
        echo '</pre>';
        */

// Dodaj pole imię oraz pole kod pocztowy (składa się z dwóch pól, pierwsze ma rozmiar 2, drugie 3)
// isset()
// operatory logiczne AND &&, OR ||

// Sprawdź czy użytkownik wypełnił wszystkie dane, jeśli tak to wyświetl mu heredoc, w przeciwnym razie przekieruj użytkownika do formularza

        if (!empty($_GET['name']) && !empty(GET['surname']) && !empty(GET['zipcode']) && !empty(GET['zipcode2'])) {
            echo 'Dane wprowadzone poprawnie';
            echo <<<T
            Imię i Nazwisko: $_GET[name] $_GET[surname]<br>
            Hasło: {$_GET['pass']}<br>
            Kod Pocztowy1: $_GET[zipcode]-$_GET[zipcode2]
T;
        }else {
            echo 'Wypełnij wszystkie dane!';
        }

// po nie wypełnieniu danych, przekierowywuje użytkownika do formularza, dane w formularzu mają byc wypełnione (oprócz hasła)
// wykorzystaj skrypt w js (historia)




    ?>
</body>
</html>