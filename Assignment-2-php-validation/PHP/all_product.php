<?php
session_start();

$products = [

    "Galaxy S24 Ultra" => [
        "price" => 55000,
        "img" => "../Images/galaxy_s24.png",
        "desc" => "Flagship AI Smartphone with 200MP camera and S-Pen."
    ],

    "Galaxy Book4 Pro" => [
        "price" => 65000,
        "img" => "../Images/galaxy_book4.png",
        "desc" => "Ultra-lightweight premium laptop with Dynamic AMOLED 2X."
    ],

    "Galaxy Tab S9 Ultra" => [
        "price" => 38000,
        "img" => "../Images/galaxy_tab_s9.png",
        "desc" => "Ultimate tablet with immersive 14.6\" screen and S-Pen included."
    ],

    "Galaxy Watch6 Classic" => [
        "price" => 12000,
        "img" => "../Images/galaxy_watch6.png",
        "desc" => "Elegant design with iconic rotating bezel and advanced health coaching."
    ],

    "Galaxy Buds2 Pro" => [
        "price" => 6000,
        "img" => "../Images/galaxy_buds2.png",
        "desc" => "Hi-Fi 24-bit audio with Intelligent Active Noise Cancellation."
    ],

    "Samsung Odyssey G7" => [
        "price" => 20000,
        "img" => "../Images/samsung_odyssey.png",
        "desc" => "32\" QLED curved gaming monitor with 240Hz refresh rate and 1ms response."
    ]

];
?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Samsung Premium Products</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@300;400;500;600;700;800&display=swap');

        body {
            font-family: 'Plus Jakarta Sans', sans-serif;
            background: #f8fafc;
            color: #0f172a;
        }

        .navbar {
            background-color: #0f172a !important;
            border-bottom: 1px solid rgba(255, 255, 255, 0.1);
        }

        .navbar-brand {
            letter-spacing: 0.5px;
            font-size: 1.4rem;
        }

        .page-title {
            font-weight: 800;
            letter-spacing: -0.5px;
            color: #0f172a;
        }

        .card {
            border: none;
            border-radius: 12px;
            overflow: hidden;
            background: #ffffff;
            transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
        }

        .card:hover {
            transform: translateY(-6px);
            box-shadow: 0 15px 30px rgba(15, 23, 42, 0.08) !important;
        }

        .card-img-top {
            height: 250px;
            object-fit: contain;
            background: #fdfdfd;
            padding: 20px;
            transition: all 0.3s ease;
        }

        .card:hover .card-img-top {
            transform: scale(1.03);
        }

        .card-body h4 {
            font-weight: 700;
            font-size: 1.25rem;
            margin-bottom: 10px;
        }

        .price-tag {
            font-weight: 700;
            color: #2563eb !important;
            font-size: 1.15rem;
        }

        .product-desc {
            color: #64748b;
            font-size: 0.925rem;
            line-height: 1.5;
        }

        .btn-primary {
            background: linear-gradient(135deg, #3b82f6, #1d4ed8);
            border: none;
            padding: 10px 20px;
            font-weight: 600;
            border-radius: 6px;
            transition: all 0.3s ease;
        }

        .btn-primary:hover {
            background: linear-gradient(135deg, #60a5fa, #2563eb);
        }

        .card-footer {
            background: none;
            border-top: none;
            padding-top: 0;
            padding-bottom: 20px;
        }

        footer {
            padding: 30px 20px;
            background: #0f172a;
            color: #94a3b8;
            text-align: center;
            border-top: 1px solid rgba(255, 255, 255, 0.05);
            font-size: 0.95rem;
            margin-top: 50px;
        }
    </style>
</head>

<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark">
        <div class="container">
            <a class="navbar-brand fw-bold" href="../index.php">
                Samsung Store
            </a>
            <div>
                <a href="../index.php" class="btn btn-outline-light me-2">
                    Home
                </a>
                <a href="account.php" class="btn btn-outline-warning me-2">
                    Account
                </a>
                <?php if (isset($_SESSION['email'])) { ?>
                    <a href="logout.php" class="btn btn-danger">
                        Logout
                    </a>
                <?php } ?>
            </div>
        </div>
    </nav>
    <div class="container py-5">
        <h2 class="text-center mb-5 page-title">
            Our Premium Products
        </h2>
        <div class="row">
            <?php foreach ($products as $name => $item) { ?>
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="card shadow-sm h-100">
                        <img src="<?php echo $item['img']; ?>" class="card-img-top" alt="<?php echo $name; ?>">
                        <div class="card-body d-flex flex-column justify-content-between">
                            <div>
                                <h4>
                                    <?php echo $name; ?>
                                </h4>
                                <h5 class="price-tag mb-3">
                                    <?php echo number_format($item['price']); ?> EGP
                                </h5>
                            </div>
                            <p class="product-desc mb-0">
                                <?php echo $item['desc']; ?>
                            </p>
                        </div>
                        <div class="card-footer text-center">
                            <button class="btn btn-primary w-100">
                                Buy Now
                            </button>
                        </div>
                    </div>
                </div>
            <?php } ?>
        </div>
    </div>
    <footer>
        © 2026 Samsung Store. All rights reserved.
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>