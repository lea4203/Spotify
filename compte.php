<?php
    include_once('../config/connection.php');
 
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
    <h2>Votre pseudo : <?php echo($user['username']) ?></h2> 
    

    <form action="traitement/modif-compte.php" method="post" class="d-flex flex-column text-center">
  
    <img src="" width="100px"/> 
    <label for="pseudo">
    <input type="text" name="username" id="username" value="<?php echo($user['username']);?>">
    <input type="submit" value="modifier">
    </form>
<h4> Vous voulez vous déconnecter ? </h4>
<a href="traitement/logout.php">Se déconnecter</a>
</div>
<?php } ?>