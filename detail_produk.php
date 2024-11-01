<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail Produk - Toko Parfum</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

    <div class="container mt-5">
        <?php
        $product = $_GET['product'] ?? 'blackamber';
        $products = [
            'blackamber' => ['title' => 'Zara Black Amber', 'image' => 'zara_blackamber.jpg', 'description' => 'Deskripsi lengkap Zara Black Amber...'],
            'cities' => ['title' => 'Zara Cities', 'image' => 'zara_cities.jpg', 'description' => 'Deskripsi lengkap Zara Cities...'],
            'fesyen' => ['title' => 'Zara Fesyen', 'image' => 'zara_fesyen.jpg', 'description' => 'Deskripsi lengkap Zara Fesyen...'],
            'night' => ['title' => 'Zara Night', 'image' => 'zara_night.jpg', 'description' => 'Deskripsi lengkap Zara Night...'],
        ];
        $selectedProduct = $products[$product];
        ?>
        <div class="card mb-3">
            <img src="<?php echo $selectedProduct['image']; ?>" class="card-img-top" alt="<?php echo $selectedProduct['title']; ?>">
            <div class="card-body">
                <h5 class="card-title"><?php echo $selectedProduct['title']; ?></h5>
                <p class="card-text"><?php echo $selectedProduct['description']; ?></p>
                <a href="produk.php" class="btn btn-secondary">Back</a>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
