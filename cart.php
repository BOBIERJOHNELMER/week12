<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Checkout Page</title>
    <!-- Bootstrap CSS -->
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
      rel="stylesheet"
    />
    <!-- External CSS for Checkout -->
    <link rel="stylesheet" href="checkout-system.css" />
    <!-- Leaflet CSS for map -->
    <link
      rel="stylesheet"
      href="https://unpkg.com/leaflet@1.7.1/dist/leaflet.css"
    />
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
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css"
      rel="stylesheet"
    />
    <!-- Bootstrap CDN for Carousel -->
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css"
      rel="stylesheet"
    />
    <!-- External Footer CSS -->
    <link href="../css/footer.css" rel="stylesheet" />
    <!-- Add your footer CSS link here -->

    <link rel="stylesheet" href="../css/contact.css" />
    <link rel="stylesheet" href="../css/cart.css" />
  </head>
  <body>
    <!-- Navigation Bar -->
    <nav class="navbar sticky-top">
      <div class="navbar-top">
        <div class="logo-container">
          <img src="../res_img/gymfit_logo.png" alt="GYMFIT Logo" class="logo-img" />
          <h1 class="logo-text">GYMFIT</h1>
        </div>
        <ul class="nav-links">
          <li><a href="#">Home</a></li>
          <li><a href="#">Shop</a></li>
          <li><a href="#">Trainers</a></li>
          <li><a href="#">About</a></li>
          <li><a href="#">Contact</a></li>
        </ul>
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
            <span class="cart-badge" id="cart-badge">0</span> <!-- Cart badge -->
          </div>
        </div>        
        </div>
      </div>
    </nav>

    <!-- Cart Section -->
<div class="container cart-section my-5">
  <h1 class="text-center mb-4" style="font-family: 'Poppins', sans-serif; color: #ff4d4d;">Shopping Cart</h1>

  <!-- Cart Table -->
  <div class="table-responsive">
    <table class="table table-bordered cart-table">
      <thead class="bg-light">
        <tr>
          <th scope="col">Product</th>
          <th scope="col">Quantity</th>
          <th scope="col">Subtotal</th>
          <th scope="col">Action</th>
        </tr>
      </thead>
      <tbody id="cart-items">
        <!-- Dynamic content will be inserted here by JavaScript -->
      </tbody>
    </table>
  </div>

  <!-- Cart Summary -->
  <div class="text-end mt-4 cart-summary">
    <p class="mb-1">Subtotal: <span id="subtotal-amount" class="fw-bold">₱0.00</span></p>
    <p class="mb-1">Tax (12%): <span id="tax-amount" class="fw-bold">₱0.00</span></p>
    <p class="fs-5">Total: <span id="total-amount" class="fw-bold text-danger">₱0.00</span></p>
    <a href="#" class="btn btn-success mt-3 proceed-btn">Proceed to Checkout</a>
  </div>
</div>

    <!-- Footer -->
   <footer class="footer bg-dark text-white py-5 mt-5">
    <div class="container">
      <div class="row">
        <!-- About Us Section -->
        <div class="col-md-4 mb-4">
          <h5 class="footer-title">About Us</h5>
          <p>
            At GymFit, we offer the best gym equipment, accessories, and
            personalized coaching services. Get fit with high-quality products
            and expert trainers. Discover our exclusive offers and enjoy a
            healthier lifestyle with GymFit!
          </p>
        </div>

        <!-- Quick Links Section -->
        <div class="col-md-4 mb-4">
          <h5 class="footer-title">Quick Links</h5>
          <ul class="list-unstyled">
            <li><a href="#" class="footer-link">Privacy Policy</a></li>
            <li><a href="#" class="footer-link">Terms of Service</a></li>
            <li><a href="#" class="footer-link">Contact Us</a></li>
            <li><a href="#" class="footer-link">Shop Now</a></li>
          </ul>
        </div>

        <!-- Social Media Section -->
        <div class="col-md-4 mb-4">
          <h5 class="footer-title">Follow Us</h5>
          <ul class="list-unstyled d-flex justify-content-center">
            <li>
              <a
                href="https://www.facebook.com/yourpage"
                class="social-icon me-4"
                aria-label="Facebook"
                ><i class="bi bi-facebook"></i
              ></a>
            </li>
            <li>
              <a
                href="https://www.instagram.com/yourpage"
                class="social-icon me-4"
                aria-label="Instagram"
                ><i class="bi bi-instagram"></i
              ></a>
            </li>
            <li>
              <a
                href="https://www.twitter.com/yourpage"
                class="social-icon"
                aria-label="Twitter"
                ><i class="bi bi-twitter"></i
              ></a>
            </li>
          </ul>
        </div>
      </div>

      <!-- Copyright Section -->
      <footer>
  <div class="footer-container">
    <div class="text-center mt-4">
      <p>&copy; 2024 GymFit. All rights reserved.</p>
    </div>
  </div>
</footer>

<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
<script src="cart.js"></script>
</body>
</html>

  