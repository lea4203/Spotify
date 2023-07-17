
<?php

include '../config/connexion.php';

    echo "ppl2";
    $query = 'SELECT * FROM user';
    $userStatement = $baseSpotify->prepare($query);
    $userStatement -> execute();
    $users = $userStatement -> fetchAll(PDO::FETCH_ASSOC);
?>

<?php
    if (isset($_POST['username'])) {
        echo "ppl3";
        foreach ($users as $user) {
        if ($user['username'] === $_POST['username']) {
            $loggedUser = [
                'username' => $user['username']
            ];

                $_SESSION['LOGGED_USER'] = $loggedUser['username'];
        }
    }
    if (!isset($loggedUser)) {
        echo "ppl4";
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
    echo "ppl5";
    $loggedUser = [
        'username' => $_SESSION['LOGGED_USER'],
    ];
}
?>

<?php if (!isset($loggedUser)): ?>
    <?=  "ppl6"; ?>
    <form action="" method="POST">
        <h2>Connectez-vous </h2>
    <?php if(isset($errorMessage)) : ?>
    <?=  "ppl7"; ?>

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

