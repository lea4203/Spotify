<?php 
session_start();
include('../config/connection.php');
if (isset($_POST['username'])) {
$newUsername = $_POST['username'];
}
$oldUsername = $_SESSION['LOGGED_USER'];
$query = 'SELECT * FROM user WHERE username = "' . $oldUsername . '"';
        $userStatement = $baseSpotify -> prepare($query);
        $userStatement -> execute();
        $user = $userStatement -> fetch(PDO::FETCH_ASSOC);
        if (isset($user['id'])) {
$id = $user['id'];
$inserUser = $baseSpotify -> prepare ("UPDATE user SET username= :username WHERE id = :id");
$inserUser -> execute([
        'id' => $id,
        'username' => $newUsername,
        ]);
$_SESSION['LOGGED_USER'] = $newUsername;};
header('Location:../traitement/compte.php');