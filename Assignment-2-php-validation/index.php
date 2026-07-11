<!DOCTYPE html>

<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Samsung Premium Store</title>

    <!-- Bootstrap CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        @import url('https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@300;400;500;600;700;800&display=swap');

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

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

        .hero {
            height: 90vh;
            background: linear-gradient(rgba(15, 23, 42, 0.75),
                    rgba(15, 23, 42, 0.85)),
                url("./Images/tech_hero_bg.png");
            background-size: cover;
            background-position: center;
            display: flex;
            justify-content: center;
            align-items: center;
            color: white;
            text-align: center;
            padding: 0 20px;
        }

        .hero h1 {
            font-size: clamp(2.5rem, 6vw, 4.5rem);
            font-weight: 800;
            letter-spacing: -1px;
            margin-bottom: 20px;
            background: linear-gradient(to right, #ffffff, #94a3b8);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
        }

        .hero p {
            font-size: clamp(1rem, 2.5vw, 1.35rem);
            margin-bottom: 35px;
            color: #cbd5e1;
            max-width: 600px;
            margin-left: auto;
            margin-right: auto;
        }

        .btn-primary {
            background: linear-gradient(135deg, #3b82f6, #1d4ed8);
            border: none;
            padding: 12px 36px;
            font-weight: 600;
            border-radius: 8px;
            box-shadow: 0 4px 14px rgba(37, 99, 235, 0.4);
            transition: all 0.3s ease;
        }

        .btn-primary:hover {
            transform: translateY(-2px);
            box-shadow: 0 6px 20px rgba(37, 99, 235, 0.6);
            background: linear-gradient(135deg, #60a5fa, #2563eb);
        }

        footer {
            padding: 30px 20px;
            background: #0f172a;
            color: #94a3b8;
            text-align: center;
            border-top: 1px solid rgba(255, 255, 255, 0.05);
            font-size: 0.95rem;
        }
    </style>
</head>

<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark">
        <div class="container">
            <a class="navbar-brand fw-bold" href="#">
                Samsung Store
            </a>
            <button class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#navbar">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbar">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a href="index.php" class="nav-link active">
                            Home
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="PHP/all_product.php" class="nav-link">
                            Products
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="PHP/account.php" class="nav-link">
                            Account
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- Hero -->
    <section class="hero">
        <div>
            <h1>Samsung Premium Store</h1>
            <p>
                Experience the Peak of Mobile and Tech Innovation
            </p>
            <a href="PHP/all_product.php" class="btn btn-primary btn-lg">
                Shop Now
            </a>
        </div>
    </section>
    <footer>
        © 2026 Samsung Store. All rights reserved.
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js"></script>

</body>

</html>