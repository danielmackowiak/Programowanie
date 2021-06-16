<?php
    session_start();
    print_r($_POST);
    echo '<hr>';

    if(count($_SESSION['marketing']) > 0) {
        foreach ($_SESSION['marketing'] as $key => $value) {
            if (isset($_POST["marketing$value"])){
                echo 'Zaznaczyłeś zgodę marketingową o id=', $value,'<br>';
            }
        }
    }

    echo '<hr>';
    foreach ($_SESSION['marketing'] as $key => $value){
  
    }
    echo count($_SESSION['marketing']);
?>