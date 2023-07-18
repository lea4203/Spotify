
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <script src="https://kit.fontawesome.com/23cecef777.js" crossorigin="anonymous"></script>
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
                <li><a href="#"><span class="fa fa-home"></span><span>Home</span></a></li>
                <li><a href="#"><span class="fa fa-search"></span><span>Search</span></a></li>
                <li><a href="#"><span class="fa fas fa-book"></span><span>Your Library</span></a></li>
            </ul>
        </div>

        <div class="navigation">
            <ul>
                <li><a href="#"><span class="fa fas fa-plus-square"></span><span>Create Playlist</span></a></li>
                <li><a href="#"><span class="fa fas fa-heart"></span><span>Liked Songs</span></a></li>
            </ul>
        </div>

        <div class="policies">
            <ul>
                <li><a href="#">Cookies</a></li>
                <li><a href="#">Privacy</a></li>
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
                    <li><a href="#"></a></li>
                    <li class="divider">|</li>
                    <li><a href="../traitement/login.php">Se connecter</a></li>
                    <li><a href="../traitement/compte.php">Mon compte</a></li>
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


        

                

             <div class="music-player flex-column">"
               <div class="slider center" style="--controls-animate: up running;">
                    <div class="slider__content center">
                        <button class="music-player__playlist-button center button">
                            <i class="icon-playlist"></i>
                        </button>
                        <button class="music-player__broadcast-guarantor center button">
                            <i class="icon-play"></i><i class="icon-pause"></i>
                        </button>
                        <div class="slider__imgs flex-row" style="--index: -7; will-change: auto;">
                            <!-- Images -->
                        </div>
                    </div>
                    <div class="slider__controls center">
                        <button class="slider__switch-button flex-row button"><i class="icon-back"></i></button>
                        <div class="music-player__info text_trsf-cap">
                            <!-- Singer name and subtitle -->
                        </div>
                        <button class="slider__switch-button flex-row button"><i class="icon-next"></i></button>
                        <div class="progress center">
                            <div class="progress__wrapper">
                                <div class="progress__bar center" style="--width: 5.260019024671666%;"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

      
            

     

            <ul class="music-player__playlist list">
                <!-- Songs -->
            </ul>
        </div>
    </div>

    <script src="js/main.js"></script>
</body>
</html>
