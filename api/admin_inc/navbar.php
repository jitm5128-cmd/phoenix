<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Phoenix Travel and Tours London</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="style.css">
</head>

<body>

<nav class="navbar navbar-expand-lg navbar-dark fixed-top custom-navbar">
    <div class="container-fluid px-4">

        <!-- Logo -->
        <a class="navbar-brand d-flex align-items-center" href="#">
            <img src="image/logo.jpg" alt="Logo" width="100">
        </a>

        <!-- Mobile Toggle -->
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#mainNavbar">
            <span class="navbar-toggler-icon"></span>
        </button>

        <!-- Menu -->
        <div class="collapse navbar-collapse justify-content-end" id="mainNavbar">
            <ul class="navbar-nav align-items-lg-center gap-lg-3">
                <li class="nav-item">
                    <a class="nav-link <?= ($currentPage == 'index.php') ? 'active-link' : '' ?>" href="index.php">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link <?= ($currentPage == 'privateguide.php') ? 'active-link' : '' ?>" href="privateguide.php">Private Guided Tours</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link <?= ($currentPage == 'contact.php') ? 'active-link' : '' ?>" href="contact.php">Contact Us</a>
                </li>


                <li class="nav-item">
                    <a class="nav-link <?= ($currentPage == 'book.php') ? 'active-link' : '' ?>" href="book.php">Book</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link <?= ($currentPage == 'gallery.php') ? 'active-link' : '' ?>" href="gallery.php">Gallery</a>
                </li>
            </ul>

            <!-- Call Button -->
            <a href="tel:+440000000000" class="btn btn-warning ms-lg-4 fw-semibold call-btn">
                <i class="fa-solid fa-phone"></i> Call
            </a>
        </div>

    </div>
</nav>

<!-- Bootstrap JS (REQUIRED FOR TOGGLE) -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>