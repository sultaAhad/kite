<!-- Header Start Here -->
<header class="site-header w-100 <?php echo isset($headerClass) ? $headerClass : ''; ?>">
    <div class="site-header__wrap">
        <!-- Top Bar -->
        <div class="kf-top-bar secondary-bg py-2">
            <div class="container">
                <div class="kf-top-bar__inner d-flex flex-wrap align-items-center justify-content-between gap-2">
                    <!-- Left Contact Info -->
                    <div class="kf-top-bar__info d-flex align-items-center flex-wrap gap-3 gap-md-4">
                        <a href="tel:5123565587"
                            class="text-decoration-none level-7 para-font extra-color-2 mb-0 d-flex align-items-center gap-2">
                            <span class="body-color"><img src="img/phone.png" alt="Phone" width="16" height="16"></span>
                            (512) 356-5587
                        </a>
                        <p class="level-7 para-font extra-color-2 mb-0 d-flex align-items-center gap-2">
                            <span class="body-color"><img src="img/point.png" alt="Location" width="16"
                                    height="16"></span> Springfield, MO
                        </p>
                    </div>

                    <!-- Center Slider / Announcement Ticker -->
                    <div class="kf-top-bar__slider text-center flex-grow-1 px-3">
                        <div id="topBarCarousel" class="carousel slide vertical-slider" data-bs-ride="carousel"
                            data-bs-interval="3000">
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <p class="level-7 para-font extra-color-2 mb-0">🎉 Promotional banners displaying
                                        discounts</p>
                                </div>
                                <div class="carousel-item">
                                    <p class="level-7 para-font extra-color-2 mb-0">🍂 Seasonal campaigns available now!
                                    </p>
                                </div>
                                <div class="carousel-item">
                                    <p class="level-7 para-font extra-color-2 mb-0">⏰ Limited-time offers — Don't miss
                                        out!</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Right Email Contact -->
                    <div class="kf-top-bar__contact">
                        <a href="mailto:info@kiteflyershop.com"
                            class="text-decoration-none level-7 para-font extra-color-2 mb-0 d-flex align-items-center gap-2">
                            <span class="body-color"><img src="img/envalope.png" alt="Email" width="16"
                                    height="16"></span> info@kiteflyershop.com
                        </a>
                    </div>
                </div>
            </div>
        </div>

        <!-- Main Navigation Bar -->
        <div class="kf-main-header mt-3">
            <div class="container">
                <div
                    class="kf-main-header__container bg____wrap radius-20 p-3 py-2 d-flex align-items-center justify-content-between">

                    <!-- Logo (Dynamic) -->
                    <figure class="kf-logo mb-0">
                        <a href="./" class="d-block">
                            <?php 
                            $currentLogo = isset($logoImg) ? $logoImg : 'img/kite-logo.png'; 
                            ?>
                            <img src="<?php echo $currentLogo; ?>" class="logo-here light-image img-fluid" alt="Logo"
                                style="max-height: 50px;">
                        </a>
                    </figure>

                    <!-- Desktop Navigation Links -->
                    <nav class="kf-nav d-none d-lg-block">
                        <ul
                            class="kf-nav__list list-unstyled d-flex align-items-center gap-4 mb-0 <?php echo isset($headerClasslink) ? $headerClasslink : ''; ?>">
                            <li><a href="./"
                                    class="kf-nav__link level-7 primary-regular-font extra-color-1 text-decoration-none">Home</a>
                            </li>
                            <li><a href="shop"
                                    class="kf-nav__link level-7 primary-regular-font extra-color-1 text-decoration-none">Shop</a>
                            </li>
                            <li><a href="explore.php"
                                    class="kf-nav__link level-7 primary-regular-font extra-color-1 text-decoration-none">Explore</a>
                            </li>
                            <li><a href="festival"
                                    class="kf-nav__link level-7 primary-regular-font extra-color-1 text-decoration-none">Festivals</a>
                            </li>
                            <li><a href="about"
                                    class="kf-nav__link level-7 primary-regular-font extra-color-1 text-decoration-none">About</a>
                            </li>
                            <li><a href="contact"
                                    class="kf-nav__link level-7 primary-regular-font extra-color-1 text-decoration-none">Contact</a>
                            </li>
                        </ul>
                    </nav>

                    <!-- Right Actions (Desktop) -->
                    <div class="kf-header-actions d-none d-lg-flex align-items-center gap-3">
                        <a href="login"
                            class="kf-cart-btn icon-badge md d-flex align-items-center justify-content-center text-decoration-none">
                            <i class="fa-solid fa-user extra-color-10"></i>
                        </a>
                        <a href="cart"
                            class="kf-cart-btn icon-badge md d-flex align-items-center justify-content-center text-decoration-none">
                            <i class="fa-solid fa-cart-shopping extra-color-10"></i>
                        </a>
                        <a href="contact" class="btn kf-btn-primary">
                            Get In Touch <i class="fa-solid fa-arrow-right ms-1"></i>
                        </a>
                    </div>

                    <!-- Mobile Hamburger Button -->
                    <button class="kf-mobile-toggle d-lg-none border-0 bg-transparent text-white p-2"
                        id="mobileHamburgerBtn" aria-label="Toggle Navigation">
                        <i class="fa-solid fa-bars-staggered fs-3 text-orange"></i>
                    </button>
                </div>
            </div>
        </div>
    </div>
