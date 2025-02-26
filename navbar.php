<?php
require 'head.php';
?>

<style>
    .navbar {
        border-bottom: 2px solid transparent;
    }
    .nav-link {
        position: relative;
        transition: color 0.3s ease-in-out;
        font-weight: 600;
        color: black;
        font-size: 12px;
    }
    .nav-link:hover,
    .nav-link.active {
        color: #96783f !important;
    }
    .nav-link::after {
        content: '';
        position: absolute;
        left: 50%;
        bottom: 6px;
        width: 0;
        height: 3px;
        border-radius: 50px;
        background-color: black;
        transition: width 0.3s ease-in-out, left 0.3s ease-in-out;
    }
    .nav-link:hover::after,
    .nav-link.active::after {
        width: 30%;
        left: 35%;
        background-color: #96783f;
    }
    .navbar-brand img {
        height: 40px; 
        margin-right: 10px;
    }
    .visit-button {
        display: flex;
        align-items: center;
        background-color: #b08d4f;
        color: white;
        text-decoration: none;
        font-weight: 500;
        font-size: 12px;
        padding: 10px 10px;
        border-radius: 0px;
    }
    .visit-button:hover {
        background-color: #96783f;
    }
</style>

<body>
<nav class="navbar navbar-expand-lg bg-light">
    <div class="container">
        <a class="navbar-brand d-flex align-items-center" href="#">
            <img src="assets/logo.png" alt="Logo"> 
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
            <ul class="nav">
                <li class="nav-item">
                    <a class="nav-link" href="index.php">BERANDA</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="tentang.php">TENTANG</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="program.php">PROGRAM</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="registrasi.php">REGISTRASI</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="warung.php">WARUNG</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="kontak.php">KONTAK</a>
                </li>
                <!-- <li class="nav-item">
                    <a href="login.php" class="visit-button">
                        LOGIN
                    </a>
                </li> -->
            </ul>
        </div>
    </div>
</nav>

<script>
    $(document).ready(function () {
        let currentPath = window.location.pathname.split("/").pop();
        $(".nav-link").each(function () {
            if ($(this).attr("href") === currentPath) {
                $(this).addClass("active");
            }
        });
    });
</script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>