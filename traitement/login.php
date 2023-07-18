
<?php

include '../config/connexion.php';

    $query = 'SELECT * FROM user';
    $userStatement = $baseSpotify->prepare($query);
    $userStatement -> execute();
    $users = $userStatement -> fetchAll(PDO::FETCH_ASSOC);
?>

<?php
    if (isset($_POST['username'])) {
        foreach ($users as $user) {
        if ($user['username'] === $_POST['username']) {
            $loggedUser = [
                'username' => $user['username']
            ];

                $_SESSION['LOGGED_USER'] = $loggedUser['username'];
        }
    }
    if (!isset($loggedUser)) {
        $username = htmlspecialchars($_POST['username']);
            $insertStatement = $baseSpotify -> prepare("INSERT INTO user (username) VALUES (:username)");
            $insertStatement -> execute([
                'username' => $username,
                
            ]);
    }
}
?>

<?php
if (isset($_SESSION['LOGGED_USER'])) {
    $loggedUser = [
        'username' => $_SESSION['LOGGED_USER'],
    ];
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
    <form action="" method="POST">
    <input type="text" name="username" id="username" placeholder="username">
    <input type="submit" value="Se connecter">

<?php if (!isset($loggedUser)): ?>
    <form action="" method="POST">
        <h2>Connectez-vous </h2>
    <?php if(isset($errorMessage)) : ?>

        <div>
            <?php echo($errorMessage); ?>
        </div>
    <?php endif; ?>
    <div>
        <label for="username">Pseudo</label>
        <input type="text" name="username" id="username">
    </div>
    <input type="submit" value="Envoyer">

    </form>
<?php endif; ?>

