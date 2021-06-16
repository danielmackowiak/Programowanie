<?php
session_start();
//print_r($_POST);
foreach ($_POST as $key => $value) {
    if (empty($value)) {
        echo "$key - brak danych<br>";
        $_SESSION['error'] = "Wypełnij wszystkie dane!";
?>
        <script>
            history.back();
        </script>
    <?php
        exit();
    }
}
if (!isset($_POST['terms'])) {
    $_SESSION['error'] = "Zaznacz pole z regulaminem";
    ?>
    <script>
        history.back();
    </script>
<?php
    exit();
}

if ($_POST['email1'] != $_POST['email2']) {
    $_SESSION['error'] = "Pole email są różne!";
?>
    <script>
        history.back();
    </script>
<?php
    exit();
}

if ($_POST['pass1'] != $_POST['pass2']) {
    $_SESSION['error'] = "Pole z hasłem są różne!";
?>
    <script>
        history.back();
    </script>
    <?php 
    exit();
}

require_once('./connect.php');
if (!$connect->connect_errno) {
    $name = $_POST['name'];
    $surname = $_POST['surname'];
    $email = $_POST['email1'];
    $pass = $_POST['pass1'];
    $city = $_POST['city'];
    $birthday = $_POST['birthday'];
    $nationality = $_POST['nationality'];
    $gender = $_POST['gender'];
    $pass = password_hash($pass, PASSWORD_ARGON2I);

    //old (SQL Injection)
    //$sql= "INSERT INTO `customers` (`id`, `cities_id`, `name`, `surname`, `birthday`, `height`, //`create_date`) VALUES (NULL, '$city', '$name', '$surname', '2021-03-10', '123', current_timestamp())";

    //$connect->query($sql);

    //new
    $sql = "INSERT INTO `customers` (`cities_id`,`nationality_id`, `name`, `surname`,`gender`, `email`, `pass`, `birthday`) VALUES (?,?,?,?,?,?,?,?)";
    $stmt =  $connect->prepare($sql);
    $stmt->bind_param("ssssssss", $city, $nationality, $name, $surname, $gender, $email, $pass, $birthday);
    if ($stmt->execute()) {
        

        //zgody marketingowe
        if (count($_SESSION['marketing']) > 0) {
            $user_id = $connect->insert_id;
            foreach ($_SESSION['marketing'] as $key => $value) {
                if (isset($_POST["marketing$value"])) {
                    //echo 'Zaznaczyłeś zgodę marketingową o id=', $value, '<br>';
                    $sql = "INSERT INTO `customers_marketing`(`customers_id`, `marketing_id`) VALUES (?,?)";
                    }
                    $stmt =  $connect->prepare($sql);
                    $stmt->bind_param("ss", $user_id, $value);
                    $stmt->execute();
                    
            }
        }


            header("location: ../index.php?register=success&email=$email");
            $connect->close();
            exit();

    }else{
        $_SESSION['error'] = 'Nie dodano nowego użytkownika<br>' . $connect->error;
        ?>
        <script>
            history.back();
        </script>
<?php
        exit();
        //echo $connect->error;
    }
} else {
    $_SESSION['error'] = 'Błędne połączenie z bazą danych<br>Error:' . $connect->connect_errno;
    header('location: ../pages/register.php');
}

?>