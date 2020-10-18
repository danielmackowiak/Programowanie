<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formularz z danymi użytkownika</title>
</head>
<body>
    <h4>Formularz z danymi użytkownika</h4>
    <form action="./1_form_data.php"method="get">
        <input type="text" name="name" placeholder="Imię"><br><br>
        <input type="text" name="surname" placeholder="Nazwisko"><br><br>
        <input type="password" name="pass" placeholder="Hasło"><br><br>
        <input type="text" name="zipcode" size="2" maxlength="2" placeholder="Kod Pocztowy"><br><br>
        <input type="text" name="zipcode2" size="2" maxlength="3" placeholder="Kod Pocztowy2"><br><br>
        <input type="submit" value="Wyślij dane"
    </form>
</body>
</html>