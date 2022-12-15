<?php
    require("./koneksi.php");
    if(empty($_SESSION['username'])){
        // header("Location:error.php");
        echo "gagal";
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TukNews</title>
    <link rel="stylesheet" href="./attributes/css/style.css">
    <script src="https://kit.fontawesome.com/e06601f356.js" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>
<body>
    <!-- navbar start -->
    <header id="navbar">
        <div class="namee">
            <h1 id="first-name">Tuk</h1>
            <h1 id="last-name">News</h1>
        </div>
        <nav class="dropdown">
            <div id="menu">
                <a class="btn btn-secondary" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    <?= $_SESSION['username']; ?>
                </a>
                <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="#">Logout</a></li>
                </ul>
            </div>
        </nav>
    </header>
    <!-- navbar end -->

    <!-- content start -->
    <div class="container-navbar">
        <div class="container">
            <!-- topic nav start -->
            <div class="header">
                <nav>
                    <a href="">TECHNOLOGY</a>
                    <a href="">ENTERTAINMENT</a>
                    <a href="">SPORT</a>
                    <a href="">LIFESTYLE</a>
                </nav>
            </div>
        </div>
    </div>
        <!-- topic nav end -->
    <!-- news carousel -->
    <div class="carousel-news">
        <div class="container">
            <div id="carouselExampleDark" class="carousel carousel-dark slide" data-bs-ride="carousel">
                <!-- indicator carousel start -->
                <div class="carousel-indicators">
                    <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                    <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="1" aria-label="Slide 2"></button>
                    <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="2" aria-label="Slide 3"></button>
                </div>
                <!-- indicator carousel end -->
                <!-- isi carousel start -->
                <div class="carousel-inner">
                    <!-- hot news 1 -->
                    <div class="carousel-item active" data-bs-interval="5000">
                        <div class="car-img">
                            <img src="./images/sport-1.jfif" class="d-block w-100" alt="">
                        </div>
                        <div class="carousel-caption d-none d-md-block">
                            <h5>First slide label</h5>
                            <p>Some representative placeholder content for the first slide.</p>
                        </div>
                    </div>
                    <!-- hot news 1 end -->
                    <!-- hot news 2 -->
                    <div class="carousel-item" data-bs-interval="5000">
                        <div class="car-img">
                            <img src="./images/sport-2.jfif" class="d-block w-100" alt="">
                        </div>
                        <div class="carousel-caption d-none d-md-block">
                            <h5>Second slide label</h5>
                            <p>Some representative placeholder content for the second slide.</p>
                        </div>
                    </div>
                    <!-- hot news 2 end -->
                    <!-- hot news 3 -->
                    <div class="carousel-item" data-bs-interval="5000">
                        <div class="car-img">
                            <img src="./images/sport-3.jfif" class="d-block w-100" alt="">
                        </div>
                        <div class="carousel-caption d-none d-md-block">
                            <h5>Third slide label</h5>
                            <p>Some representative placeholder content for the third slide.</p>
                        </div>
                    </div>
                    <!-- hot news 3 end -->
                </div>
                <!-- isi carousel end -->
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
        </div>
    </div>
    
    <!-- content end -->
    <!-- footer -->
    <footer>
        <div class="container">
            <p>&copy;2022 TukNews</p>
        </div>
    </footer>
    <script src="./bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="./attributes/js/script.js"></script>
</body>
</html>