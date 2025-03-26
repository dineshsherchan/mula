<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?= base_url('/css/style.css') ?>">
    <title>Your wish as our wish. Feel free to use our products.</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-1.9.1.min.js"></script>
    <style>
        .navbar-brand {
            font-size: 1.5rem;
            font-weight: bold;
        }

        .navbar-nav .nav-item {
            margin-right: 15px;
        }

        .navbar-nav .nav-link {
            font-size: 1rem;
            font-weight: 500;
            transition: color 0.3s;
        }

        .navbar-nav .nav-link:hover {
            color: #a94752;
        }

        /* Mobile-friendly navbar */
        @media (max-width: 768px) {
            .navbar-nav {
                text-align: center;
                margin-top: 10px;
            }

            .navbar-nav .nav-item {
                margin-bottom: 10px;
            }

            .navbar-nav .nav-link {
                font-size: 1.1rem;
            }

            .navbar-toggler {
                border-color: #a94752;
            }

            .navbar-toggler-icon {
                background-color: #a94752;
            }
        }

        /* Larger screen sizes adjustments */
        @media (min-width: 992px) {
            .navbar-nav .nav-link {
                font-size: 1.1rem;
            }
        }

        /* Custom Styling for Search Form */
        .search-form {
            max-width: 400px;
            margin-left: auto;
            margin-right: auto;
            display: flex;
            justify-content: center;
        }

        .search-form input {
            width: 80%;
        }
    </style>
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-light bg-light shadow-sm">
    <div class="container">
        <a class="navbar-brand text-primary" href="<?= base_url() ?>">Yours E-Commerce</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item"><a class="nav-link" href="<?= base_url() ?>">Home</a></li>
                <li class="nav-item"><a class="nav-link" href="<?= base_url('mobile') ?>">Mobile</a></li>
                <li class="nav-item"><a class="nav-link" href="<?= base_url('registration') ?>">Registration</a></li>
                <li class="nav-item"><a class="nav-link" href="<?= base_url('login') ?>">Login</a></li>
                <li class="nav-item"><a class="nav-link" href="<?= base_url('laptop') ?>">Gadgets</a></li>
                <li class="nav-item"><a class="nav-link" href="<?= site_url('contactus') ?>">Contact</a></li>
                <li class="nav-item">
                    <form class="d-flex search-form" role="search" action="<?= base_url('search') ?>" method="get">
                        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search" name="query">
                        <button class="btn btn-outline-primary" type="submit">Search</button>
                    </form>
                </li>
            </ul>
        </div>
    </div>
</nav>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
