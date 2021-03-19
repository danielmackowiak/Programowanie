<?php
    echo <<<T
    Teb - kurs
    Programowania
T;

    echo "$text<br>";
    echo nl2br($text);

    $name = 'jANUsZ';
    echo "$name<br>";

//zamiana na małe litery
echo strtolower($name),'<br>';

//zamiana na duże litery
echo strtoupper($name),'<br>';

//zamiana pierwszej litery na duża a pozostałych na małe
echo ucfirst(strtolower($name)), '<br>';

    $name = "jANUsz kowALski";
    echo ucfirst(strtolower($name)), '<br>';

// LOREM IPSUM
$lorem = <<<LOREM;
    Lorem ipsum dolor sit amet consectetur adipisicing elit. Illo, numquam delectus tempore amet beatae id quaerat soluta assumenda alias ducimus eligendi dolorem totam debitis quas aperiam consequuntur? Totam, dolor repellendus. <br>
LOREM;

    echo $lorem;
    echo wordwrap($lorem, 40, '<br>');
    echo wordwrap($lorem, 40, '<hr>');

// czyszczenie zawartości bufora
    ob_clean();

// białe znaki
    $name = 'Anna';
    $name1 = '  Anna  ';

    echo 'Długość $name: ' ,strlen($name);
    echo '<br>Długość $name1: ' ,strlen($name1);

// wyczyść zmienną $name1 z białch znaków

    echo lenstr(ltrim($name1)); //5
    echo lenstr(rtrim($name1)); //6
    echo lenstr(trim($name1)); //4

// przeszukiwanie ciągów znaków
    $address = 'Poznań, ul. Rynek Jeżycki 1, tel. (61) 123-45-67';
    echo strstr($address, 'tel');

    $address = 'Poznań, ul. Rynek Jeżycki 1, tel. (61) 123-45-67';
    echo strstr($address, 'tel' true), '<br>';

    $address = 'Poznań, ul. Rynek Jeżycki 1, tel. (61) 123-45-67';
    echo strstr($address, 'Tel'), '<br>';

    $mail = strstr('janusz@gmail.com', "@");
    echo "$mail<br>";

    $mail = strstr('janusz@gmail.com', '64');
    echo "$mail<br>";

// substr
    echo substr('Janusz Kowalski', 7, 5);
    echo strlen(substr('Janusz Kowalski', 7, 5));
    ob_clean();

// zmiana ciągów
    $replace = str_replace('%korona%','grypa', '%korona% jest niebezpieczna');
    echo $replace,'<br>';

// usuń z loginu polskie znaki
    $login = 'bączek';
    $censure = array('ą', 'ę', ...)

?>