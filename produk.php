<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Produk - Toko Parfum</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <header>
        <div class="navbar navbar-produk">
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
                    <li><a href="index.php#contact">Contact</a></li>
                </ul>
            </nav>
            <div class="navbar-content">
                <h1>Product Of Us</h1>
                <p>Kami menawarkan berbagai produk parfum yang dirancang untuk memenuhi kebutuhan Anda dengan kualitas dan kepuasan terbaik.
                    Kami menawarkan berbagai produk untuk memastikan Anda mendapatkan pengalaman parfum yang optimal.</p>
                <a href="#products" class="btn btn-primary">Cek Product Me</a>
            </div>
        </div>
    </header>

    <div id="products" class="container mt-5">
        <div class="row">
            <div class="col-md-4">
                <div class="card">
                    <img src="img/zara_blackamber.jpg" class="card-img-top" alt="Zara Black Amber">
                    <div class="card-body">
                        <h5 class="card-title">Zara Black Amber</h5>
                        <p class="card-text">Deskripsi singkat produk...</p>
                        <a href="detail_produk.php?product=blackamber" class="btn btn-primary">Read Detail Produk</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <img src="zara_cities.jpg" class="card-img-top" alt="Zara Cities">
                    <div class="card-body">
                        <h5 class="card-title">Zara Cities</h5>
                        <p class="card-text">Deskripsi singkat produk...</p>
                        <a href="detail_produk.php?product=cities" class="btn btn-primary">Read Detail Produk</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <img src="zara_fesyen.jpg" class="card-img-top" alt="Zara Fesyen">
                    <div class="card-body">
                        <h5 class="card-title">Zara Fesyen</h5>
                        <p class="card-text">Deskripsi singkat produk...</p>
                        <a href="detail_produk.php?product=fesyen" class="btn btn-primary">Read Detail Produk</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mt-4">
                <div class="card">
                    <img src="zara_night.jpg" class="card-img-top" alt="Zara Night">
                    <div class="card-body">
                        <h5 class="card-title">Zara Night</h5>
                        <p class="card-text">Deskripsi singkat produk...</p>
                        <a href="detail_produk.php?product=night" class="btn btn-primary">Read Detail Produk</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <button class="scroll-top-btn" onclick="scrollToTop()">▲</button>
    
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
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

        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function(e) {
                e.preventDefault();
                document.querySelector(this.getAttribute('href')).scrollIntoView({
                    behavior: 'smooth'
                });
            });
        });
    </script>
</body>
</html>
