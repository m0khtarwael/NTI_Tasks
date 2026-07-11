<?php
session_start();

$errors = [];

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (!isset($_SESSION["email"])) {
        // Login Form
        $email = trim($_POST["email"]);
        $password = trim($_POST["password"]);
        if (empty($email)) {
            $errors[] = "Email is required.";
        } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $errors[] = "Invalid email format.";
        }
        if (empty($password)) {
            $errors[] = "Password is required.";
        } elseif (strlen($password) < 8) {
            $errors[] = "Password must be at least 8 characters.";
        }
        if (empty($errors)) {
            $_SESSION["email"] = $email;
            $_SESSION["password"] = $password;
            header("Location: all_product.php");
            exit();
        }
    } else {
        // Profile Form
        $username = trim($_POST["username"]);
        $password = trim($_POST["password"]);
        $email = trim($_POST["email"]);
        $phone = trim($_POST["phone"]);
        $facebook = trim($_POST["facebook"]);
        $twitter = trim($_POST["twitter"]);
        $instagram = trim($_POST["instagram"]);
        if (empty($username))
            $errors[] = "Username is required.";
        if (strlen($password) < 8)
            $errors[] = "Password must be at least 8 characters.";
        if (!filter_var($email, FILTER_VALIDATE_EMAIL))
            $errors[] = "Invalid Email.";
        if (!preg_match('/^[0-9]{11}$/', $phone))
            $errors[] = "Phone must contain 11 digits.";
        if (!filter_var($facebook, FILTER_VALIDATE_URL))
            $errors[] = "Facebook URL is invalid.";
        if (!filter_var($twitter, FILTER_VALIDATE_URL))
            $errors[] = "Twitter URL is invalid.";
        if (!filter_var($instagram, FILTER_VALIDATE_URL))
            $errors[] = "Instagram URL is invalid.";
        if (empty($errors)) {
            $_SESSION["username"] = $username;
            $_SESSION["password"] = $password;
            $_SESSION["email"] = $email;
            $_SESSION["phone"] = $phone;
            $_SESSION["facebook"] = $facebook;
            $_SESSION["twitter"] = $twitter;
            $_SESSION["instagram"] = $instagram;
            header("Location: ../index.php");
            exit();
        }
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Samsung Account</title>
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

        .card {
            border: none;
            border-radius: 12px;
            background: #ffffff;
            box-shadow: 0 10px 25px rgba(15, 23, 42, 0.05) !important;
        }

        .form-control {
            border-radius: 8px;
            padding: 10px 14px;
            border: 1px solid #e2e8f0;
        }

        .form-control:focus {
            box-shadow: 0 0 0 3px rgba(37, 99, 235, 0.15);
            border-color: #3b82f6;
        }

        .btn-primary {
            background: linear-gradient(135deg, #3b82f6, #1d4ed8);
            border: none;
            padding: 12px 20px;
            font-weight: 600;
            border-radius: 8px;
            transition: all 0.3s ease;
        }

        .btn-primary:hover {
            background: linear-gradient(135deg, #60a5fa, #2563eb);
        }

        .btn-success {
            background: linear-gradient(135deg, #10b981, #059669);
            border: none;
            padding: 12px 20px;
            font-weight: 600;
            border-radius: 8px;
            transition: all 0.3s ease;
        }

        .btn-success:hover {
            background: linear-gradient(135deg, #34d399, #059669);
        }

        .btn-warning {
            font-weight: 600;
            border-radius: 6px;
        }
    </style>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark">
        <div class="container">
            <a href="../index.php" class="navbar-brand fw-bold">
                Samsung Store
            </a>
            <div>
                <a href="../index.php" class="btn btn-outline-light me-2">
                    Home
                </a>
                <a href="all_product.php" class="btn btn-warning me-2">
                    Products
                </a>
                <?php if (isset($_SESSION["email"])) { ?>
                    <a href="logout.php" class="btn btn-danger">
                        Logout
                    </a>
                <?php } ?>
            </div>
        </div>
    </nav>
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-7">
                <div class="card shadow-sm">
                    <div class="card-body p-4">
                        <?php
                        if (!empty($errors)) {
                            echo '<div class="alert alert-danger">';
                            foreach ($errors as $error) {
                                echo $error . "<br>";
                            }
                            echo '</div>';
                        }
                        ?>
                        <?php if (!isset($_SESSION["email"])) { ?>
                            <h3 class="mb-4 text-center fw-bold">
                                Login
                            </h3>
                            <form method="POST">
                                <div class="mb-3">
                                    <label class="form-label fw-semibold">Email</label>
                                    <input type="email" name="email" class="form-control">
                                </div>
                                <div class="mb-3">
                                    <label class="form-label fw-semibold">Password</label>
                                    <input type="password" name="password" class="form-control">
                                </div>
                                <button class="btn btn-primary w-100">
                                    Login
                                </button>
                            </form>
                        <?php } else { ?>
                            <h3 class="mb-4 text-center fw-bold">
                                Profile
                            </h3>
                            <form method="POST">
                                <div class="mb-3">
                                    <label class="form-label fw-semibold">Username</label>
                                    <input type="text" name="username" class="form-control">
                                </div>
                                <div class="mb-3">
                                    <label class="form-label fw-semibold">Password</label>
                                    <input type="password" name="password" class="form-control"
                                        value="<?php echo $_SESSION['password']; ?>">
                                </div>
                                <div class="mb-3">
                                    <label class="form-label fw-semibold">Email</label>
                                    <input type="email" name="email" class="form-control"
                                        value="<?php echo $_SESSION['email']; ?>">
                                </div>
                                <div class="mb-3">
                                    <label class="form-label fw-semibold">Phone</label>
                                    <input type="text" name="phone" class="form-control">
                                </div>
                                <div class="mb-3">
                                    <label class="form-label fw-semibold">Facebook URL</label>
                                    <input type="text" name="facebook" class="form-control">
                                </div>
                                <div class="mb-3">
                                    <label class="form-label fw-semibold">Twitter URL</label>
                                    <input type="text" name="twitter" class="form-control">
                                </div>
                                <div class="mb-3">
                                    <label class="form-label fw-semibold">Instagram URL</label>
                                    <input type="text" name="instagram" class="form-control">
                                </div>
                                <button class="btn btn-success w-100">
                                    Save Profile
                                </button>
                            </form>
                        <?php } ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js"></script>

</body>

</html>
