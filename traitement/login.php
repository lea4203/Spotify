<?php
session_start();



include_once('../config/connexion.php');



$username = $_POST['username'];

$query = 'SELECT * FROM user where username = "' . $username . '"';
$userStatement = $baseSpotify -> prepare($query);
$userStatement -> execute();
$user = $userStatement -> fetch(PDO::FETCH_ASSOC);


$query = 'INSERT INTO user (username) VALUES ("' . $username . '")';
$userStatement = $baseSpotify -> prepare($query);
$userStatement -> execute();


if ($user) {
    $_SESSION['LOGGED_USER'] = $user['username'];
    header('Location:../index.php');
}



?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="login.php" method="POST">
    <input type="text" name="username" id="username" placeholder="username">
    <input type="submit" value="Se connecter">
    </form>
</body>
</html>

