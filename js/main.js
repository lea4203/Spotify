// fonction pour jouer les musique sur le lecteur de musique

function App() {
    let songs = [
        {
            name: "Nocif",
            author:"Hamza",
            File:"musics/Nocif Hamza.mp3",

        },
        {
            name: "Capitaine",
            author:"Djadja Dinaz",
            File:"musics/Djadja Dinaz Capitaine.mp3",

        },
        {
            name: "Jolie",
            author:"Gaulois et Ninho",
            File:"musics/Gaulois et Ninho Jolie .mp3",
        
        },
        {
            name:"Descrendo",
            author: "Lomepal",
            File:"musics/Lomepal Descrendo.mp3",
        },
        {
            name : "Meuda",
            author: "Tiakola",
            File:"musics/Tiakola Meuda.mp3",
        },
        {
            name: "Amber",
            author: "Zola",
            File:"musics/Zola amber.mp3",
        },

    ];

    function playSong(song) {
        let audio = document.getElementById("audio");
        audio.src = songs[0].File;
        audio.play();

    }
   
}


