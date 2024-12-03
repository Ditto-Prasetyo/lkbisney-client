// Pilih elemen-elemen yang diperlukan
const fullscreenButton = document.getElementById("fullscreen-button");
const trailerButton = document.getElementById("trailer-button");
const trailerModal = new bootstrap.Modal(document.getElementById("trailerModal"));
const trailerVideo = document.getElementById("trailerVideo");
const cinemaButton = document.getElementById("cinema-button");
const popupButton = document.getElementById("popup-button");

// Pilih elemen video (misalnya video di tengah)
const videoContainer = document.querySelector(".video-container");
const videoThumbnail = document.querySelector(".video-thumbnail");

// mutable variable 
let videoStarted = false;
let videoPopupWindow;

// Fungsi untuk Fullscreen
fullscreenButton.addEventListener("click", () => {
    if (videoContainer.requestFullscreen) {
        videoContainer.requestFullscreen();
    } else if (videoContainer.webkitRequestFullscreen) {
        videoContainer.webkitRequestFullscreen();
    } else if (videoContainer.msRequestFullscreen) {
        videoContainer.msRequestFullscreen();
    }
});


// URL video YouTube untuk trailer
const videoURL = "https://www.youtube.com/embed/sfAc2U20uyg";

// Fungsi untuk Trailer
trailerButton.addEventListener("click", () => {
    // Set video URL
    trailerVideo.src = videoURL;

    // Tampilkan modal
    trailerModal.show();
});

// Bersihkan video saat modal ditutup
document.getElementById("trailerModal").addEventListener("hidden.bs.modal", () => {
    trailerVideo.src = "";
});


// Fungsi untuk Cinema Mode
cinemaButton.addEventListener("click", () => {
    videoContainer.style.backgroundColor = "black";
    videoContainer.style.padding = "20px";
    alert("Cinema mode activated.");
});

// Fungsi untuk Popup
document.getElementById("popup-button").addEventListener("click", () => {
    const videoURL = "https://www.youtube.com/embed/sfAc2U20uyg";
    const imageThumbnail = "../img/dead.jpg";

    // Jika video belum dimulai
    if (!videoStarted) {
        // Buat pop-up dengan gambar dan tombol play
        const popupContent = `
            <html>
            <head>
                <style>
                    body {
                        margin: 0;
                        display: flex;
                        justify-content: center;
                        align-items: center;
                        height: 100vh;
                        background: black;
                    }
                    .container {
                        position: relative;
                        width: 100%;
                        height: 100%;
                        display: flex;
                        justify-content: center;
                        align-items: center;
                    }
                    .play-button {
                        position: absolute;
                        background: rgba(0, 0, 0, 0.5);
                        border: none;
                        color: white;
                        font-size: 50px;
                        cursor: pointer;
                        border-radius: 50%;
                        width: 80px;
                        height: 80px;
                        display: flex;
                        justify-content: center;
                        align-items: center;
                    }
                    img {
                        max-width: 90%;
                        max-height: 90%;
                        display: block;
                        border-radius: 10px;
                    }
                </style>
            </head>
            <body>
                <div class="container">
                    <img src="${imageThumbnail}" alt="Thumbnail">
                    <button class="play-button" onclick="playTrailer()">▶</button>
                </div>
                <script>
                    function playTrailer() {
                        window.location.href = "${videoURL}?autoplay=1";
                    }
                </script>
            </body>
            </html>
        `;

        // Buka jendela pop-up
        videoPopupWindow = window.open("", "_blank", "width=800,height=600,scrollbars=no,resizable=no");
        videoPopupWindow.document.write(popupContent);
    } else {
        // Jika video sudah dimulai, tampilkan video dalam pop-up
        const videoURLWithState = videoURL + "?autoplay=1"; // Tambahkan autoplay
        videoPopupWindow = window.open(
            videoURLWithState,
            "_blank",
            "width=800,height=600,scrollbars=no,resizable=no"
        );
    }
});


// fungsi untuk menampilkan video avengers: infinity war
function playVideo() {
    const videoContainer = document.querySelector('.video-container');
    const videoURL = "https://www.youtube.com/embed/sfAc2U20uyg";
    
    // Ambil ukuran container sebelumnya
    const containerWidth = videoContainer.offsetWidth;
    const containerHeight = videoContainer.offsetHeight;

    // Buat elemen iframe untuk menggantikan gambar
    const iframe = document.createElement('iframe');
    iframe.src = videoURL + "?autoplay=1"; // Autoplay video
    iframe.style.width = containerWidth + "px";
    iframe.style.height = containerHeight + "px"; // Samakan tinggi dengan container
    iframe.style.border = "none";
    iframe.allow = "accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture";
    iframe.allowFullscreen = true;

    // Hapus elemen gambar dan tombol
    videoContainer.innerHTML = "";

    // Masukkan iframe ke dalam container
    videoContainer.appendChild(iframe);

    // Tandai video telah dimulai
    videoStarted = true;
}





