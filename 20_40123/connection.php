<?php

function connect() {
    $localhost = "localhost";
    $user = "root";
    $pass = "";
    $dbName = "db_1";
    //połączenie z bazą danych
    return mysqli_connect($localhost, $user, $pass, $dbName);
}
