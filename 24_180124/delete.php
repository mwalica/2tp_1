<?php
include('connection.php');

$conn = connect();

if(isset($_GET['id'])) {
    $id = $_GET['id'];
    $sql = "DELETE FROM phones WHERE id = $id";
    $result = mysqli_query($conn, $sql);
    if($result) {
        header("Location: read.php");
    }
}