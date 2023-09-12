<!DOCTYPE html>
<html lang="pl">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,300;0,400;0,700;1,400&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
    <title>PHP - programowanie aplikacji mobilnych</title>
</head>

<body>
    <header>
        <h1>PHP - programowanie aplikacji internetowych</h1>
    </header>
    <div class="container">

        <?php
        $str1 = "Warszawa"; //typ string
        $str2 = 'Warszawa'; //typ string
        var_dump($str1);
        echo "<br>";
        echo gettype($str1) . "<br>";
        //gettype => zwraca ciąg znaków okreslający typ = string, integer,
        echo "<br>";

        //typ integer
        $num1 = 34; //typ integer
        $num2 = -34; //typ integer

        echo gettype($num1) . ", " . gettype($num2) . "<br>";
        var_dump($num1);
        var_dump($num2);
        echo "<br>";
        //liczby z innych systemów liczbowych
        $bin = 0b111; //liczba binarna
        echo $bin . " " . gettype($bin) . "<br>";
        $oct = 01457; //liczba ósemkowa
        echo $oct . " " . gettype($oct) . "<br>";
        $hex = 0xAAff; //liczba szesnastkowa
        echo $hex . " " . gettype($hex) . "<br>";

        //float liczba zmiennoprzecinkowa

        $num8 = 1.5678;
        var_dump($num8);
        echo $num8 . " typ = " . gettype($num8);
        $num9 = 1.45e5;
        echo $num9 . "<br>";

        //typ logniczy
        $bool1 = true;
        $bool2 = false;

        //zamiana typu
        $str10 = "0";
        var_dump($str10) . "<br>";
        $str11 = intval($str10);
        $str12 = boolval($str10);
        var_dump($str11) . "<br>";
        var_dump($str12) . "<br>";
        echo "<br>";

        //sprawdzanie typów - is_string, is_int ...
        $str20 = "Katowice";
        $str20 = 1;
        if (is_string($str20)) {
            echo '$str20 jest ciągiem znaków <br>';
        }
        if (is_int($str20)) {
            echo '$str20 jest liczbą całkowitą <br>';
        }
        if (is_bool($str20)) {
            echo '$str20 jest wartością logiczną <br>';
        }
        //isset() sprawdznie czy zmienna jest ustawiona
        $count = 70;
        if (isset($count)) {
            echo 'Zmienna $count jest ustawiona i ma wartość ' . $count;
        } else {
            echo 'Zmienn $count nie jest ustawiona';
        }

        //stałe
        echo "<br>";
        define("NUMBER_PI", 3.14);
        const CAR_KEY = "1.4332sdae12";
        echo "Liczba pi = " . NUMBER_PI;
        echo "Klucz auta = " . CAR_KEY;
        
        //stałe magiczne
        echo "<br>";
        echo "Wersja php: " . PHP_VERSION . "<br>";
        echo "Rodzina systemu operacyjnego: " . PHP_OS_FAMILY . "<br>";






        ?>


    </div>

</body>

</html>