</header>

<!-- Mobile Drawer Overlay -->
<div class="mobile-drawer-overlay" id="mobileDrawerOverlay"></div>

<!-- Mobile Drawer Right Panel -->
<div class="mobile-drawer-menu" id="mobileDrawerMenu">
    <div
        class="drawer-header d-flex align-items-center justify-content-between p-3 border-bottom border-secondary border-opacity-25">
        <img src="<?php echo $currentLogo; ?>" alt="Logo" style="max-height: 40px;">
        <button class="btn-close-drawer text-white border-0 bg-transparent fs-4" id="closeDrawerBtn">
            <i class="fa-solid fa-xmark"></i>
        </button>
    </div>
    <div class="drawer-body p-4">
        <ul class="mobile-nav-list list-unstyled d-flex flex-column gap-3 mb-4">
            <li class="mobile-nav-item"><a href="./" class="drawer-link"><i class="fa-solid fa-house me-3"></i>Home</a>
            </li>
            <li class="mobile-nav-item"><a href="shop" class="drawer-link"><i
                        class="fa-solid fa-bag-shopping me-3"></i>Shop</a></li>
            <li class="mobile-nav-item"><a href="explore.php" class="drawer-link"><i
                        class="fa-solid fa-compass me-3"></i>Explore</a></li>
            <li class="mobile-nav-item"><a href="festival" class="drawer-link"><i
                        class="fa-solid fa-masks-theater me-3"></i>Festivals</a></li>
            <li class="mobile-nav-item"><a href="about" class="drawer-link"><i
                        class="fa-solid fa-circle-info me-3"></i>About</a></li>
            <li class="mobile-nav-item"><a href="contact" class="drawer-link"><i
                        class="fa-solid fa-envelope me-3"></i>Contact</a></li>
        </ul>
        <a href="contact" class="btn btn-orange-gradient w-100 py-3 text-center rounded-pill">Get In Touch</a>
    </div>
</div>

<!-- App-Style Bottom Navigation Bar (Mobile Only) -->
<nav class="mobile-bottom-app-bar d-lg-none">
    <div class="bottom-bar-inner d-flex align-items-center justify-content-around">
        <a href="./" class="bottom-nav-item active">
            <i class="fa-solid fa-house"></i>
            <span>Home</span>
        </a>
        <a href="shop" class="bottom-nav-item">
            <i class="fa-solid fa-store"></i>
            <span>Shop</span>
        </a>
        <a href="cart" class="bottom-nav-item position-relative">
            <div class="icon-wrap position-relative">
                <i class="fa-solid fa-cart-shopping"></i>
                <span class="badge-count">2</span>
            </div>
            <span>Cart</span>
        </a>
        <a href="login" class="bottom-nav-item">
            <i class="fa-solid fa-user"></i>
            <span>Account</span>
        </a>
        <button class="bottom-nav-item border-0 bg-transparent p-0" id="bottomMenuToggle">
            <i class="fa-solid fa-bars"></i>
            <span>Menu</span>
        </button>
    </div>
</nav>

<style>
/* Base Colors & Helpers */
.text-orange {
    color: #ff7a00 !important;
}

.site-header {
    position: relative;
    z-index: 99;
}

.kf-top-bar {
    background-color: #0b0f19;
}




.kf-nav__link:hover {
    color: #ff7a00;
}

/* Fixed Overlay Styling */
.mobile-drawer-overlay {
    position: fixed;
    top: 0;
    left: 0;
    width: 100%;
    height: 100vh;
    background: rgba(0, 0, 0, 0.75);
    backdrop-filter: blur(5px);
    z-index: 9998;
    opacity: 0;
    visibility: hidden;
    transition: opacity 0.3s ease, visibility 0.3s ease;
}

.mobile-drawer-overlay.active {
    opacity: 1;
    visibility: visible;
}

