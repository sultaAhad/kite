<!-- Header Start Here -->
<header class="site-header w-100 <?php echo isset($headerClass) ? $headerClass : ''; ?>">
    <div class="site-header__wrap">
        <!-- Top Bar -->
        <div class="kf-top-bar secondary-bg py-2">
            <div class="container">
                <div class="kf-top-bar__inner d-flex flex-wrap align-items-center justify-content-between gap-2">
                    <div class="kf-top-bar__info d-flex align-items-center flex-wrap gap-4">
                        <a href="tel:5123565587" class="text-decoration-none level-7 para-font extra-color-2 mb-0 d-flex align-items-center gap-2">
                            <span class="body-color"><img src="img/phone.png" alt="Phone" width="16" height="16"></span> (512) 356-5587
                        </a>
                        <p class="level-7 para-font extra-color-2 mb-0 d-flex align-items-center gap-2">
                            <span class="body-color"><img src="img/point.png" alt="Location" width="16" height="16"></span> Springfield, MO
                        </p>
                    </div>
                    <div class="kf-top-bar__contact">
                        <a href="mailto:info@kiteflyershop.com" class="text-decoration-none level-7 para-font extra-color-2 mb-0 d-flex align-items-center gap-2">
                            <span class="body-color"><img src="img/envalope.png" alt="Email" width="16" height="16"></span> info@kiteflyershop.com
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <!-- Main Navigation Bar -->
        <div class="kf-main-header mt-3">
            <div class="container">
                <div class="kf-main-header__container bg____wrap radius-20 p-3 py-2 d-flex align-items-center justify-content-between">
                    
                    <!-- Logo -->
                    <figure class="kf-logo mb-0">
                        <a href="./" class="d-block">
                            <img src="img/kite-logo.png" class="logo-here light-image img-fluid" alt="Kite Flyer Shop Logo" style="max-height: 40px;">
                        </a>
                    </figure>

                    <!-- Desktop Navigation Links -->
                    <nav class="kf-nav d-none d-lg-block">
                        <ul class="kf-nav__list list-unstyled d-flex align-items-center gap-4 mb-0">
                            <li><a href="./" class="kf-nav__link level-7 primary-regular-font extra-color-1 text-decoration-none">Home</a></li>
                            <li><a href="shop" class="kf-nav__link level-7 primary-regular-font extra-color-1 text-decoration-none">Shop</a></li>
                            <li><a href="explore" class="kf-nav__link level-7 primary-regular-font extra-color-1 text-decoration-none">Explore</a></li>
                            <li><a href="festivals" class="kf-nav__link level-7 primary-regular-font extra-color-1 text-decoration-none">Festivals</a></li>
                            <li><a href="about" class="kf-nav__link level-7 primary-regular-font extra-color-1 text-decoration-none">About</a></li>
                            <li><a href="contact" class="kf-nav__link level-7 primary-regular-font extra-color-1 text-decoration-none">Contact</a></li>
                        </ul>
                    </nav>

                    <!-- Right Actions (Cart & Button) -->
                    <div class="kf-header-actions d-none d-lg-flex align-items-center gap-3">
                        <a href="cart" class="kf-cart-btn icon-badge md d-flex align-items-center justify-content-center text-decoration-none">
                            <img src="img/cart.png" alt="Cart" width="20" height="20">
                        </a>
                        <a href="contact" class="btn kf-btn-primary">
                            Get In Touch <i class="fa-solid fa-arrow-right ms-1"></i>
                        </a>
                    </div>

                    <!-- Mobile Hamburger Button -->
                    <button class="kf-mobile-toggle d-lg-none border-0 bg-transparent" id="mobileHamburgerBtn" aria-label="Toggle Navigation">
                        <i class="fa fa-bars fs-4"></i>
                    </button>
                </div>
            </div>
        </div>
    </div>
</header>
<!-- Header End Here -->

