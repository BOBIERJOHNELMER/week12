<?php
//connection
require_once 'connection.php';
?>


<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css"
    />
    <link rel="stylesheet" href="../css/styles.css" />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css"
    />
    <link
      href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&display=swap"
      rel="stylesheet"
    />
    <!-- Bootstrap CDN for Carousel -->
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css"
      rel="stylesheet"
    />

    <!--For see more/view more (seemore.php)-->
    <link rel="stylesheet" href="../css/seemore.css" />
  </head>
  <body>
    <!-- Navigation Bar -->
    <nav class="navbar sticky-top">
      <div class="navbar-top">
        <div class="logo-container">
          <img src="../res_img/gymfit_logo.png" alt="GYMFIT Logo" class="logo-img" />
          <h1 class="logo-text">GYMFIT</h1>
        </div>
        <div class="nav-links">
          <a href="index.php">Home</a>
          <a href="shop.php">Shop</a>
          <a href="trainers.php">Trainers</a>
          <a href="about.php">About</a>
          <a href="contact.php">Contact</a>
        </div>
      </div>
      <div class="navbar-bottom">
        <div class="dropdown">
          <div class="menu-icon">
            <i class="fas fa-bars"></i>
            <span>Shop by Category</span>
          </div>
          <div class="dropdown-content">
            <a href="#">Weights</a>
            <a href="#">Cardio Equipment</a>
            <a href="#">Accessories</a>
            <a href="#">Clothing</a>
          </div>
        </div>
        <div class="search-bar">
          <input type="text" placeholder="Search Products" />
          <i class="fas fa-search"></i>
        </div>
        <div class="user-cart-icons">
          <i class="fas fa-user"></i>
          <div class="cart-icon">
            <i class="fas fa-shopping-cart"></i>
            <span class="cart-badge">0</span>
          </div>
        </div>
    </nav>

   <!-- Bootstrap Icons (Ensure you've included this in your project) -->
   <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Bootstrap JS (Ensure this is included) -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>


  </body>
</html>
