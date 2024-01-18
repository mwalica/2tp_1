<?php
include('connection.php');

$conn = connect();

mysqli_set_charset($conn, 'utf8');

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $sql = "SELECT * FROM phones WHERE id = $id";
    $result = mysqli_query($conn, $sql);
    // $phones = mysqli_fetch_all($result, MYSQLI_ASSOC);//
    $phone = mysqli_fetch_assoc($result);// tablica asocjacyjna z jednego elementu bazy danych
    mysqli_close($conn);
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

        <h4>Szczegóły telefony</h4>
        <p>
            <a href="read.php">Powrót</a>
        </p>
        <?php if ($phone) : ?>
            <h3><?php echo $phone['title']; ?></h3>
            <p><?php echo $phone['description']; ?></p>
        <?php else : ?>
            <p>Nie ma takiego telefonu</p>
        <?php endif; ?>
    </div>

</body>

</html>