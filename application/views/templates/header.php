<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <title><?= $title ?></title>

  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

  <!-- Font -->
  <link rel="stylesheet" type="text/css" href="<?= base_url() ?>assets/css/font-awesome.min.css">
  <!-- Slicknav -->
  <link rel="stylesheet" type="text/css" href="<?= base_url() ?>assets/css/slicknav.css">
  <!-- Owl carousel -->
  <link rel="stylesheet" type="text/css" href="<?= base_url() ?>assets/css/owl.carousel.css">
  <link rel="stylesheet" type="text/css" href="<?= base_url() ?>assets/css/owl.theme.css">
  <!-- Animate -->
  <link rel="stylesheet" type="text/css" href="<?= base_url() ?>assets/css/animate.css">
  <!-- Main Style -->
  <link rel="stylesheet" type="text/css" href="<?= base_url() ?>assets/css/main.css">
  <!-- Extras Style -->
  <link rel="stylesheet" type="text/css" href="<?= base_url() ?>assets/css/extras.css">
  <!-- Responsive Style -->
  <link rel="stylesheet" type="text/css" href="<?= base_url() ?>assets/css/responsive.css">
  <!-- ANIMATE AOS -->
  <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
</head>

<body>

  <!-- Header Area wrapper Starts -->
  <header id="header-wrap">
    <!-- Navbar Start -->
    <nav class="navbar navbar-expand-lg fixed-top scrolling-navbar" style="background-color: rgb(255, 255, 255, .8)">
      <div class="container">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#main-navbar" aria-controls="main-navbar" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            <span class="icon-menu"></span>
            <span class="icon-menu"></span>
            <span class="icon-menu"></span>
          </button>
          <a href="<?= base_url() ?>" class="navbar-brand"><img src="<?= base_url() ?>assets/img/presisi/L1.png" alt="Brands"></a>
        </div>
        <div class="collapse navbar-collapse" id="main-navbar">
          <ul class="navbar-nav mr-auto w-100 justify-content-end clearfix">
            <li class="nav-item <?= $title == 'Home' ? 'active' : ''; ?>">
              <a class="nav-link" href="<?= base_url() ?>">
                Home
              </a>
            </li>
            <li class="nav-item <?= $title == 'About' ? 'active' : ''; ?>">
              <a class="nav-link" href="<?= base_url() ?>about">
                About Us
              </a>
            </li>
            <li class="nav-item <?= $title == 'Products' ? 'active' : ''; ?>">
              <a class="nav-link" href="<?= base_url() ?>products">
                Products
              </a>
            </li>
            <li class="nav-item <?= $title == 'Contact' ? 'active' : ''; ?>">
              <a class="nav-link" href="<?= base_url() ?>contact">
                Contact
              </a>
            </li>
          </ul>
        </div>
      </div>

      <!-- Mobile Menu Start -->
      <ul class="mobile-menu navbar-nav">
        <li class="nav-item">
          <a class="nav-link" href="<?= base_url() ?>">
            Home
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="<?= base_url() ?>about">
            About Us
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="<?= base_url() ?>products">
            Products
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="<?= base_url() ?>contact">
            Contact
          </a>
        </li>
      </ul>
      <!-- Mobile Menu End -->

    </nav>
    <!-- Navbar End -->