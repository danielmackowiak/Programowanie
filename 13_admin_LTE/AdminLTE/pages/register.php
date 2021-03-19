<?php 
  session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>AdminLTE 3 | Registration Page (v2)</title>
  
  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="../plugins/fontawesome-free/css/all.min.css">
  <!-- icheck bootstrap -->
  <link rel="stylesheet" href="../plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../dist/css/adminlte.min.css">
</head>
<body class="hold-transition register-page">
<div class="register-box">
  <div class="card card-outline card-primary">
    <div class="card-header text-center">
      <a href="../" class="h1"><b>Admin</b>LTE</a>
<?php 
  if (isset($_SESSION['error'])) {
    echo <<<ERROR
    <div class="alert alert-danger alert-dismissible">
      $_SESSION[error]
    </div>
ERROR;
    unset($_SESSION['error']);
  }
  
?>
    </div>
    <div class="card-body">
      <p class="login-box-msg">Zarejestruj użytkownika</p>

      <form action="../scripts/register.php" method="post">
        <div class="input-group mb-3">
          <input type="text" class="form-control" placeholder="Imię" name="name">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-user"></span>
            </div>
          </div>
        </div>

        <div class="input-group mb-3">
          <input type="text" class="form-control" placeholder="Nazwisko" name="surname">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-user"></span>
            </div>
          </div>
        </div>
        
        <div class="input-group mb-3">
          <input type="radio" class="form-control" name="gender" value="f" checked>Kobieta
          <input type="radio" class="form-control" name="gender" value="m">Mężczyzna
          <div class="input-group-append">
          </div>
        </div>

        <div class="input-group mb-3">
          <input type="email" class="form-control" placeholder="Email" name="email1">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-envelope"></span>
            </div>
          </div>
        </div>

        <div class="input-group mb-3">
          <input type="email" class="form-control" placeholder="Powtórz email" name="email2">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-envelope"></span>
            </div>
          </div>
        </div>

        <div class="input-group mb-3">
          <input type="password" class="form-control" placeholder="Hasło" name="pass1">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
        </div>

        <div class="input-group mb-3">
          <input type="password" class="form-control" placeholder="Powtórz hasło"  name="pass2">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
        </div>

        <div class="input-group mb-3">
          <input type="date" class="form-control" name="birthday">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-calendar"></span>
            </div>
          </div>
        </div>

        <div class="input-group mb-3">
         <select class="form-control" name="city">

<?php 
  require_once '../scripts/connect.php';
  $sql = "SELECT * FROM cities";
  $stmt = $connect->prepare($sql);
  $stmt->execute();
  $result = $stmt->get_result();
  while ($city = $result->fetch_assoc()) {
    if ($city['city'] == 'Poznań') {
      echo <<<CITY
      <option selected value="$city[id]">$city[city]</option>
CITY;
    }else{
    echo <<<CITY
      <option value="$city[id]">$city[city]</option>
CITY;
    }
  }
  
?>

          </select>

          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-city"></span>
            </div>
          </div>
        </div>
        
<!-- nationality --->
        <div class="input-group mb-3">
         <select class="form-control" name="nationality">

<?php 
  //require_once '../scripts/connect.php';
  $sql = "SELECT * FROM countries";
  $stmt = $connect->prepare($sql);
  $stmt->execute();
  $result = $stmt->get_result();
  while ($nationality = $result->fetch_assoc()) {
    if ($nationality['country'] == 'Poland') {
    echo <<<CITY
      <option selected value="$nationality[id]">Polska</option>
CITY;
    }else{
    echo <<<CITY
      <option value="$nationality[id]">$nationality[country]</option>
CITY;
  }
}
  
?>

          </select>

          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-city"></span>
            </div>
          </div>
        </div>

        <div class="row">
          <div class="col-8">
            <div class="icheck-primary">
              <input type="checkbox" id="agreeTerms" name="terms" value="agree">
              <label for="agreeTerms">
                <a href="#">Zatwierdzam regulamin</a>
              </label>
            </div>
          </div>
          </div>

          <!---zgoda marketing --->
      <div class="row">
        <div class="col-8">      
          
<!-- sprawdzenie czy w db istnieja zgody marketingowe -->

<?php
/*
$_SESSION['marketing'] = array();
  $sql = "SELECT * FROM marketing";
  $stmt = $connect->prepare($sql);
  $stmt->execute();
  $result = $stmt->get_result();
  while ($agreement = $result->fetch_assoc()) {
    
    array_push($_SESSION['marketing'], $agreement['id']);
    echo <<<AGREEMENT
      <input type="checkbox" class="custom-control-input" name="$agreement[id]" id="marketing">
      <label class="custom-control-label" for="marketing">$agreement[marketing_name]</label>
AGREEMENT;
  }

  $connect->close();
  */
?>

<!-- homework -->
<?php 

  $_SESSION['marketing'] = array();
  $sql = "SELECT * FROM marketing";
  $stmt = $connect->prepare($sql);
  $stmt->execute();
  $result = $stmt->get_result();
  while ($agreement = $result->fetch_assoc()) {
    if ($agreement['active'] == 1) {
      array_push($_SESSION['marketing'], $agreement['id']);
    echo <<<AGREEMENT
    <div class="custom-control custom-switch custom-switch-off-danger custom-switch-on-success">

      <input type="checkbox" class="custom-control-input" name="marketing$agreement[id]" id="$agreement[marketing_name]">
      <label class="custom-control-label" for="$agreement[marketing_name]">$agreement[marketing_name]</label>
    </div>
AGREEMENT;
    }
  }

  $connect->close();

?>


        </div>
          <!-- /.col -->
          <div class="col-4">
            <button type="submit" class="btn btn-primary btn-block">Sign In</button>
          </div>
          <!-- /.col -->
        </div>

      </form>
      <div class="social-auth-links text-center">
        <a href="#" class="btn btn-block btn-primary">
          <i class="fab fa-facebook mr-2"></i>
          Sign up using Facebook
        </a>
        <a href="#" class="btn btn-block btn-danger">
          <i class="fab fa-google-plus mr-2"></i>
          Sign up using Google+
        </a>
      </div>

      <a href="../" class="text-center">Zaloguj się</a>
    </div>
    <!-- /.form-box -->
  </div><!-- /.card -->
</div>
<!-- /.register-box -->

<!-- jQuery -->
<script src="../plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="../dist/js/adminlte.min.js"></script>
</body>
</html>
