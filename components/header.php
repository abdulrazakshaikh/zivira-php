<?php
// Get the current page filename
$current_page = basename($_SERVER['PHP_SELF']);
?>


<nav class="navbar navbar-header navbar-expand-lg fixed-top" id="navbarHeader">
    <div class="container">
        <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasLeft">
            <i class="bi bi-list"></i>
        </button>
        <a class="navbar-brand" href="index.php">
            <img src="img/logo.png" class="img-fluid" alt="">
        </a>
        <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasLeft">
            <div class="offcanvas-header">
                <h5 class="offcanvas-title">Navigation</h5>
                <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
            </div>
            <div class="offcanvas-body">
                <ul class="navbar-nav justify-content-end flex-grow-1 pe-lg-3">
                    <li class="nav-item <?php echo ($current_page == 'index.php') ? 'active' : ''; ?>">
                        <a href="index.php" class="nav-link">Home</a>
                    </li>
                    <li class="nav-item <?php echo ($current_page == 'about_dry_eyes.php') ? 'active' : ''; ?>">
                        <a href="about_dry_eyes.php" class="nav-link">About Dry Eyes</a>
                    </li>
                    <li class="nav-item <?php echo ($current_page == 'products.php') ? 'active' : ''; ?>">
                        <a href="products.php" class="nav-link">Products</a>
                    </li>
                    <li class="nav-item <?php echo ($current_page == 'resources.php') ? 'active' : ''; ?>">
                        <a href="resources.php" class="nav-link">Resources</a>
                    </li>
                    <li class="nav-item">
                        <a href="index.php#testeye-section" id="testeye-btn" class="nav-link">Test Your Eye</a>
                    </li>
                    <li class="nav-item <?php echo ($current_page == 'contact.php') ? 'active' : ''; ?>">
                        <a href="contact.php" class="nav-link">Contact Us</a>
                    </li>
                </ul>
                <a href="index.php#exercise-section" class="btn btn-primary btn-play">Eye Exercises</a>
                
            </div>
        </div>
    </div>
</nav>
