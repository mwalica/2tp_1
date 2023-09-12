<?php
$randomNum1 = rand(-100, 100); //losowanie liczby

$str = "brak informacji";

$color = $randomNum1 > 0 ? "red" : "blue";

if ($randomNum1 > 0) {
    $str = "Wylosowana liczba jest dodatnia";
} else if ($randomNum1 < 0) {
    $str = "Wylosowana liczba jest ujemna";
} else {
    $str = "Wylosowana liczba jest zerem";
}
?>

<!DOCTYPE html>
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
        <p>Wylosowana liczba: <strong style="color: <?php echo $color; ?>"><?php echo $randomNum1; ?></strong></p>
        <p><?php echo $str; ?></p>
    </div>

</body>

</html>