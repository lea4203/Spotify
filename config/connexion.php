<?php


try 
    {
        $baseSpotify = new PDO('mysql:host=127.0.0.1;dbname=spotify;charset=utf8', 'root');
        echo "ppl1";
    }
            
    catch(Exception $e) 
    {
        die('Erreur : ' .$e->getMessage());
    }
?>