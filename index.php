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
              <a href="traitement/login.php">Mon compte</a>
            </li>
          </ul>
          <button action="" type="button">Log In</button>
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

          <div class="item">
            <img src="https://i.scdn.co/image/ab67616d0000b2733b5e11ca1b063583df9492db" />
            <div class="play">
              <span class="fa fa-play"></span>
            </div>
            <h4>RapCaviar</h4>
            <p>New Music from Lil Baby, Juice WRLD an...</p>
          </div>

          <div class="item">
            <img src="https://i.scdn.co/image/ab67616d0000b2733b5e11ca1b063583df9492db" />
            <div class="play">
              <span class="fa fa-play"></span>
            </div>
            <h4>All out 2010s</h4>
            <p>The biggest spmgs pf tje 2010s. Cover:...</p>
          </div>

          <div class="item">
            <img src="https://i.scdn.co/image/ab67616d0000b2733b5e11ca1b063583df9492db" />
            <div class="play">
              <span class="fa fa-play"></span>
            </div>
            <h4>Rock Classics</h4>
            <p>Rock Legends & epic songs that continue t...</p>
          </div>

          <div class="item">
            <img src="https://i.scdn.co/image/ab67616d0000b2733b5e11ca1b063583df9492db" />
            <div class="play">
              <span class="fa fa-play"></span>
            </div>
            <h4>Chill Hits</h4>
            <p>Kick back to the best new and recent chill...</p>
          </div>

          <div class="item">
            <img src="https://i.scdn.co/image/ab67616d0000b2733b5e11ca1b063583df9492db" />
            <div class="play">
              <span class="fa fa-play"></span>
            </div>
            <h4>Viva Latino</h4>
            <p>Today's top Latin hits elevando nuestra...</p>
          </div>

          <div class="item">
            <img src="https://i.scdn.co/image/ab67616d0000b2733b5e11ca1b063583df9492db" />
            <div class="play">
              <span class="fa fa-play"></span>
            </div>
            <h4>Mega Hit Mix</h4>
            <p>A mega mix of 75 favorites from the last...</p>
          </div>

          <div class="item">
            <img src="https://i.scdn.co/image/ab67616d0000b2733b5e11ca1b063583df9492db" />
            <div class="play">
              <span class="fa fa-play"></span>
            </div>
            <h4>All out 80s</h4>
            <p>The biggest songs of the 1090s.</p>
          </div>
        </div>
      </div>


    <script
      src="https://kit.fontawesome.com/23cecef777.js"
      crossorigin="anonymous"
    ></script>
    
</body>

<script src="js/main.js"></script>

</html>
