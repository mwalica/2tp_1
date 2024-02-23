<!-- 
    email: jan@wp.pl
    hasło: 123456
 -->

<?php
session_start();
$alert = "";

if(isset($_POST["btn"])) {
    $email = $_POST['email'];
    $password = $_POST['password'];
    //połączenie z baza danych

    if($email === "jan@wp.pl" && $password === "123456") {
        $_SESSION["token"] = true;
        header("Location: home.php");
    } else {
        $alert = "Proszę wpisać poprawne dane logowania";
    }

}


?>


<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Logowanie</title>
</head>
<body>
    <form action="login.php" method="POST">
        <input type="email" name="email" placeholder="e-mail" />
        <input type="password" name="password" placeholder="hasło">
        <input type="submit" value="Zaloguj" name="btn">
    </form>
    <p><?php echo $alert; ?></p>
</body>
</html>