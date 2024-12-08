// Mengambil semua baris dengan kelas 'clickable-row'
var rows = document.querySelectorAll('.clickable-row');

rows.forEach(function (row) {
    // Menambahkan event listener untuk klik pada setiap baris
    row.addEventListener('click', function () {
        // Mengarahkan pengguna ke halaman movie.html
        window.location.href = 'movie.html';
    });
});

// Mengambil semua baris dengan kelas 'clickable-row1'
var rows = document.querySelectorAll('.clickable-row1');

rows.forEach(function (row) {
    // Menambahkan event listener untuk klik pada setiap baris
    row.addEventListener('click', function () {
        // Mengarahkan pengguna ke halaman movie.html
        window.location.href = 'genre.html';
    });
});
