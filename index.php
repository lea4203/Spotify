<?php

include 'config/connexion.php';

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    
</head>

<body>
   
<div class="sidebar">
      <div class="logo">
        <a href="#">
          <img src="https://storage.googleapis.com/pr-newsroom-wp/1/2018/11/Spotify_Logo_CMYK_Green.png" alt="Logo" />
        </a>
      </div>

      <div class="navigation">
        <ul>
          <li>
            <a href="#">
              <span class="fa fa-home"></span>
              <span>Home</span>
            </a>
          </li>

          <li>
            <a href="#">
              <span class="fa fa-search"></span>
              <span>Search</span>
            </a>
          </li>

          <li>
            <a href="#">
              <span class="fa fas fa-book"></span>
              <span>Your Library</span>
            </a>
          </li>
        </ul>
      </div>

      <div class="navigation">
        <ul>
          <li>
            <a href="#">
              <span class="fa fas fa-plus-square"></span>
              <span>Create Playlist</span>
            </a>
          </li>

   
          <li>
            <a href="#">
              <span class="fa fas fa-heart"></span>
              <span>Liked Songs</span>
            </a>
          </li>
        </ul>
      </div>

      <div class="policies">
        <ul>
          <li>
            <a href="#">Cookies</a>
          </li>
          <li>
            <a href="#">Privacy</a>
          </li>
        </ul>
      </div>

    </div>

    <div class="main-container">
      <div class="topbar">
        <div class="prev-next-buttons">
          <button type="button" class="fa fas fa-chevron-left"></button>
          <button type="button" class="fa fas fa-chevron-right"></button>
        </div>

        <div class="navbar">
          <ul>
           
            <li>
              <a href="#"></a>
            </li>
            <li class="divider">|</li>
            <li>


              <a href="../traitement/login.php">Se connecter</a>
            </li>
            <li>

              <a href="../../compte.php">Mon compte</a>

            


            </li>
          </ul>
        </div>
      </div>

      <div class="spotify-playlists">
        <h2>Spotify Playlists</h2>

        <div class="list">
          <div class="item">
            <img src="https://i.scdn.co/image/ab67616d0000b2733b5e11ca1b063583df9492db" />
            <div class="play">
              <span class="fa fa-play"></span>
            </div>
            <h4>Today's Top Hits</h4>
            <p>Rema & Selena Gomez are on top of the...</p>
          </div>

      </div>


    <script
      src="https://kit.fontawesome.com/23cecef777.js"
      crossorigin="anonymous"
    ></script>
    
</body>

<script src="js/main.js"></script>

</html>
