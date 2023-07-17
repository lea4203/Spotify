



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
        $name = htmlspecialchars($_POST['username']);
            $insertStatement = $baseQuizz -> prepare("INSERT INTO user (username) VALUES (:username)");
            $insertStatement -> execute([
                'username' => $name,
                
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

<?php if (!isset($loggedUser)): ?>
    <form action="../index.php" method="POST">
        <h2>Connectez-vous </h2>
    <?php if(isset($errorMessage)) : ?>
        <div>
            <?php echo($errorMessage); ?>
        </div>
    <?php endif; ?>
    <div>
        <label for="pseudo">Pseudo</label>
        <input type="text" name="pseudo" id="pseudo">
    </div>
    <input type="submit" value="Envoyer">
    </form>
<?php endif; ?>

