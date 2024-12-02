$(document).ready(function () {
    var owl = $("#movie-carousel");
    owl.owlCarousel({
        items: 3, // Jumlah item yang terlihat sekaligus
        loop: true, // Carousel berputar dalam loop
        margin: 10, // Jarak antar item
        nav: false, // Mengaktifkan tombol navigasi
        dots: false, // Menonaktifkan navigasi dot
        autoplay: true, // Mengaktifkan autoplay
        autoplayTimeout: 5000, // Durasi sebelum berpindah ke item berikutnya (dalam milidetik, 5000 = 5 detik)
        autoplayHoverPause: true, // Pause autoplay ketika mouse berada di atas carousel
        responsive: {
            0: {
                items: 1, // 1 item pada layar kecil
            },
            768: {
                items: 2, // 2 item pada layar menengah
            },
            1024: {
                items: 3, // 3 item pada layar besar
            },
        },
    });

    // Sinkronisasi tombol navigasi dengan carousel
    $(".carousel-control-prev").click(function () {
        owl.trigger("prev.owl.carousel");
    });

    $(".carousel-control-next").click(function () {
        owl.trigger("next.owl.carousel");
    });
});       