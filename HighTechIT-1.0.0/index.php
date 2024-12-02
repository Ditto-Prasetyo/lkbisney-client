<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>LK21 2.0 : Bisney Movie</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600&family=Saira:wght@500;600;700&display=swap"
        rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/animate/animate.min.css" rel="stylesheet">
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="css/style.css" rel="stylesheet">
    <link href="style/style.css" rel="stylesheet">
</head>

<body>
    <!-- Spinner Start -->
    <div id="spinner"
        class="show position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner-grow text-primary" role="status"></div>
    </div>
    <!-- Spinner End -->

    <!-- Topbar Start -->
    <div class="container-fluid bg-dark py-2 d-none d-md-flex">
        <div class="container">
            <div class="d-flex justify-content-between topbar">
                <div class="top-info">
                    <small class="me-3 text-white-50"><a href="https://uin-malang.ac.id/"><i
                                class="fas fa-map-marker-alt me-2 text-secondary"></i></a>UIN Maulana Malik Ibrahim
                        Malang</small>
                    <small class="me-3 text-white-50"><a href="#"><i
                                class="fas fa-envelope me-2 text-secondary"></i></a>LK21-2.0@gmail.com</small>
                </div>
                <div class="top-link d-flex align-items-center">
                    <div class="search-container mx-2">
                        <div class="input-group">
                            <input type="text" class="form-control" placeholder="Cari film"
                                style="background-color: white; color: black; border: none;">
                            <button class="btn btn-light" type="button">
                                <i class="fas fa-search text-danger"></i>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Topbar End -->

    <!-- Navbar Start -->
    <div class="container-fluid bg-primary">
        <div class="container">
            <nav class="navbar navbar-dark navbar-expand-lg py-0">
                <a href="index.html" class="navbar-brand">
                    <h1 class="text-white fw-bold d-block">LAYARKACA<span class="text-secondary">21 2.0</span> </h1>
                </a>
                <button type="button" class="navbar-toggler me-0" data-bs-toggle="collapse"
                    data-bs-target="#navbarCollapse">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse bg-transparent" id="navbarCollapse">
                    <div class="navbar-nav ms-auto mx-xl-auto p-0">
                        <a href="index.html" class="nav-item nav-link active text-secondary">Home</a>
                        <a href="view/view_movie.html" class="nav-item nav-link">Movies</a>
                        <a href="view/view_terbaru.html" class="nav-item nav-link">New</a>
                        <a href="view/view_series.html" class="nav-item nav-link">Series</a>
                        <div class="nav-item dropdown">
                            <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Genre</a>
                            <div class="dropdown-menu rounded">
                                <a href="view_drama.html" class="dropdown-item">Drama</a>
                                <a href="view_scifi.html" class="dropdown-item">Sci-fi</a>
                                <a href="view_action" class="dropdown-item">Action</a>
                                <a href="view_anime" class="dropdown-item">Anime</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="d-none d-xl-flex flex-shirink-0">
                    <div id="phone-tada" class="d-flex align-items-center justify-content-center me-4">
                        <a href="" class="position-relative animated tada infinite">
                            <i class="fa fa-phone-alt text-white fa-2x"></i>
                            <div class="position-absolute" style="top: -7px; left: 20px;">
                                <span><i class="fa fa-comment-dots text-secondary"></i></span>
                            </div>
                        </a>
                    </div>
                    <div class="d-flex flex-column pe-4 border-end">
                        <span class="text-white-50">Have any questions?</span>
                        <span class="text-secondary">Call: + 0123 456 7890</span>
                    </div>
                    <div class="d-flex align-items-center justify-content-center ms-4 ">
                        <a href="#"><i class="bi bi-search text-white fa-2x"></i> </a>
                    </div>
                </div>
            </nav>
        </div>
    </div>
    <!-- Navbar End -->

    <!-- Carousel Start -->
    <div class="container-fluid px-0">
        <div id="carouselId" class="carousel slide" data-bs-ride="carousel">
            <ol class="carousel-indicators">
                <li data-bs-target="#carouselId" data-bs-slide-to="0" class="active" aria-current="true"
                    aria-label="First slide"></li>
                <li data-bs-target="#carouselId" data-bs-slide-to="1" aria-label="Second slide"></li>
                <li data-bs-target="#carouselId" data-bs-slide-to="2" aria-label="Third slide"></li>
                <li data-bs-target="#carouselId" data-bs-slide-to="3" aria-label="Fourth slide"></li>
            </ol>
            <div class="carousel-inner" role="listbox">
                <div class="carousel-item active">
                    <img src="img/Pic1.jpg" class="img-fluid" alt="First slide">
                    <div class="carousel-caption">
                        <div class="container carousel-content">
                            <h6 class="text-secondary h4 animated fadeInUp">Best Movie Site</h6>
                            <h1 class="text-white display-1 mb-4 animated fadeInRight">An Innovative Movie Site</h1>
                            <p class="mb-4 text-white fs-5 animated fadeInDown">We are presenting our best choosen
                                movies that ever existed!</p>
                            <a href="" class="me-2"><button type="button"
                                    class="px-4 py-sm-3 px-sm-5 btn btn-primary rounded-pill carousel-content-btn1 animated fadeInLeft">Read
                                    More</button></a>
                            <a href="" class="ms-2"><button type="button"
                                    class="px-4 py-sm-3 px-sm-5 btn btn-primary rounded-pill carousel-content-btn2 animated fadeInRight">Contact
                                    Us</button></a>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="img/Pic3.jpg" class="img-fluid" alt="Second slide">
                    <div class="carousel-caption">
                        <div class="container carousel-content">
                            <h6 class="text-secondary h4 animated fadeInUp">Best Movie Site</h6>
                            <h1 class="text-white display-1 mb-4 animated fadeInLeft">Quality Movie Sites You Really
                                Need!</h1>
                            <p class="mb-4 text-white fs-5 animated fadeInDown">With our site, you can watch our choosen
                                movies as you like with good quality!</p>
                            <a href="" class="me-2"><button type="button"
                                    class="px-4 py-sm-3 px-sm-5 btn btn-primary rounded-pill carousel-content-btn1 animated fadeInLeft">Read
                                    More</button></a>
                            <a href="" class="ms-2"><button type="button"
                                    class="px-4 py-sm-3 px-sm-5 btn btn-primary rounded-pill carousel-content-btn2 animated fadeInRight">Contact
                                    Us</button></a>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="img/Pic4.jpg" class="img-fluid" alt="Third slide">
                    <div class="carousel-caption">
                        <div class="container carousel-content">
                            <h6 class="text-secondary h4 animated fadeInUp">Best Movie Site</h6>
                            <h1 class="text-white display-1 mb-4 animated fadeInLeft">Free Movie Sites
                                Ever!</h1>
                            <p class="mb-4 text-white fs-5 animated fadeInDown">You can watch our choosen
                                movies as you like whenever you want for free!</p>
                            <a href="" class="me-2"><button type="button"
                                    class="px-4 py-sm-3 px-sm-5 btn btn-primary rounded-pill carousel-content-btn1 animated fadeInLeft">Read
                                    More</button></a>
                            <a href="" class="ms-2"><button type="button"
                                    class="px-4 py-sm-3 px-sm-5 btn btn-primary rounded-pill carousel-content-btn2 animated fadeInRight">Contact
                                    Us</button></a>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="img/Pic6.jpg" class="img-fluid" alt="Fourth slide">
                    <div class="carousel-caption">
                        <div class="container carousel-content">
                            <h6 class="text-secondary h4 animated fadeInUp">Best Movie Site</h6>
                            <h1 class="text-white display-1 mb-4 animated fadeInLeft">Popular Movie Sites
                                Ever!</h1>
                            <p class="mb-4 text-white fs-5 animated fadeInDown">We always updated our sites with the
                                popular movies ever!</p>
                            <a href="" class="me-2"><button type="button"
                                    class="px-4 py-sm-3 px-sm-5 btn btn-primary rounded-pill carousel-content-btn1 animated fadeInLeft">Read
                                    More</button></a>
                            <a href="" class="ms-2"><button type="button"
                                    class="px-4 py-sm-3 px-sm-5 btn btn-primary rounded-pill carousel-content-btn2 animated fadeInRight">Contact
                                    Us</button></a>
                        </div>
                    </div>
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselId" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselId" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </div>
    <!-- Carousel End -->

    <!-- Movie Content Start -->
    <div class="container-fluid py-5">
        <div class="container">
            <!-- Movie Slider -->
            <div class="position-relative">
                <div class="owl-carousel movie-carousel" id="movie-carousel">
                    <!-- Movie Item 1 -->
                    <div class="movie-item position-relative">
                        <img src="img/the.jpeg" class="img-fluid" alt="Movie">
                        <div class="overlay">
                            <div class="rating">
                                <i class="fas fa-star text-warning"></i>
                                <span class="text-white">5.2</span>
                            </div>
                            <div class="quality">HD</div>
                            <div class="movie-info">
                                <center>
                                    <h5 class="text-white">The Walking Dead (2010)</h5>
                                </center>
                            </div>
                        </div>
                    </div>
                    <!-- Movie Item 2 -->
                    <div class="movie-item position-relative">
                        <img src="img/endgame.jpg" class="img-fluid" alt="Movie">
                        <div class="overlay">
                            <div class="rating">
                                <i class="fas fa-star text-warning"></i>
                                <span class="text-white">7.8</span>
                            </div>
                            <div class="quality">4K</div>
                            <div class="movie-info">
                                <center>
                                    <h5 class="text-white">Avengers: Endgame (2019)</h5>
                                </center>
                            </div>
                        </div>
                    </div>
                    <!-- Movie Item 3 -->
                    <div class="movie-item position-relative">
                        <img src="img/Lucy.jpeg" class="img-fluid" alt="Movie">
                        <div class="overlay">
                            <div class="rating">
                                <i class="fas fa-star text-warning"></i>
                                <span class="text-white">6.5</span>
                            </div>
                            <div class="quality">HD</div>
                            <div class="movie-info">
                                <center>
                                    <h5 class="text-white">Lucifer (2016)</h5>
                                </center>
                            </div>
                        </div>
                    </div>
                    <!-- Movie Item 4 -->
                    <div class="movie-item position-relative">
                        <img src="img/constantine.jpeg" class="img-fluid" alt="Movie">
                        <div class="overlay">
                            <div class="rating">
                                <i class="fas fa-star text-warning"></i>
                                <span class="text-white">8.1</span>
                            </div>
                            <div class="quality">HD</div>
                            <div class="movie-info">
                                <center>
                                    <h5 class="text-white">Constantine (2005)</h5>
                                </center>
                            </div>
                        </div>
                    </div>
                    <!-- Movie Item 5 -->
                    <div class="movie-item position-relative">
                        <img src="img/bad.jpeg" class="img-fluid" alt="Movie">
                        <div class="overlay">
                            <div class="rating">
                                <i class="fas fa-star text-warning"></i>
                                <span class="text-white">9.0</span>
                            </div>
                            <div class="quality">4K</div>
                            <div class="movie-info">
                                <center>
                                    <h5 class="text-white">Breaking Bad (2008)</h5>
                                </center>
                            </div>
                        </div>
                    </div>
                    <!-- Movie Item 6 -->
                    <div class="movie-item position-relative">
                        <img src="img/ded.jpg" class="img-fluid" alt="Movie">
                        <div class="overlay">
                            <div class="rating">
                                <i class="fas fa-star text-warning"></i>
                                <span class="text-white">7.4</span>
                            </div>
                            <div class="quality">HD</div>
                            <div class="movie-info">
                                <center>
                                    <h5 class="text-white">DeadPool (2016)</h5>
                                </center>
                            </div>
                        </div>
                    </div>
                    <!--Movie Item  7 -->
                    <div class="movie-item position-relative">
                        <img src="img/super.jpg" class="img-fluid" alt="Movie">
                        <div class="overlay">
                            <div class="rating">
                                <i class="fas fa-star text-warning"></i>
                                <span class="text-white">8.4</span>
                            </div>
                            <div class="quality">HD</div>
                            <div class="movie-info">
                                <center>
                                    <h5 class="text-white">Superman (2002)</h5>
                                </center>
                            </div>
                        </div>
                    </div>
                    <!--Movie Item  8 -->
                    <div class="movie-item position-relative">
                        <img src="img/inter.jpeg" class="img-fluid" alt="Movie">
                        <div class="overlay">
                            <div class="rating">
                                <i class="fas fa-star text-warning"></i>
                                <span class="text-white">9.6</span>
                            </div>
                            <div class="quality">HD</div>
                            <div class="movie-info">
                                <center>
                                    <h5 class="text-white">Interstellar (2016)</h5>
                                </center>
                            </div>
                        </div>
                    </div>
                    <!--Movie Item  9 -->
                    <div class="movie-item position-relative">
                        <img src="img/baldwin2.jpeg" class="img-fluid" alt="Movie">
                        <div class="overlay">
                            <div class="rating">
                                <i class="fas fa-star text-warning"></i>
                                <span class="text-white">10</span>
                            </div>
                            <div class="quality">4K</div>
                            <div class="movie-info">
                                <center>
                                    <h5 class="text-white">Kingdom of Heaven (2005)</h5>
                                </center>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Navigation Arrows -->
                <button class="carousel-control-prev" type="button" data-bs-target=".movie-carousel"
                    data-bs-slide="prev">
                    <span class="carousel-control-prev-icon"></span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target=".movie-carousel"
                    data-bs-slide="next">
                    <span class="carousel-control-next-icon"></span>
                </button>
            </div>

            <!-- View All Button -->
            <div class="text-center mt-4">
                <a href="view/view_movie.html"><button class="btn btn-success px-4 py-2">LIHAT SEMUA FILM
                        UNGGULAN</button></a>

            </div>
        </div>
    </div>
    <!-- Movie Content End -->

    <!-- Latest Movies Section Start -->
    <div class="container mt-4">
        <div class="d-flex justify-content-between align-items-center">
            <h3 class="section-title m-0">TERBARU</h3>
            <a href="view/view_terbaru.html" class="btn btn-success px-4">SEMUA</a>
        </div>
        <div class="row">
            <!-- Series Item 1 -->
            <div class="col-md-2 col-6">
                <div class="movie-item position-relative">
                    <img src="img/dead.jpg" alt="Series 1" class="img-fluid rounded movie-image">
                    <!-- Badge Content -->
                    <div
                        class="badge-container position-absolute top-0 start-0 w-100 d-flex justify-content-between px-1 py-2">
                        <span class="badge bg-warning rating">★ 8.2</span>
                        <span class="badge bg-success episodes">EPS 24</span>
                    </div>
                    <!-- Hover Content -->
                    <div
                        class="hover-overlay position-absolute top-0 start-0 w-100 h-100 d-flex flex-column align-items-center justify-content-center">
                        <h6 class="text-white mb-3 text-center">The Walking Dead (2010)</h6>
                        <button class="btn btn-success mb-2">TRAILER</button>
                        <button class="btn btn-warning">SERIES</button>
                    </div>
                </div>
            </div>
            <!-- Series Item 2 -->
            <div class="col-md-2 col-6">
                <div class="movie-item position-relative">
                    <img src="img/thanos.jpg" alt="Series 2" class="img-fluid rounded movie-image">
                    <!-- Badge Content -->
                    <div
                        class="badge-container position-absolute top-0 start-0 w-100 d-flex justify-content-between px-1 py-2">
                        <span class="badge bg-warning rating">★ 8.4</span>
                        <span class="badge bg-success episodes">MOVIE</span>
                    </div>
                    <!-- Hover Content -->
                    <div
                        class="hover-overlay position-absolute top-0 start-0 w-100 h-100 d-flex flex-column align-items-center justify-content-center">
                        <h6 class="text-white mb-3 text-center">Avengers: Infinity War (2018)</h6>
                        <button class="btn btn-success mb-2">TRAILER</button>
                        <button class="btn btn-warning">WATCH</button>
                    </div>
                </div>
            </div>
            <!-- Series Item 3 -->
            <div class="col-md-2 col-6">
                <div class="movie-item">
                    <img src="img/batman.jpg" alt="Series 3" class="img-fluid rounded movie-image">
                    <!-- Badge Content -->
                    <div
                        class="badge-container position-absolute top-0 start-0 w-100 d-flex justify-content-between px-1 py-2">
                        <span class="badge bg-warning rating">★ 9.0</span>
                        <span class="badge bg-success episodes">MOVIE</span>
                    </div>
                    <!-- Hover Content -->
                    <div
                        class="hover-overlay position-absolute top-0 start-0 w-100 h-100 d-flex flex-column align-items-center justify-content-center">
                        <h6 class="text-white mb-3 text-center">The Dark Knight (2012)</h6>
                        <button class="btn btn-success mb-2">TRAILER</button>
                        <button class="btn btn-warning">WATCH</button>
                    </div>
                </div>
            </div>
            <!-- Series Item 4 -->
            <div class="col-md-2 col-6">
                <div class="movie-item">
                    <img src="img/john.jpg" alt="Series 4" class="img-fluid rounded movie-image">
                    <!-- Badge Content -->
                    <div
                        class="badge-container position-absolute top-0 start-0 w-100 d-flex justify-content-between px-1 py-2">
                        <span class="badge bg-warning rating">★ 8.2</span>
                        <span class="badge bg-success episodes">MOVIE</span>
                    </div>
                    <!-- Hover Content -->
                    <div
                        class="hover-overlay position-absolute top-0 start-0 w-100 h-100 d-flex flex-column align-items-center justify-content-center">
                        <h6 class="text-white mb-3 text-center">John Wick: Chapter 4 (2023)</h6>
                        <button class="btn btn-success mb-2">TRAILER</button>
                        <button class="btn btn-warning">WATCH</button>
                    </div>
                </div>
            </div>
            <!-- Series Item 5 -->
            <div class="col-md-2 col-6">
                <div class="movie-item">
                    <img src="img/jessie.jpeg" alt="Series 5" class="img-fluid rounded movie-image">
                    <!-- Badge Content -->
                    <div
                        class="badge-container position-absolute top-0 start-0 w-100 d-flex justify-content-between px-1 py-2">
                        <span class="badge bg-warning rating">★ 9.5</span>
                        <span class="badge bg-success episodes">EPS 18</span>
                    </div>
                    <!-- Hover Content -->
                    <div
                        class="hover-overlay position-absolute top-0 start-0 w-100 h-100 d-flex flex-column align-items-center justify-content-center">
                        <h6 class="text-white mb-3 text-center">Breaking Bad (2008)</h6>
                        <button class="btn btn-success mb-2">TRAILER</button>
                        <button class="btn btn-warning">SERIES</button>
                    </div>
                </div>
            </div>
            <!-- Series Item 6 -->
            <div class="col-md-2 col-6">
                <div class="movie-item">
                    <img src="img/pool.jpeg" alt="Series 6" class="img-fluid rounded movie-image">
                    <!-- Badge Content -->
                    <div
                        class="badge-container position-absolute top-0 start-0 w-100 d-flex justify-content-between px-1 py-2">
                        <span class="badge bg-warning rating">★ 8.0</span>
                        <span class="badge bg-success episodes">MOVIE</span>
                    </div>
                    <!-- Hover Content -->
                    <div
                        class="hover-overlay position-absolute top-0 start-0 w-100 h-100 d-flex flex-column align-items-center justify-content-center">
                        <h6 class="text-white mb-3 text-center">DeadPool (2016)</h6>
                        <button class="btn btn-success mb-2">TRAILER</button>
                        <button class="btn btn-warning">WATCH</button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Featured Drama Section Start -->
    <div class="container mt-4">
        <div class="d-flex justify-content-between align-items-center">
            <h3 class="section-title m-0">DRAMA UNGGULAN</h3>
            <a href="view/view_drama.html" class="btn btn-success px-4">SEMUA</a>
        </div>
        <div class="row">
            <!-- Series Item 1 -->
            <div class="col-md-2 col-6">
                <div class="movie-item position-relative">
                    <img src="img/dead.jpg" alt="Series 1" class="img-fluid rounded movie-image">
                    <!-- Badge Content -->
                    <div
                        class="badge-container position-absolute top-0 start-0 w-100 d-flex justify-content-between px-1 py-2">
                        <span class="badge bg-warning rating">★ 8.2</span>
                        <span class="badge bg-success episodes">EPS 24</span>
                    </div>
                    <!-- Hover Content -->
                    <div
                        class="hover-overlay position-absolute top-0 start-0 w-100 h-100 d-flex flex-column align-items-center justify-content-center">
                        <h6 class="text-white mb-3 text-center">The Walking Dead (2010)</h6>
                        <button class="btn btn-success mb-2">TRAILER</button>
                        <button class="btn btn-warning">SERIES</button>
                    </div>
                </div>
            </div>
            <!-- Series Item 2 -->
            <div class="col-md-2 col-6">
                <div class="movie-item position-relative">
                    <img src="img/thanos.jpg" alt="Series 2" class="img-fluid rounded movie-image">
                    <!-- Badge Content -->
                    <div
                        class="badge-container position-absolute top-0 start-0 w-100 d-flex justify-content-between px-1 py-2">
                        <span class="badge bg-warning rating">★ 8.4</span>
                        <span class="badge bg-success episodes">MOVIE</span>
                    </div>
                    <!-- Hover Content -->
                    <div
                        class="hover-overlay position-absolute top-0 start-0 w-100 h-100 d-flex flex-column align-items-center justify-content-center">
                        <h6 class="text-white mb-3 text-center">Avengers: Infinity War (2018)</h6>
                        <button class="btn btn-success mb-2">TRAILER</button>
                        <button class="btn btn-warning">WATCH</button>
                    </div>
                </div>
            </div>
            <!-- Series Item 3 -->
            <div class="col-md-2 col-6">
                <div class="movie-item">
                    <img src="img/batman.jpg" alt="Series 3" class="img-fluid rounded movie-image">
                    <!-- Badge Content -->
                    <div
                        class="badge-container position-absolute top-0 start-0 w-100 d-flex justify-content-between px-1 py-2">
                        <span class="badge bg-warning rating">★ 9.0</span>
                        <span class="badge bg-success episodes">MOVIE</span>
                    </div>
                    <!-- Hover Content -->
                    <div
                        class="hover-overlay position-absolute top-0 start-0 w-100 h-100 d-flex flex-column align-items-center justify-content-center">
                        <h6 class="text-white mb-3 text-center">The Dark Knight (2012)</h6>
                        <button class="btn btn-success mb-2">TRAILER</button>
                        <button class="btn btn-warning">WATCH</button>
                    </div>
                </div>
            </div>
            <!-- Series Item 4 -->
            <div class="col-md-2 col-6">
                <div class="movie-item">
                    <img src="img/john.jpg" alt="Series 4" class="img-fluid rounded movie-image">
                    <!-- Badge Content -->
                    <div
                        class="badge-container position-absolute top-0 start-0 w-100 d-flex justify-content-between px-1 py-2">
                        <span class="badge bg-warning rating">★ 8.2</span>
                        <span class="badge bg-success episodes">MOVIE</span>
                    </div>
                    <!-- Hover Content -->
                    <div
                        class="hover-overlay position-absolute top-0 start-0 w-100 h-100 d-flex flex-column align-items-center justify-content-center">
                        <h6 class="text-white mb-3 text-center">John Wick: Chapter 4 (2023)</h6>
                        <button class="btn btn-success mb-2">TRAILER</button>
                        <button class="btn btn-warning">WATCH</button>
                    </div>
                </div>
            </div>
            <!-- Series Item 5 -->
            <div class="col-md-2 col-6">
                <div class="movie-item">
                    <img src="img/jessie.jpeg" alt="Series 5" class="img-fluid rounded movie-image">
                    <!-- Badge Content -->
                    <div
                        class="badge-container position-absolute top-0 start-0 w-100 d-flex justify-content-between px-1 py-2">
                        <span class="badge bg-warning rating">★ 9.5</span>
                        <span class="badge bg-success episodes">EPS 18</span>
                    </div>
                    <!-- Hover Content -->
                    <div
                        class="hover-overlay position-absolute top-0 start-0 w-100 h-100 d-flex flex-column align-items-center justify-content-center">
                        <h6 class="text-white mb-3 text-center">Breaking Bad (2008)</h6>
                        <button class="btn btn-success mb-2">TRAILER</button>
                        <button class="btn btn-warning">SERIES</button>
                    </div>
                </div>
            </div>
            <!-- Series Item 6 -->
            <div class="col-md-2 col-6">
                <div class="movie-item">
                    <img src="img/pool.jpeg" alt="Series 6" class="img-fluid rounded movie-image">
                    <!-- Badge Content -->
                    <div
                        class="badge-container position-absolute top-0 start-0 w-100 d-flex justify-content-between px-1 py-2">
                        <span class="badge bg-warning rating">★ 8.0</span>
                        <span class="badge bg-success episodes">MOVIE</span>
                    </div>
                    <!-- Hover Content -->
                    <div
                        class="hover-overlay position-absolute top-0 start-0 w-100 h-100 d-flex flex-column align-items-center justify-content-center">
                        <h6 class="text-white mb-3 text-center">DeadPool (2016)</h6>
                        <button class="btn btn-success mb-2">TRAILER</button>
                        <button class="btn btn-warning">WATCH</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Featured Drama Section End -->

    <!-- New Series Section Start -->
    <div class="container mt-4">
        <div class="d-flex justify-content-between align-items-center">
            <h3 class="section-title m-0">SERIES BARU</h3>
            <a href="view/view_series.html" class="btn btn-success px-4">SEMUA</a>
        </div>
        <div class="row">
            <!-- Series Item 1 -->
            <div class="col-md-2 col-6">
                <div class="movie-item position-relative">
                    <img src="img/dead.jpg" alt="Series 1" class="img-fluid rounded movie-image">
                    <!-- Badge Content -->
                    <div
                        class="badge-container position-absolute top-0 start-0 w-100 d-flex justify-content-between px-1 py-2">
                        <span class="badge bg-warning rating">★ 8.2</span>
                        <span class="badge bg-success episodes">EPS 24</span>
                    </div>
                    <!-- Hover Content -->
                    <div
                        class="hover-overlay position-absolute top-0 start-0 w-100 h-100 d-flex flex-column align-items-center justify-content-center">
                        <h6 class="text-white mb-3 text-center">The Walking Dead (2010)</h6>
                        <button class="btn btn-success mb-2">TRAILER</button>
                        <button class="btn btn-warning">SERIES</button>
                    </div>
                </div>
            </div>
            <!-- Series Item 2 -->
            <div class="col-md-2 col-6">
                <div class="movie-item position-relative">
                    <img src="img/thanos.jpg" alt="Series 2" class="img-fluid rounded movie-image">
                    <!-- Badge Content -->
                    <div
                        class="badge-container position-absolute top-0 start-0 w-100 d-flex justify-content-between px-1 py-2">
                        <span class="badge bg-warning rating">★ 8.4</span>
                        <span class="badge bg-success episodes">MOVIE</span>
                    </div>
                    <!-- Hover Content -->
                    <div
                        class="hover-overlay position-absolute top-0 start-0 w-100 h-100 d-flex flex-column align-items-center justify-content-center">
                        <h6 class="text-white mb-3 text-center">Avengers: Infinity War (2018)</h6>
                        <button class="btn btn-success mb-2">TRAILER</button>
                        <button class="btn btn-warning">WATCH</button>
                    </div>
                </div>
            </div>
            <!-- Series Item 3 -->
            <div class="col-md-2 col-6">
                <div class="movie-item">
                    <img src="img/batman.jpg" alt="Series 3" class="img-fluid rounded movie-image">
                    <!-- Badge Content -->
                    <div
                        class="badge-container position-absolute top-0 start-0 w-100 d-flex justify-content-between px-1 py-2">
                        <span class="badge bg-warning rating">★ 9.0</span>
                        <span class="badge bg-success episodes">MOVIE</span>
                    </div>
                    <!-- Hover Content -->
                    <div
                        class="hover-overlay position-absolute top-0 start-0 w-100 h-100 d-flex flex-column align-items-center justify-content-center">
                        <h6 class="text-white mb-3 text-center">The Dark Knight (2012)</h6>
                        <button class="btn btn-success mb-2">TRAILER</button>
                        <button class="btn btn-warning">WATCH</button>
                    </div>
                </div>
            </div>
            <!-- Series Item 4 -->
            <div class="col-md-2 col-6">
                <div class="movie-item">
                    <img src="img/john.jpg" alt="Series 4" class="img-fluid rounded movie-image">
                    <!-- Badge Content -->
                    <div
                        class="badge-container position-absolute top-0 start-0 w-100 d-flex justify-content-between px-1 py-2">
                        <span class="badge bg-warning rating">★ 8.2</span>
                        <span class="badge bg-success episodes">MOVIE</span>
                    </div>
                    <!-- Hover Content -->
                    <div
                        class="hover-overlay position-absolute top-0 start-0 w-100 h-100 d-flex flex-column align-items-center justify-content-center">
                        <h6 class="text-white mb-3 text-center">John Wick: Chapter 4 (2023)</h6>
                        <button class="btn btn-success mb-2">TRAILER</button>
                        <button class="btn btn-warning">WATCH</button>
                    </div>
                </div>
            </div>
            <!-- Series Item 5 -->
            <div class="col-md-2 col-6">
                <div class="movie-item">
                    <img src="img/jessie.jpeg" alt="Series 5" class="img-fluid rounded movie-image">
                    <!-- Badge Content -->
                    <div
                        class="badge-container position-absolute top-0 start-0 w-100 d-flex justify-content-between px-1 py-2">
                        <span class="badge bg-warning rating">★ 9.5</span>
                        <span class="badge bg-success episodes">EPS 18</span>
                    </div>
                    <!-- Hover Content -->
                    <div
                        class="hover-overlay position-absolute top-0 start-0 w-100 h-100 d-flex flex-column align-items-center justify-content-center">
                        <h6 class="text-white mb-3 text-center">Breaking Bad (2008)</h6>
                        <button class="btn btn-success mb-2">TRAILER</button>
                        <button class="btn btn-warning">SERIES</button>
                    </div>
                </div>
            </div>
            <!-- Series Item 6 -->
            <div class="col-md-2 col-6">
                <div class="movie-item">
                    <img src="img/pool.jpeg" alt="Series 6" class="img-fluid rounded movie-image">
                    <!-- Badge Content -->
                    <div
                        class="badge-container position-absolute top-0 start-0 w-100 d-flex justify-content-between px-1 py-2">
                        <span class="badge bg-warning rating">★ 8.0</span>
                        <span class="badge bg-success episodes">MOVIE</span>
                    </div>
                    <!-- Hover Content -->
                    <div
                        class="hover-overlay position-absolute top-0 start-0 w-100 h-100 d-flex flex-column align-items-center justify-content-center">
                        <h6 class="text-white mb-3 text-center">DeadPool (2016)</h6>
                        <button class="btn btn-success mb-2">TRAILER</button>
                        <button class="btn btn-warning">WATCH</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- New Series Section End -->

    <!-- Footer Start -->
    <div class="container-fluid footer bg-dark wow fadeIn" data-wow-delay=".3s">
        <div class="container pt-5 pb-4">
            <div class="row g-5">
                <div class="col-lg-3 col-md-6">
                    <a href="index.html">
                        <h1 class="text-white fw-bold d-block">LAYARKACA<span class="text-secondary">21 2.0</span> </h1>
                    </a>
                    <p class="mt-4 text-light">Free movies for everyone!</p>
                    <div class="d-flex hightech-link">
                        <a href="" class="btn-light nav-fill btn btn-square rounded-circle me-2"><i
                                class="fab fa-facebook-f text-primary"></i></a>
                        <a href="" class="btn-light nav-fill btn btn-square rounded-circle me-2"><i
                                class="fab fa-twitter text-primary"></i></a>
                        <a href="" class="btn-light nav-fill btn btn-square rounded-circle me-2"><i
                                class="fab fa-instagram text-primary"></i></a>
                        <a href="" class="btn-light nav-fill btn btn-square rounded-circle me-0"><i
                                class="fab fa-linkedin-in text-primary"></i></a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <a href="#" class="h3 text-secondary">Short Link</a>
                    <div class="mt-4 d-flex flex-column short-link">
                        <a href="view/view_movie.html" class="mb-2 text-white">
                            <i class="fas fa-angle-right text-secondary me-2"></i>Movie us
                        </a>
                        <a href="view/view_terbaru.html" class="mb-2 text-white">
                            <i class="fas fa-angle-right text-secondary me-2"></i>New us
                        </a>
                        <a href="view/view_series.html" class="mb-2 text-white">
                            <i class="fas fa-angle-right text-secondary me-2"></i>Series
                        </a>
                        <div class="nav-item dropdown">
                            <a href="#" class="nav-link dropdown-toggle text-white" data-bs-toggle="dropdown">
                                <i class="fas fa-angle-right text-secondary me-2"></i>Genre
                            </a>
                            <div class="dropdown-menu rounded">
                                <a href="view/view_drama.html" class="dropdown-item">Drama</a>
                                <a href="view/view_scifi.html" class="dropdown-item">Sci-fi</a>
                                <a href="view/view_action.html" class="dropdown-item">Action</a>
                                <a href="view/view_anime.html" class="dropdown-item">Anime</a>
                            </div>
                        </div>
                        <a href="team.html" class="mb-2 text-white">
                            <i class="fas fa-angle-right text-secondary me-2"></i>Our Team
                        </a>
                    </div>
                </div>
                                 
                <div class="col-lg-3 col-md-6">
                    <a href="#" class="h3 text-secondary">Help Link</a>
                    <div class="mt-4 d-flex flex-column help-link">
                        <a href="" class="mb-2 text-white"><i class="fas fa-angle-right text-secondary me-2"></i>Terms
                            Of use</a>
                        <a href="" class="mb-2 text-white"><i class="fas fa-angle-right text-secondary me-2"></i>Privacy
                            Policy</a>
                        <a href="" class="mb-2 text-white"><i
                                class="fas fa-angle-right text-secondary me-2"></i>Helps</a>
                        <a href="team.html" class="mb-2 text-white"><i
                                class="fas fa-angle-right text-secondary me-2"></i>Contact</a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <a href="#" class="h3 text-secondary">Contact Us</a>
                    <div class="text-white mt-4 d-flex flex-column contact-link">
                        <a href="https://uin-malang.ac.id/" class="pb-3 text-light border-bottom border-primary"><i
                                class="fas fa-map-marker-alt text-secondary me-2"></i> UIN Maulana Malik Ibrahim
                            Malang</a>
                        <a href="#" class="py-3 text-light border-bottom border-primary"><i
                                class="fas fa-phone-alt text-secondary me-2"></i> +123 456 7890</a>
                        <a href="#" class="py-3 text-light border-bottom border-primary"><i
                                class="fas fa-envelope text-secondary me-2"></i> LK21-2.0@gmail.com</a>
                    </div>
                </div>
            </div>
            <hr class="text-light mt-5 mb-4">
            <div class="row">
                <div class="col-md-6 text-center text-md-start">
                    <span class="text-light"><a href="#" class="text-secondary"><i
                                class="fas fa-copyright text-secondary me-2"></i>LK21 2.0 : Bisney Movie</a>, All right
                        reserved.</span>
                </div>
                <div class="col-md-6 text-center text-md-end">
                    <!--/*** This template is free as long as you keep the footer author’s credit link/attribution link/backlink. If you'd like to use the template without the footer author’s credit link/attribution link/backlink, you can purchase the Credit Removal License from "https://htmlcodex.com/credit-removal". Thank you for your support. ***/-->
                    <span class="text-light">Designed By<a href="https://htmlcodex.com" class="text-secondary">HTML
                            Codex</a> Distributed By <a href="https://themewagon.com">ThemeWagon</a></span>
                </div>
            </div>
        </div>
    </div>
    <!-- Footer End -->
    <!-- Back to Top -->
    <a href="index.html" class="btn btn-secondary btn-square rounded-circle back-to-top"><i
            class="fa fa-arrow-up text-white"></i></a>


    <!-- JavaScript Libraries -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="lib/wow/wow.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>

    <script src="js/func.js"></script>
</body>

</html>