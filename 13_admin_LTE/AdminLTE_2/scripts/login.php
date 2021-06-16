<?php
    session_start();

    foreach ($_POST as $value) {
        if (empty($value)) {
            $_SESSION['error']='Wypełnij wszystkie pola!';
?>
            <script>
                history.back();
            </script>
<?php
            exit();
        }
    }
    
    require_once './connect.php';
    $email = $_POST['email'];
    $pass = $_POST['pass'];
    $sql = "SELECT `email`, `pass`, `name`, `surname` FROM `customers` WHERE email=?";
    $stmt = $connect->prepare($sql);
    $stmt->bind_param("s",$email );
    $stmt->execute();
    $result = $stmt->get_result();
    $customer = $result->fetch_assoc();

    if (password_verify($pass, $customer['pass'])) {
        $_SESSION['logged']['email'] = $customer['email'];
        $_SESSION['logged']['name'] = $customer['name'];
        $_SESSION['logged']['surname'] = $customer['surname'];
        //$_SESSION['logged']['permission_id'] = $customer['permission_id'];
        session_regenerate_id();
        $_SESSION['logged']['session_id'] = session_id();
        header('location: ../logged/logged.php');

    }else{
        $_SESSION['error']='Błędne hasło lub login!';
?>
            <script>
                history.back();
            </script>
<?php
    }
    

    
?>