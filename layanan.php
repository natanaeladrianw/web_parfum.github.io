<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Layanan - Toko Parfum</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
</head>
<body>
    <header>
        <div class="navbar navbar-layanan">
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
                <h1>Services Of Us</h1>
                <p>Layanan kami dirancang untuk memenuhi kebutuhan Anda dengan kualitas dan kepuasan terbaik.
                    Kami menawarkan berbagai layanan untuk memastikan Anda mendapatkan pengalaman parfum yang optimal.</p>
                <a href="#services" class="btn btn-primary">Cek Service Me</a>
            </div>
        </div>
    </header>

    <div id="services" class="container mt-5">
        <div class="row mt-4">
            <div class="col-md-6 mb-4">
                <div class="card">
                    <img src="konsultasi.jpeg" class="card-img-top" alt="Konsultasi Aroma">
                    <div class="card-body">
                        <h5 class="card-title font-weight-bold">Konsultasi Aroma</h5>
                        <p class="card-text">Tim ahli kami siap membantu Anda menemukan aroma yang sesuai dengan kepribadian dan preferensi Anda, memberikan pengalaman yang personal dan mendalam.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-6 mb-4">
                <div class="card">
                    <img src="pengemasan.jpeg" class="card-img-top" alt="Pengemasan Khusus">
                    <div class="card-body">
                        <h5 class="card-title font-weight-bold">Pengemasan Khusus</h5>
                        <p class="card-text">Kami menawarkan layanan pengemasan khusus untuk setiap produk, memungkinkan Anda memberikan hadiah yang penuh makna dengan kemasan yang menarik dan unik.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-6 mb-4">
                <div class="card">
                    <img src="aksesoris.jpeg" class="card-img-top" alt="Aksesoris Parfum">
                    <div class="card-body">
                        <h5 class="card-title font-weight-bold">Aksesoris Parfum</h5>
                        <p class="card-text">Lengkapi pengalaman parfum Anda dengan berbagai aksesoris yang kami tawarkan, mulai dari botol hingga tas parfum yang elegan.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-6 mb-4">
                <div class="card">
                    <img src="program.jpeg" class="card-img-top" alt="Program Loyalitas">
                    <div class="card-body">
                        <h5 class="card-title font-weight-bold">Program Loyalitas</h5>
                        <p class="card-text">Bergabunglah dengan program loyalitas kami dan nikmati berbagai keuntungan eksklusif, termasuk diskon khusus dan penawaran terbatas.</p>
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