/* Mobile Slide Drawer Panel Fix */
.mobile-drawer-menu {
    position: fixed;
    top: 0;
    right: 0;
    width: 280px;
    max-width: 85vw;
    height: 100vh;
    background-color: #121824;
    z-index: 9999;
    box-shadow: -5px 0 25px rgba(0, 0, 0, 0.8);
    transform: translateX(100%);
    transition: transform 0.35s cubic-bezier(0.4, 0, 0.2, 1);
    overflow-y: auto;
}

.mobile-drawer-menu.active {
    transform: translateX(0);
}

.drawer-link {
    color: #cbd5e1;
    text-decoration: none;
    font-size: 15px;
    font-weight: 500;
    display: flex;
    align-items: center;
    padding: 8px 0;
    transition: color 0.2s ease;
}

.drawer-link:hover {
    color: #ff7a00;
}

.btn-orange-gradient {
    background: linear-gradient(90deg, #ff7a00 0%, #ff4500 100%);
    color: #ffffff !important;
    font-weight: 700;
    border: none;
}

/* App-Style Bottom Navigation Bar */
.mobile-bottom-app-bar {
    position: fixed;
    bottom: 0;
    left: 0;
    width: 100%;
    background: rgba(18, 24, 36, 0.95);
    backdrop-filter: blur(15px);
    border-top: 1px solid rgba(255, 255, 255, 0.1);
    padding: 8px 0 10px 0;
    z-index: 9990;
    box-shadow: 0 -5px 20px rgba(0, 0, 0, 0.5);
}

.bottom-nav-item {
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: center;
    color: #94a3b8;
    text-decoration: none;
    font-size: 11px;
    gap: 3px;
    transition: color 0.2s ease, transform 0.2s ease;
}

.bottom-nav-item i {
    font-size: 18px;
}

.bottom-nav-item.active,
.bottom-nav-item:hover {
    color: #ff7a00;
    transform: translateY(-2px);
}

.badge-count {
    position: absolute;
    top: -5px;
    right: -8px;
    background-color: #ff7a00;
    color: #fff;
    font-size: 9px;
    font-weight: bold;
    width: 16px;
    height: 16px;
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
}

/* Responsive Rules */
@media (max-width: 991px) {
    body {
        padding-bottom: 65px !important;
    }

    .kf-main-header.mt-3 {
        width: 100%;
    }
}
</style>

<!-- GSAP Script & Smooth Mobile Drawer Toggle Logic -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/gsap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/ScrollTrigger.min.js"></script>

<script>
document.addEventListener('DOMContentLoaded', function() {
    gsap.registerPlugin(ScrollTrigger);

    const openBtn = document.getElementById('mobileHamburgerBtn');
    const bottomMenuBtn = document.getElementById('bottomMenuToggle');
    const closeBtn = document.getElementById('closeDrawerBtn');
    const overlay = document.getElementById('mobileDrawerOverlay');
    const drawer = document.getElementById('mobileDrawerMenu');

    // Drawer Open Logic
    function openDrawer() {
        overlay.classList.add('active');
        drawer.classList.add('active');
        document.body.style.overflow = 'hidden';

        gsap.fromTo(".mobile-nav-item", {
            opacity: 0,
            x: 30
        }, {
            opacity: 1,
            x: 0,
            duration: 0.35,
            stagger: 0.05,
            ease: "power2.out",
            delay: 0.1
        });
    }

    // Drawer Close Logic
    function closeDrawer() {
        overlay.classList.remove('active');
        drawer.classList.remove('active');
        document.body.style.overflow = '';
    }

    if (openBtn) openBtn.addEventListener('click', openDrawer);
    if (bottomMenuBtn) bottomMenuBtn.addEventListener('click', openDrawer);
    if (closeBtn) closeBtn.addEventListener('click', closeDrawer);
    if (overlay) overlay.addEventListener('click', closeDrawer);

    // Scroll Logic: Sticky header remove kar diya gaya hai. Sirf Mobile Bottom Bar hide/show scroll logic active hai.
    let lastScroll = 0;

    ScrollTrigger.create({
        start: 'top -50',
        onUpdate: (self) => {
            const currentScroll = self.scroll();

            if (window.innerWidth < 992) {
                if (currentScroll > lastScroll && currentScroll > 120) {
                    gsap.to(".mobile-bottom-app-bar", {
                        y: 80,
                        duration: 0.3,
                        ease: "power1.out"
                    });
                } else {
                    gsap.to(".mobile-bottom-app-bar", {
                        y: 0,
                        duration: 0.3,
                        ease: "power1.out"
                    });
                }
            }
            lastScroll = currentScroll;
        }
    });
});
</script>