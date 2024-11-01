<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Toko Parfum</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
</head>
<body>
    <header>
        <div class="navbar">
            <div class="logo">
            <a href="index.php">
                    <img src="logo_zara.jpg" alt="Logo Parfum" class="logo-img">
                </a>
            </div>
            <nav>
                <ul>
                    <li><a href="index.php">Home</a></li>
                    <li><a href="about.php">About</a></li>
                    <li><a href="layanan.php">Service</a></li>
                    <li><a href="produk.php">Product</a></li>
                    <li><a href="#contact">Contact</a></li>
                </ul>
            </nav>
            <div class="navbar-content">
                <h1>Aroma Unik untuk Setiap Pribadi</h1>
                <p>Temukan koleksi parfum yang memikat, dirancang untuk memperkuat kepribadian dan menawan setiap momen dalam hidup Anda.</p>
                <a href="produk.php" class="btn btn-primary">Cek Produk Kami</a>
            </div>
        </div>
    </header>

    <section id="home" class="hero">
        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel" data-interval="5000">
            <ol class="carousel-indicators">
                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
            </ol>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="beranda1.png" class="d-block w-100" alt="Zara Cities">
                </div>
                <div class="carousel-item">
                    <img src="beranda2.jpg" class="d-block w-100" alt="Zara Black Amber">
                </div>
                <div class="carousel-item">
                    <img src="beranda3.jpg" class="d-block w-100" alt="Zara Fesyen">
                </div>
                <div class="carousel-item">
                    <img src="beranda4.jpg" class="d-block w-100" alt="Zara Night">
                </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </section>

    <section class="best-seller mt-5">
        <div class="container">
            <h2 class="text-center font-weight-bold">Best Seller Produk</h2>
            <div class="row mt-4">
                <div class="col-md-4">
                    <div class="card">
                        <img src="zara_blackamber.jpg" class="card-img-top" alt="Zara Black Amber">
                        <div class="card-body">
                            <h5 class="card-title">Zara Black Amber</h5>
                            <p class="card-text">Aroma: Oriental, Vanilla</p>
                            <p class="card-text">Penjualan: 5000+ unit</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card">
                        <img src="zara_cities.jpg" class="card-img-top" alt="Zara Cities">
                        <div class="card-body">
                            <h5 class="card-title">Zara Cities</h5>
                            <p class="card-text">Aroma: Floral, Fresh</p>
                            <p class="card-text">Penjualan: 4500+ unit</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card">
                        <img src="zara_fesyen.jpg" class="card-img-top" alt="Zara Fesyen">
                        <div class="card-body">
                            <h5 class="card-title">Zara Fesyen</h5>
                            <p class="card-text">Aroma: Woody, Spicy</p>
                            <p class="card-text">Penjualan: 4800+ unit</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="contact" class="contact mt-5">
        <div class="container">
            <h2 class="text-center font-weight-bold">Hubungi Kami</h2>
            <div class="row text-center mt-4">
                <div class="col-md-4">
                    <i class="fas fa-phone fa-2x"></i>
                    <h5>TELEPON</h5>
                    <p>+6281932983039</p>
                </div>
                <div class="col-md-4">
                    <i class="fas fa-map-marker-alt fa-2x"></i>
                    <h5>ALAMAT</h5>
                    <p>Jalan Merpati 6 M-5 Pabean, Sedati, Sidoarjo, Jawa Timur</p>
                </div>
                <div class="col-md-4">
                    <i class="fas fa-envelope fa-2x"></i>
                    <h5>EMAIL</h5>
                    <p>farsyaakbar@gmail.com</p>
                </div>
            </div>
        </div>
    </section>
    <button class="scroll-top-btn" onclick="scrollToTop()">▲</button>

    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="https://kit.fontawesome.com/a076d05399.js"></script> <!-- Font Awesome -->
    <script>
        function scrollToTop() {
            window.scrollTo({ top: 0, behavior: 'smooth' });
        }

        window.addEventListener('scroll', function() {
            const scrollButton = document.querySelector('.scroll-top-btn');
            if (window.scrollY > 200) {
                scrollButton.style.display = 'block';
            } else {
                scrollButton.style.display = 'none';
            }
        });

        $(document).ready(function(){
            $('a[href^="#"]').on('click', function(event) {
                var target = $(this.getAttribute('href'));
                if( target.length ) {
                    event.preventDefault();
                    $('html, body').stop().animate({
                        scrollTop: target.offset().top - $('.navbar').outerHeight()
                    }, 1000);
                }
            });
        });
    </script>
</body>
</html>
