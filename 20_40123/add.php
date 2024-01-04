<?php
include('connection.php');
// var_dump($_POST);
$msg = "";

$conn = connect();

if (isset($_POST['btn'])) {
    if (!empty(trim($_POST['title'])) && !empty(trim($_POST['description']))) {
        $title = $_POST['title'];
        $description = $_POST['description'];
        //dodawanie danych do db
       mysqli_set_charset($conn, 'utf8');
       $sql = "INSERT INTO phones(title, description) VALUES('$title', '$description')";
       $result = mysqli_query($conn, $sql);
       if($result) {
        header('Location: read.php');
       }
        $msg = "Błąd przy dodawaniu danych";
    } else {
        $msg = "Proszę wypełnić pola formularza";
    }
}


?>

<html lang="pl">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,300;0,400;0,700;1,400&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
    <title>PHP - programowanie aplikacji internetowych</title>
</head>

<body>
    <header>
        <h1>PHP - programowanie aplikacji internetowych</h1>
    </header>

    <div class="container">

        <h4>Dodaj telefon</h4>
        <p>
            <a href="read.php">Powrót</a>
        </p>
        <form action="" method="POST" autocomplete="off">
            <div class="field">
                <input type="text" name="title" placeholder="nazwa telefonu" />
            </div>
            <div class="field">
                <textarea name="description" cols="30" rows="10" placeholder="opis"></textarea>
            </div>
            <input type="submit" name="btn" value="Dodaj" />
        </form>
        <p>
            <?= $msg; ?>
        </p>
    </div>

</body>

</html>