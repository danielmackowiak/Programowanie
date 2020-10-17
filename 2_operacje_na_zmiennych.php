
<?php
    //wersja języka php
    echo PHP_VERSION,'<hr>'; //7.4.10

    //porównanie
    $x = 20;
    $y = 22;

    if ($x == $y){
        echo "$x jest równa $y";
    }else{
        echo "$x jest równa $y";
    }

    $x = 20;
    $y = 22;

    if ($x == $y){
        echo "\$x jest równa \$y";
    }else{
        echo "\$x jest równa \$y";
    }

    echo gettype($x),'<br>'; //integer
    echo gettype($y),'<br>'; //double
    
echo "<hr>";
    //operator <=>

    $x = 2;
    $y = 20.0;

    echo $x <=> $y;

    //SWITCH
    echo "<hr>";

    $country = 'Polska';
    switch ($country) {
        case 'Polska':
            echo '<br>Pochodzisz z Polski';
        break;
        case 'Gruzja':
            echo '<br>Pochodzisz z Gruzji';
        break;
        default:
            echo '<br>Pochodzisz z innego kraju niż Polska lub Gruzja';
    break;
    }



//zadanie 1

    $a = 7.5
    $b = 10

    switch ($a <=> $b) {
        case '($b <=> $a)':
            echo 'Zmienna A jest większa od zmiennej B';
            break;
        case '($a <=> $b)':
            echo 'Zmienna B jest większa od zmiennej A';
            break;
        default:
            # code...
            break;
    }

// postinkrementacja $x++ => $x = $x + 1
// postinkrementacja $x-- => $x = $x - 1

// preinkrementacja ++$x
// preinkrementacja --$x

$x= 10;
echo $x++; //10
echo $x; //11
echo ++$x; //12
echo "--$x<br>"; //11

$x=1
echo $x; //1
$x=$x++;
echo $x; //1
$x=$x++;
echo $x; //2
$y=++$x;
echo $x; //3
echo $y; //3
$y=$x++;
echo &x; //4
echo "$y<br>"; //3



?>