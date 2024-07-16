<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Homepage</title>
    <link rel="stylesheet" href="./assets/css/bootstrap.min.css" />
    <link rel="stylesheet" href="./assets/css/style.css" />
    <link rel="stylesheet" href="./assets/css/responsive.css" />
    <link rel="stylesheet" href="./assets/font-awesome/css/all.min.css">
</head>

<body>
    <!-- navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark py-lg-0 header" id="header">
        <div class="container">
            <a class="navbar-brand py-0" href="./">
                <span class="h2 fw-semibold">LOGO</span>
            </a>
            <button class="navbar-toggler border-0" data-bs-toggle="offcanvas" href="#offcanvasExample" role="button" aria-controls="offcanvasExample">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="offcanvas offcanvas-end bgc-primary" tabindex="-1" id="offcanvasExample" aria-labelledby="offcanvasExampleLabel">
                <div class="offcanvas-header">
                    <a href="./">
                        <span class="h2 fw-semibold">LOGO</span>
                    </a>
                    <button type="button" class="btn-close btn-close-white" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                </div>
                <div class="offcanvas-body">
                    <div class="navbar-collapse">
                        <ul class="navbar-nav ms-auto mb-2 mb-lg-0 gap-lg-3">
                            <li class="nav-item">
                                <a class="nav-link" href="./">Home</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="./about.php">About</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="./profile.php">Profile</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="./service.php">Service</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="./rates.php">Rates</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="./contact.php">Contact</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </nav>