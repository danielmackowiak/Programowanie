<?php
    session_start();
    print_r($_POST);
    foreach ($_SESSION['marketing'] as $key -> $value){
        echo "$value<br>";
    }
    echo count($_SESSION['marketing']);
?>