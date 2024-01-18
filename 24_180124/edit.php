<?php

include('connection.php');
$conn = connect();
$msg = "";
$title = "";
$description = "";
$id = "";

mysqli_set_charset($conn, 'utf8');

// var_dump($_GET['id']);

if(isset($_GET['id'])) {
    $id = $_GET['id'];
    $sql = "SELECT * FROM phones WHERE id = $id";
    $result = mysqli_query($conn, $sql);
    $phone = mysqli_fetch_assoc($result);
    if($phone) {
        $title = $phone['title'];
        $description = $phone['description'];
    } else {
        $msg = "Telefon nie istnieje";
    }

}

if(isset($_POST['btn'])) {
    if(!empty(trim($_POST['title'])) && !empty(trim($_POST['description']))) {
        $title = $_POST['title'];
        $description = $_POST['description'];
        $sql2 = "UPDATE phones SET title = '$title', description = '$description' WHERE id = $id";
        $result = mysqli_query($conn, $sql2);
        if($result) {
            header("Location: read.php");
        }


    }
}


mysqli_close($conn);

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

        <h4>Edycja telefon</h4>
        <p>
            <a href="read.php">Powrót</a>
        </p>
        <form action="" method="POST" autocomplete="off">
            <div class="field">
                <input type="text" name="title" placeholder="nazwa telefonu" value="<?php echo $title; ?>" />
            </div>
            <div class="field">
                <textarea name="description" cols="30" rows="10" placeholder="opis"><?php echo $description; ?>
                </textarea>
            </div>
            <input type="submit" name="btn" value="Zmień">
        </form>

<p><?php echo $msg; ?></p>
    </div>

</body>

</html>