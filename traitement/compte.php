<?php
    include_once('traitement/connection.php');
    include("header.php");
    if (!isset($_SESSION['LOGGED_USER'])){
        include_once('traitement/login.php');
    }
    else {
    $query = 'SELECT * FROM user where username = "' . $_SESSION['LOGGED_USER'] . '"';
    $userStatement = $baseSpotify -> prepare($query);
    $userStatement -> execute();
    $user = $userStatement -> fetch(PDO::FETCH_ASSOC);
    ?>
    <div class="d-flex flex-column align-items-center">
    <h1>Mon compte</h1>
    <h2>Votre pseudo : <?php echo($user['pseudo']) ?></h2> 
    <img src="<?php echo($user['avatar']) ?>" width="200px"/>

    <form action="traitement/" method="post" class="d-flex flex-column text-center">
    <label for="username">
    <input type="text" name="username" id="username" value="<?php echo($user['username']);?>">
    <input type="submit" value="">
    </form>
<br />
<h4> Vous voulez vous déconnecter ? </h4>
<a href="traitement/logout.php">Se déconnecter</a>
</div>
<?php } ?>
