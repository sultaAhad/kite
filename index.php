<?php $headerClass = 'header-relative';
$bodyClass = 'home-page';
include 'inc/app.php'; ?>

<!-- Body Content Start Here -->

<!-- Banner Section Start Here -->
<!-- Removed overflowing d-flex and py-5, replaced with proper padding in CSS -->
<section class="kf-hero-banner position-relative overflow-hidden">

    <!-- Decorative elements from image -->
    <div class="kf-diamond kf-diamond-left"></div>
    <div class="kf-diamond kf-diamond-right"></div>

    <div class="container position-relative z-1">
        <div class="row align-items-center">
            <div class="col-lg-6 col-md-10">
                <div class="kf-hero-content pt-5 mt-5 pb-2">

                    <!-- Top Subheading Pill - Adjusted size to fs-8 -->
                    <div
                        class="kf-badge-pill d-inline-flex align-items-center gap-2 mb-3 px-3 py-1_5 rounded-pill bg-white shadow-sm border">
                        <img src="img/primium.png" alt="Wind Icon" width="16" height="16">
                        <span class="text-uppercase fw-semibold fs-8 text-dark para-font">Premium Wind Adventures</span>
                    </div>

                    <!-- Main Heading - Accurate classes -->
                    <h1 class="kf-hero-title heading-font fw-bold mb-3">
                        Catch the Wind.<br>
                        <span class="text-secondary gradient-text-orange heading-font fw-bold">Own the Sky.</span>
                    </h1>

                    <!-- Description - Added specific color class -->
                    <p class="kf-hero-text para-font mb-4 text-dark fs-5 op-8">
                        Premium kites, wind art, stunt kites, wind spinners and outdoor experiences designed for
                        beaches, parks, festivals and unforgettable adventures.
                    </p>

                    <!-- CTA Buttons - Adjusted padding and flex structure -->
                    <div class="kf-hero-buttons d-flex flex-wrap align-items-center gap-3 mb-2">
                        <a href="shop" class="btn kf-btn-primary d-inline-flex align-items-center gap-2">Shop Kites <i
                                class="fa-solid fa-arrow-right fs-7"></i></a>
                        <a href="explore"
                            class="btn kf-btn-outline d-inline-flex align-items-center gap-2 text-dark">Explore Wind
                            Art</a>
                    </div>

                </div>
            </div>
        </div>

        <!-- Stats Row - Fixed widths and alignment -->
        <div class="kf-hero-stats row g-3 mt-lg-0 mt-4 text-start">
            <div class="col-lg-3 col-md-3 col-6">
                <div class="kf-stat-card one-wrapper-cart shadow-sm h-100 d-flex flex-column justify-content-center">
                    <small class="text-uppercase fs-8 fw-semibold mb-1">Years<br>Experience</small>
                    <h3 class="fw-bolder mb-0 heading-font">13+</h3>
                </div>
            </div>
            <div class="col-lg-3 col-md-3 col-6">
                <div class="kf-stat-card one-wrapper-cart1 shadow-sm h-100 d-flex flex-column justify-content-center">
                    <small class="text-uppercase fs-8 fw-semibold mb-1">Happy<br>Flyers</small>
                    <h3 class="fw-bolder mb-0 heading-font">50K+</h3>
                </div>
            </div>
            <div class="col-lg-3 col-md-3 col-6">
                <div
                    class="kf-stat-card one-wrapper-cart2 shadow-sm h-100 d-flex flex-column justify-content-center position-relative">
                    <i class="fa-solid fa-star fs-7 text-secondary position-absolute top-0 end-0 mt-3 me-3"></i>
                    <small class="text-uppercase fs-8 fw-semibold mb-1">Avg<br>Rating</small>
                    <h3 class="fw-bolder mb-0 heading-font">4.9</h3>
                </div>
            </div>
            <div class="col-lg-3 col-md-3 col-6">
                <div class="kf-stat-card one-wrapper-cart3 shadow-sm h-100 d-flex flex-column justify-content-center">
                    <small class="text-uppercase fs-8 fw-semibold mb-1">Products<br>&nbsp;</small>
                    <h3 class="fw-bolder mb-0 heading-font">500+</h3>
                </div>
            </div>
        </div>

    </div>
</section>
<!-- Banner Section End Here -->

<!-- Wind Collections Section Start -->
<section class="wind-collections-sec py-5">
    <div class="container py-lg-4">

        <!-- Section Header -->
        <div class="text-center mb-5">
            <span class="sub-title text-uppercase tracking-widest text-info fw-bold fs-8 d-block mb-2">Wind
                Collections</span>
            <h2 class="section-title display-5 fw-bold text-white mb-3 heading-font">Choose your wind.</h2>
            <p class="section-desc text-white-50 mx-auto para-font" style="max-width: 600px;">
                Built for every type of flyer — from first delta to festival-grade foil.
            </p>
        </div>

        <!-- Grid Layout -->
        <div class="row g-4">

            <!-- Left Side: Large Featured Card -->
            <div class="col-lg-7">
                <div class="collection-card feature-card rounded-5 overflow-hidden position-relative h-100">
                    <img src="img/collection-img.png" alt="Sport & Stunt Kites" class="card-bg-img">
                    <div class="card-overlay p-4 p-md-5 d-flex flex-column justify-content-end">
                        <span
                            class="category-tag text-uppercase text-white-50 fs-8 fw-semibold tracking-wider mb-1">Performance</span>
                        <h3 class="card-title text-white fw-bold display-6 mb-2">Sport & Stunt Kites</h3>
                        <p class="card-text text-white-50 fs-7 mb-4">Dual-line precision built for tricks, dives and
                            aerial choreography.</p>
                        <a href="#"
                            class="explore-btn text-white text-decoration-none d-inline-flex align-items-center gap-2 fw-semibold">
                            <span>Explore</span>
                            <span
                                class="arrow-icon rounded-circle d-flex align-items-center justify-content-center bg-white text-dark">
                                <i class="fa-solid fa-arrow-right fs-8"></i>
                            </span>
                        </a>
                    </div>
                </div>
            </div>

            <!-- Right Side: 2 Stacked Cards -->
            <div class="col-lg-5">
                <div class="row g-4 h-100">

                    <!-- Top Right Card -->
                    <div class="col-12">
                        <div class="collection-card rounded-5 overflow-hidden position-relative h-100 min-h-200">
                            <img src="img/collection-img1.png" alt="Delta Kites" class="card-bg-img">
                            <div class="card-overlay p-4 d-flex flex-column justify-content-end">
                                <span
                                    class="category-tag text-uppercase text-white-50 fs-8 fw-semibold tracking-wider mb-1">Classics</span>
                                <h3 class="card-title text-white fw-bold fs-3 mb-1">Delta Kites</h3>
                                <p class="card-text text-white-50 fs-7 mb-3">Easy lift, easy launch.</p>
                                <a href="#"
                                    class="explore-btn text-white text-decoration-none d-inline-flex align-items-center gap-2 fw-semibold">
                                    <span>Explore</span>
                                    <span
                                        class="arrow-icon rounded-circle d-flex align-items-center justify-content-center bg-white text-dark">
                                        <i class="fa-solid fa-arrow-right fs-8"></i>
                                    </span>
                                </a>
                            </div>
                        </div>
                    </div>

                    <!-- Bottom Right Card -->
                    <div class="col-12">
                        <div class="collection-card rounded-5 overflow-hidden position-relative h-100 min-h-200">
                            <img src="img/collection-img2.png" alt="Foil Kites" class="card-bg-img">
                            <div class="card-overlay p-4 d-flex flex-column justify-content-end">
                                <span
                                    class="category-tag text-uppercase text-white-50 fs-8 fw-semibold tracking-wider mb-1">Power</span>
                                <h3 class="card-title text-white fw-bold fs-3 mb-1">Foil Kites</h3>
                                <p class="card-text text-white-50 fs-7 mb-3">Frameless cells, maximum pull.</p>
                                <a href="#"
                                    class="explore-btn text-white text-decoration-none d-inline-flex align-items-center gap-2 fw-semibold">
                                    <span>Explore</span>
                                    <span
                                        class="arrow-icon rounded-circle d-flex align-items-center justify-content-center bg-white text-dark">
                                        <i class="fa-solid fa-arrow-right fs-8"></i>
                                    </span>
                                </a>
                            </div>
                        </div>
                    </div>

                </div>
            </div>

            <!-- Bottom Row: 3 Equal Columns -->
            <div class="col-md-4">
                <div class="collection-card rounded-5 overflow-hidden position-relative min-h-220 h-100">
                    <img src="img/collection-img5.png" alt="Windsocks" class="card-bg-img">
                    <div class="card-overlay p-4 d-flex flex-column justify-content-end">
                        <span
                            class="category-tag text-uppercase text-white-50 fs-8 fw-semibold tracking-wider mb-1">Wave
                            & Color</span>
                        <h3 class="card-title text-white fw-bold fs-4 mb-1">Windsocks</h3>
                        <p class="card-text text-white-50 fs-8 mb-3">Fluted banners that breathe with the wind.</p>
                        <a href="#"
                            class="explore-btn text-white text-decoration-none d-inline-flex align-items-center gap-2 fw-semibold">
                            <span>Explore</span>
                            <span
                                class="arrow-icon rounded-circle d-flex align-items-center justify-content-center bg-white text-dark">
                                <i class="fa-solid fa-arrow-right fs-8"></i>
                            </span>
                        </a>
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="collection-card rounded-5 overflow-hidden position-relative min-h-220 h-100">
                    <img src="img/collection-img4.png" alt="Wind Spinners" class="card-bg-img">
                    <div class="card-overlay p-4 d-flex flex-column justify-content-end">
                        <span
                            class="category-tag text-uppercase text-white-50 fs-8 fw-semibold tracking-wider mb-1">Kinetic</span>
                        <h3 class="card-title text-white fw-bold fs-4 mb-1">Wind Spinners</h3>
                        <p class="card-text text-white-50 fs-8 mb-3">Hypnotic motion for any outdoor space.</p>
                        <a href="#"
                            class="explore-btn text-white text-decoration-none d-inline-flex align-items-center gap-2 fw-semibold">
                            <span>Explore</span>
                            <span
                                class="arrow-icon rounded-circle d-flex align-items-center justify-content-center bg-white text-dark">
                                <i class="fa-solid fa-arrow-right fs-8"></i>
                            </span>
                        </a>
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="collection-card rounded-5 overflow-hidden position-relative min-h-220 h-100">
                    <img src="img/collection-img3.png" alt="Garden Windmills" class="card-bg-img">
                    <div class="card-overlay p-4 d-flex flex-column justify-content-end">
                        <span
                            class="category-tag text-uppercase text-white-50 fs-8 fw-semibold tracking-wider mb-1">Backyard</span>
                        <h3 class="card-title text-white fw-bold fs-4 mb-1">Garden Windmills</h3>
                        <p class="card-text text-white-50 fs-8 mb-3">Slow, beautiful, weatherproof.</p>
                        <a href="#"
                            class="explore-btn text-white text-decoration-none d-inline-flex align-items-center gap-2 fw-semibold">
                            <span>Explore</span>
                            <span
                                class="arrow-icon rounded-circle d-flex align-items-center justify-content-center bg-white text-dark">
                                <i class="fa-solid fa-arrow-right fs-8"></i>
                            </span>
                        </a>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>
<!-- Wind Collections Section End -->
<!-- The Wind Experience Section Start -->
<section class="wind-experience-sec py-5 position-relative">
    <div class="container py-lg-5">
        <div class="row align-items-center g-4 g-lg-5">

            <!-- Left Side: Image Card -->
            <div class="col-lg-6">
                <div class="experience-img-wrapper rounded-5 overflow-hidden position-relative">
                    <img src="img/collection-img1.png" alt="Kids flying kite on beach"
                        class="img-fluid w-100 h-100 object-fit-cover">
                </div>
            </div>

            <!-- Right Side: Content & Feature Cards -->
            <div class="col-lg-6">
                <div class="experience-content ps-lg-3">

                    <!-- Subtitle -->
                    <span class="sub-title text-uppercase tracking-widest text-info fw-bold fs-8 d-block mb-2">
                        THE WIND EXPERIENCE
                    </span>

                    <!-- Main Heading -->
                    <h2 class="section-title display-5 fw-bold text-white mb-3 heading-font">
                        More than a hobby.<br>
                        <span class="text-cyan">A feeling.</span>
                    </h2>

                    <!-- Paragraph Description -->
                    <p class="section-desc text-white-50 para-font mb-4 fs-7">
                        For over a decade, kiteflyershop has helped families, collectors, beach travelers and kite
                        enthusiasts experience the joy of wind-powered adventure.
                    </p>

                    <!-- Feature Cards Grid (2x2) -->
                    <div class="row g-3">

                        <!-- Card 1: Family Adventures -->
                        <div class="col-sm-6">
                            <div class="feature-card p-3 p-xl-4 rounded-4 h-100">
                                <div
                                    class="icon-badge rounded-circle d-flex align-items-center justify-content-center mb-3">
                                    <i class="fa-regular fa-heart text-white"></i>
                                </div>
                                <h4 class="card-title text-white fw-bold fs-6 mb-1 primary-bold-font">Family Adventures
                                </h4>
                                <p class="card-desc text-white-50 fs-8 mb-0 para-font">Shared skies, shared memories.
                                </p>
                            </div>
                        </div>

                        <!-- Card 2: Festival Culture -->
                        <div class="col-sm-6">
                            <div class="feature-card p-3 p-xl-4 rounded-4 h-100">
                                <div
                                    class="icon-badge rounded-circle d-flex align-items-center justify-content-center mb-3">
                                    <i class="fa-regular fa-flag text-white"></i>
                                </div>
                                <h4 class="card-title text-white fw-bold fs-6 mb-1 primary-bold-font">Festival Culture
                                </h4>
                                <p class="card-desc text-white-50 fs-8 mb-0 para-font">From local meet-ups to world
                                    fly-ins.</p>
                            </div>
                        </div>

                        <!-- Card 3: Outdoor Freedom -->
                        <div class="col-sm-6">
                            <div class="feature-card p-3 p-xl-4 rounded-4 h-100">
                                <div
                                    class="icon-badge rounded-circle d-flex align-items-center justify-content-center mb-3">
                                    <i class="fa-solid fa-wind text-white"></i>
                                </div>
                                <h4 class="card-title text-white fw-bold fs-6 mb-1 primary-bold-font">Outdoor Freedom
                                </h4>
                                <p class="card-desc text-white-50 fs-8 mb-0 para-font">Beaches, lakes, mountain ridges.
                                </p>
                            </div>
                        </div>

                        <!-- Card 4: Creative Expression -->
                        <div class="col-sm-6">
                            <div class="feature-card p-3 p-xl-4 rounded-4 h-100">
                                <div
                                    class="icon-badge rounded-circle d-flex align-items-center justify-content-center mb-3">
                                    <i class="fa-solid fa-wand-magic-sparkles text-white"></i>
                                </div>
                                <h4 class="card-title text-white fw-bold fs-6 mb-1 primary-bold-font">Creative
                                    Expression</h4>
                                <p class="card-desc text-white-50 fs-8 mb-0 para-font">Color, motion, design in the sky.
                                </p>
                            </div>
                        </div>

                    </div>

                </div>
            </div>

        </div>
    </div>
</section>
<!-- The Wind Experience Section End -->
<!-- Community Stats Banner Section Start -->
<section class="community-stats-sec py-5 position-relative overflow-hidden">
    <!-- Background Image with Cyan Overlay -->
    <div class="stats-bg-overlay"></div>

    <div class="container py-lg-4 position-relative z-2">

        <!-- Section Header -->
        <div class="text-center mb-5">
            <span class="sub-title text-uppercase tracking-widest text-white-50 fw-semibold fs-8 d-block mb-2">
                TRUSTED BY FLYERS WORLDWIDE
            </span>
            <h2 class="section-title display-5  text-white mx-auto secondary-medium-font" style="max-width: 800px;">
                A community 50,000 strong and growing with every gust.
            </h2>
        </div>

        <!-- 4 Stats Cards Grid -->
        <div class="row g-3 g-md-4 justify-content-center">

            <!-- Card 1 -->
            <div class="col-lg-3 col-sm-6">
                <div class="stat-glass-card p-4 text-center rounded-4 h-100 d-flex flex-column justify-content-center">
                    <h3 class="stat-number display-6 fw-bold text-white mb-1 primary-bold-font">50K<span
                            class="fs-4">+</span></h3>
                    <p class="stat-label text-uppercase text-white-50 fs-8 fw-semibold mb-0 tracking-wider">Happy
                        Customers</p>
                </div>
            </div>

            <!-- Card 2 -->
            <div class="col-lg-3 col-sm-6">
                <div class="stat-glass-card p-4 text-center rounded-4 h-100 d-flex flex-column justify-content-center">
                    <h3 class="stat-number display-6 fw-bold text-white mb-1 primary-bold-font">500<span
                            class="fs-4">+</span></h3>
                    <p class="stat-label text-uppercase text-white-50 fs-8 fw-semibold mb-0 tracking-wider">Premium
                        Products</p>
                </div>
            </div>

            <!-- Card 3 -->
            <div class="col-lg-3 col-sm-6">
                <div class="stat-glass-card p-4 text-center rounded-4 h-100 d-flex flex-column justify-content-center">
                    <h3 class="stat-number display-6 fw-bold text-white mb-1 primary-bold-font">13<span
                            class="fs-4">+</span></h3>
                    <p class="stat-label text-uppercase text-white-50 fs-8 fw-semibold mb-0 tracking-wider">Years of
                        Wind</p>
                </div>
            </div>

            <!-- Card 4 -->
            <div class="col-lg-3 col-sm-6">
                <div class="stat-glass-card p-4 text-center rounded-4 h-100 d-flex flex-column justify-content-center">
                    <h3 class="stat-number display-6 fw-bold text-white mb-1 primary-bold-font">4.9 <span
                            class="fs-5 text-white-50">/5.0</span></h3>
                    <p class="stat-label text-uppercase text-white-50 fs-8 fw-semibold mb-0 tracking-wider">Average
                        Rating</p>
                </div>
            </div>

        </div>

    </div>
</section>
<!-- Community Stats Banner Section End -->
<!-- Featured Products Section Start -->
<section class="featured-products-sec py-5">
    <div class="container py-lg-4">

        <!-- Top Header Row -->
        <div class="d-flex flex-wrap align-items-end justify-content-between mb-4 gap-3">
            <div>
                <span class="sub-title text-uppercase tracking-widest text-cyan fw-bold fs-8 d-block mb-2">
                    FEATURED BEST SELLERS
                </span>
                <h2 class="section-title display-5 fw-bold text-white mb-2 secondary-medium-font">
                    Most loved by flyers.
                </h2>
                <p class="text-white-50 fs-7 mb-0 para-font">
                    The kites and accessories our community keeps coming back to.
                </p>
            </div>
            <div>
                <a href="#" class="btn wrapper-cartbest">
                    View all <i class="fa-solid fa-arrow-right ms-3"></i>
                </a>
            </div>
        </div>

        <!-- Main Product Cards Grid -->
        <div class="row g-4">

            <!-- Product Card 1 -->
            <div class="col-xl-3 col-lg-4 col-sm-6">
                <div
                    class="product-card rounded-4 overflow-hidden p-3 h-100 d-flex flex-column justify-content-between">
                    <div>
                        <!-- Inner Card Image Slider -->
                        <div class="card-img-slider-wrap position-relative rounded-4 overflow-hidden mb-3">
                            <!-- Discount Badge Overlay -->
                            <span
                                class="discount-badge position-absolute top-0 end-0 m-3 z-3 fs-8 fw-bold text-dark px-2 py-1 rounded-3">
                                10% OFF
                            </span>

                            <!-- Inner Slick Slider -->
                            <div class="inner-card-slider">
                                <div><img src="img/product.png" alt="Delta Kite 1"
                                        class="img-fluid w-100 card-slide-img"></div>
                                <div><img src="img/product1.png" alt="Delta Kite 2"
                                        class="img-fluid w-100 card-slide-img"></div>
                                <div><img src="img/product2.png" alt="Delta Kite 3"
                                        class="img-fluid w-100 card-slide-img"></div>
                                <div><img src="img/product3.png" alt="Delta Kite 4"
                                        class="img-fluid w-100 card-slide-img"></div>
                            </div>
                        </div>

                        <!-- Card Body -->
                        <div class="card-body-content">
                            <!-- Rating -->
                            <div class="d-flex align-items-center gap-1 mb-1">
                                <i class="fa-solid fa-star fs-8 text-cyan"></i>
                                <span class="fs-8 fw-semibold text-white">5.0</span>
                            </div>

                            <!-- Product Title -->
                            <h3 class="product-title text-white fw-bold fs-5 mb-1 primary-bold-font">
                                Delta Kite
                            </h3>
                            <p class="product-desc text-white-50 fs-8 mb-3 para-font">
                                Lorem Ipsum Dolor Sit Amet,
                            </p>
                        </div>
                    </div>

                    <!-- Card Footer (Price & Cart Button) -->
                    <div class="d-flex align-items-center justify-content-between pt-2">
                        <div class="price-wrap">
                            <span class="current-price text-white fw-bold fs-5 primary-bold-font">$57.99</span>
                            <span class="old-price text-white-50 text-decoration-line-through fs-8 ms-1">$66.99</span>
                        </div>
                        <a href="#"
                            class="cart-btn rounded-circle d-flex align-items-center justify-content-center text-white text-decoration-none">
                            <i class="fa-solid fa-cart-shopping fs-7"></i>
                        </a>
                    </div>
                </div>
            </div>

            <!-- Product Card 2 -->
            <div class="col-xl-3 col-lg-4 col-sm-6">
                <div
                    class="product-card rounded-4 overflow-hidden p-3 h-100 d-flex flex-column justify-content-between">
                    <div>
                        <div class="card-img-slider-wrap position-relative rounded-4 overflow-hidden mb-3">
                            <span
                                class="discount-badge position-absolute top-0 end-0 m-3 z-3 fs-8 fw-bold text-dark px-2 py-1 rounded-3">
                                10% OFF
                            </span>
                            <div class="inner-card-slider">
                                <div><img src="img/product.png" alt="Delta Kite 1"
                                        class="img-fluid w-100 card-slide-img"></div>
                                <div><img src="img/product1.png" alt="Delta Kite 2"
                                        class="img-fluid w-100 card-slide-img"></div>
                                <div><img src="img/product2.png" alt="Delta Kite 3"
                                        class="img-fluid w-100 card-slide-img"></div>
                                <div><img src="img/product3.png" alt="Delta Kite 4"
                                        class="img-fluid w-100 card-slide-img"></div>
                            </div>
                        </div>

                        <div class="card-body-content">
                            <div class="d-flex align-items-center gap-1 mb-1">
                                <i class="fa-solid fa-star fs-8 text-cyan"></i>
                                <span class="fs-8 fw-semibold text-white">5.0</span>
                            </div>
                            <h3 class="product-title text-white fw-bold fs-5 mb-1 primary-bold-font">
                                Bird Kids Kite
                            </h3>
                            <p class="product-desc text-white-50 fs-8 mb-3 para-font">
                                Lorem Ipsum Dolor Sit Amet,
                            </p>
                        </div>
                    </div>

                    <div class="d-flex align-items-center justify-content-between pt-2">
                        <div class="price-wrap">
                            <span class="current-price text-white fw-bold fs-5 primary-bold-font">$57.99</span>
                            <span class="old-price text-white-50 text-decoration-line-through fs-8 ms-1">$66.99</span>
                        </div>
                        <a href="#"
                            class="cart-btn rounded-circle d-flex align-items-center justify-content-center text-white text-decoration-none">
                            <i class="fa-solid fa-cart-shopping fs-7"></i>
                        </a>
                    </div>
                </div>
            </div>

            <!-- Product Card 3 -->
            <div class="col-xl-3 col-lg-4 col-sm-6">
                <div
                    class="product-card rounded-4 overflow-hidden p-3 h-100 d-flex flex-column justify-content-between">
                    <div>
                        <div class="card-img-slider-wrap position-relative rounded-4 overflow-hidden mb-3">
                            <span
                                class="discount-badge position-absolute top-0 end-0 m-3 z-3 fs-8 fw-bold text-dark px-2 py-1 rounded-3">
                                10% OFF
                            </span>
                            <div class="inner-card-slider">
                                <div><img src="img/product.png" alt="Delta Kite 1"
                                        class="img-fluid w-100 card-slide-img"></div>
                                <div><img src="img/product1.png" alt="Delta Kite 2"
                                        class="img-fluid w-100 card-slide-img"></div>
                                <div><img src="img/product2.png" alt="Delta Kite 3"
                                        class="img-fluid w-100 card-slide-img"></div>
                                <div><img src="img/product3.png" alt="Delta Kite 4"
                                        class="img-fluid w-100 card-slide-img"></div>
                            </div>
                        </div>

                        <div class="card-body-content">
                            <div class="d-flex align-items-center gap-1 mb-1">
                                <i class="fa-solid fa-star fs-8 text-cyan"></i>
                                <span class="fs-8 fw-semibold text-white">5.0</span>
                            </div>
                            <h3 class="product-title text-white fw-bold fs-5 mb-1 primary-bold-font">
                                Airplane Kids Kite
                            </h3>
                            <p class="product-desc text-white-50 fs-8 mb-3 para-font">
                                Lorem Ipsum Dolor Sit Amet,
                            </p>
                        </div>
                    </div>

                    <div class="d-flex align-items-center justify-content-between pt-2">
                        <div class="price-wrap">
                            <span class="current-price text-white fw-bold fs-5 primary-bold-font">$57.99</span>
                            <span class="old-price text-white-50 text-decoration-line-through fs-8 ms-1">$66.99</span>
                        </div>
                        <a href="#"
                            class="cart-btn rounded-circle d-flex align-items-center justify-content-center text-white text-decoration-none">
                            <i class="fa-solid fa-cart-shopping fs-7"></i>
                        </a>
                    </div>
                </div>
            </div>

            <!-- Product Card 4 -->
            <div class="col-xl-3 col-lg-4 col-sm-6">
                <div
                    class="product-card rounded-4 overflow-hidden p-3 h-100 d-flex flex-column justify-content-between">
                    <div>
                        <div class="card-img-slider-wrap position-relative rounded-4 overflow-hidden mb-3">
                            <span
                                class="discount-badge position-absolute top-0 end-0 m-3 z-3 fs-8 fw-bold text-dark px-2 py-1 rounded-3">
                                10% OFF
                            </span>
                            <div class="inner-card-slider">
                                <div><img src="img/product.png" alt="Delta Kite 1"
                                        class="img-fluid w-100 card-slide-img"></div>
                                <div><img src="img/product1.png" alt="Delta Kite 2"
                                        class="img-fluid w-100 card-slide-img"></div>
                                <div><img src="img/product2.png" alt="Delta Kite 3"
                                        class="img-fluid w-100 card-slide-img"></div>
                                <div><img src="img/product3.png" alt="Delta Kite 4"
                                        class="img-fluid w-100 card-slide-img"></div>
                            </div>
                        </div>

                        <div class="card-body-content">
                            <div class="d-flex align-items-center gap-1 mb-1">
                                <i class="fa-solid fa-star fs-8 text-cyan"></i>
                                <span class="fs-8 fw-semibold text-white">5.0</span>
                            </div>
                            <h3 class="product-title text-white fw-bold fs-5 mb-1 primary-bold-font">
                                Cross Diamond Kite
                            </h3>
                            <p class="product-desc text-white-50 fs-8 mb-3 para-font">
                                Lorem Ipsum Dolor Sit Amet,
                            </p>
                        </div>
                    </div>

                    <div class="d-flex align-items-center justify-content-between pt-2">
                        <div class="price-wrap">
                            <span class="current-price text-white fw-bold fs-5 primary-bold-font">$57.99</span>
                            <span class="old-price text-white-50 text-decoration-line-through fs-8 ms-1">$66.99</span>
                        </div>
                        <a href="#"
                            class="cart-btn rounded-circle d-flex align-items-center justify-content-center text-white text-decoration-none">
                            <i class="fa-solid fa-cart-shopping fs-7"></i>
                        </a>
                    </div>
                </div>
            </div>

        </div>

        <!-- Bottom Center Orange Button -->
        <div class="text-center mt-5">
            <a href="#" class="btn">
                View All <i class="fa-solid fa-arrow-right ms-4"></i>
            </a>
        </div>

    </div>
</section>
<!-- Featured Products Section End -->
<!-- Kites In The Wild Slider Section Start -->
<section class="wild-kites-sec py-5 overflow-hidden">
    <div class="container py-lg-4">

        <!-- Header Row with Dynamic Counter -->
        <div class="d-flex align-items-end justify-content-between mb-4">
            <div>
                <span class="sub-title text-uppercase tracking-widest text-cyan fw-bold fs-8 d-block mb-2">
                    IN MOTION
                </span>
                <h2 class="section-title display-5 fw-bold text-white mb-0 secondary-medium-font">
                    Kites in the wild.
                </h2>
            </div>

            <!-- Dynamic Counter GSAP Target -->
            <div class="slider-counter text-white-50 fs-7 fw-semibold tracking-wider">
                <span id="current-slide">01</span> / <span id="total-slides">06</span>
            </div>
        </div>

        <!-- GSAP Slider Wrapper -->
        <div class="gsap-slider-container position-relative">
            <div class="gsap-slider-track d-flex gap-4" id="sliderTrack">

                <!-- Slide 1 -->
                <div class="wild-slide-item rounded-5 overflow-hidden position-relative flex-shrink-0">
                    <img src="img/family.png" alt="Sunset rituals" class="slide-bg-img">
                    <div class="slide-content p-4 p-md-5 d-flex flex-column justify-content-end">
                        <span
                            class="category-tag text-uppercase text-cyan fs-8 fw-bold tracking-wider mb-2">BEACH</span>
                        <h3 class="slide-title text-white  display-6 mb-0">Sunset rituals on the coast</h3>
                    </div>
                </div>

                <!-- Slide 2 -->
                <div class="wild-slide-item rounded-5 overflow-hidden position-relative flex-shrink-0">
                    <img src="img/kites-flying-bg.png" alt="Slow motion" class="slide-bg-img">
                    <div class="slide-content p-4 p-md-5 d-flex flex-column justify-content-end">
                        <span
                            class="category-tag text-uppercase text-cyan fs-8 fw-bold tracking-wider mb-2">BACKYARD</span>
                        <h3 class="slide-title text-white  display-6 mb-0">Slow motion, high sky</h3>
                    </div>
                </div>

                <!-- Slide 3 -->
                <div class="wild-slide-item rounded-5 overflow-hidden position-relative flex-shrink-0">
                    <img src="img/family.png" alt="Festival skies" class="slide-bg-img">
                    <div class="slide-content p-4 p-md-5 d-flex flex-column justify-content-end">
                        <span
                            class="category-tag text-uppercase text-cyan fs-8 fw-bold tracking-wider mb-2">FESTIVAL</span>
                        <h3 class="slide-title text-white  display-6 mb-0">Color choreography in wind</h3>
                    </div>
                </div>

                <!-- Slide 4 -->
                <div class="wild-slide-item rounded-5 overflow-hidden position-relative flex-shrink-0">
                    <img src="img/kites-flying-bg.png" alt="Mountain flight" class="slide-bg-img">
                    <div class="slide-content p-4 p-md-5 d-flex flex-column justify-content-end">
                        <span
                            class="category-tag text-uppercase text-cyan fs-8 fw-bold tracking-wider mb-2">RIDGE</span>
                        <h3 class="slide-title text-white  display-6 mb-0">Ridge soaring above clouds</h3>
                    </div>
                </div>

                <!-- Slide 5 -->
                <div class="wild-slide-item rounded-5 overflow-hidden position-relative flex-shrink-0">
                    <img src="img/collection-img2.png" alt="Coastal breeze" class="slide-bg-img">
                    <div class="slide-content p-4 p-md-5 d-flex flex-column justify-content-end">
                        <span
                            class="category-tag text-uppercase text-cyan fs-8 fw-bold tracking-wider mb-2">COAST</span>
                        <h3 class="slide-title text-white  display-6 mb-0">Chasing coastal breezes</h3>
                    </div>
                </div>

                <!-- Slide 6 -->
                <div class="wild-slide-item rounded-5 overflow-hidden position-relative flex-shrink-0">
                    <img src="img/family.png" alt="Dusk flight" class="slide-bg-img">
                    <div class="slide-content p-4 p-md-5 d-flex flex-column justify-content-end">
                        <span class="category-tag text-uppercase text-cyan fs-8 fw-bold tracking-wider mb-2">DUSK</span>
                        <h3 class="slide-title text-white  display-6 mb-0">Nightfall lights & shadows</h3>
                    </div>
                </div>

            </div>
        </div>

        <!-- Bottom Line Indicator & Nav Controls -->
        <div class="d-flex align-items-center justify-content-between mt-4 pt-2">
            <div class="slider-progress-bar position-relative flex-grow-1 me-4">
                <div class="progress-fill" id="progressFill"></div>
            </div>

            <!-- Optional Nav Arrows -->
            <div class="d-flex gap-2">
                <button class="nav-btn rounded-circle border-0 text-white" id="prevBtn"><i
                        class="fa-solid fa-arrow-left"></i></button>
                <button class="nav-btn rounded-circle border-0 text-white" id="nextBtn"><i
                        class="fa-solid fa-arrow-right"></i></button>
            </div>
        </div>

    </div>
</section>
<!-- Kites In The Wild Slider Section End -->
<!-- Bundle Builder Section Start -->
<section class="bundle-builder-sec py-5 position-relative">
    <div class="position-absolute kite-right-wraaa">
        <img src="img/kite-group.png" class="img-fluid" alt="">
    </div>
    <div class="container py-lg-4">

        <!-- Main Card Wrapper with 3 Glow Spheres -->
        <div class="bundle-card-wrapper position-relative overflow-hidden rounded-5 p-4 p-md-5">

            <!-- 3 Background Ambient Glows -->
            <div class="glow-spot glow-cyan-left"></div>
            <div class="glow-spot glow-orange-top-right"></div>
            <div class="glow-spot glow-purple-bottom-right"></div>

            <!-- Card Content Grid -->
            <div class="row align-items-center g-4 g-lg-5 position-relative z-2">

                <!-- Left Column: Information & Filter Buttons -->
                <div class="col-lg-6">
                    <div class="bundle-left-info pe-lg-3">

                        <!-- Badge -->
                        <div class="d-inline-flex align-items-center gap-2 px-3 py-1 rounded-pill tag-badge mb-4">
                            <span class="text-cyan fs-8 fw-bold">#</span>
                            <span class="text-white-50 fs-8 fw-semibold text-uppercase tracking-wider">BUILD YOUR WIND
                                KIT™</span>
                        </div>

                        <!-- Main Title -->
                        <h2 class="display-4 fw-bold text-white mb-3 heading-font">
                            Bundle<br>
                            Your Perfect Flight.
                        </h2>

                        <!-- Description -->
                        <p class="text-white-50 fs-7 para-font mb-4 pe-xl-4">
                            Mix and match a kite, reel, line, tail and bag — pricing updates as you go. Pick four or
                            more and save <strong class="text-warning fw-bold">15%</strong> instantly.
                        </p>

                        <!-- Filter Pill Buttons -->
                        <div class="d-flex flex-wrap gap-2 pt-2">
                            <button class="btn filter-pill-btn pill-sport active">SPORT</button>
                            <button class="btn filter-pill-btn pill-delta">DELTA</button>
                            <button class="btn filter-pill-btn pill-foil">FOIL</button>
                        </div>

                    </div>
                </div>

                <!-- Right Column: Interactive Glass Item List -->
                <div class="col-lg-6">
                    <div class="bundle-glass-panel p-4 p-md-4 rounded-4 position-relative">

                        <!-- Selected Item 1 -->
                        <div
                            class="bundle-item item-selected rounded-4 p-3 mb-3 d-flex align-items-center justify-content-between">
                            <div class="d-flex align-items-center gap-3">
                                <div
                                    class="item-check-icon rounded-circle d-flex align-items-center justify-content-center">
                                    <i class="fa-solid fa-check fs-8"></i>
                                </div>
                                <div>
                                    <h4 class="item-name text-white fs-6 fw-bold mb-0">
                                        Stunt Kite <span
                                            class="badge text-warning bg-transparent border border-warning fs-9 py-0 ms-1 fw-normal">BASE</span>
                                    </h4>
                                    <span class="item-sub text-white-50 fs-8">Dual-line, 1.8m wingspan</span>
                                </div>
                            </div>
                            <span class="item-price text-white fw-bold fs-6">$89</span>
                        </div>

                        <!-- Selected Item 2 -->
                        <div
                            class="bundle-item item-selected rounded-4 p-3 mb-3 d-flex align-items-center justify-content-between">
                            <div class="d-flex align-items-center gap-3">
                                <div
                                    class="item-check-icon rounded-circle d-flex align-items-center justify-content-center">
                                    <i class="fa-solid fa-check fs-8"></i>
                                </div>
                                <div>
                                    <h4 class="item-name text-white fs-6 fw-bold mb-0">Aluminum Reel</h4>
                                    <span class="item-sub text-white-50 fs-8">Smooth release, locking grip</span>
                                </div>
                            </div>
                            <span class="item-price text-white fw-bold fs-6">$24</span>
                        </div>

                        <!-- Selected Item 3 -->
                        <div
                            class="bundle-item item-selected rounded-4 p-3 mb-3 d-flex align-items-center justify-content-between">
                            <div class="d-flex align-items-center gap-3">
                                <div
                                    class="item-check-icon rounded-circle d-flex align-items-center justify-content-center">
                                    <i class="fa-solid fa-check fs-8"></i>
                                </div>
                                <div>
                                    <h4 class="item-name text-white fs-6 fw-bold mb-0">100m Dyneema Line</h4>
                                    <span class="item-sub text-white-50 fs-8">Low-stretch, high-strength</span>
                                </div>
                            </div>
                            <span class="item-price text-white fw-bold fs-6">$18</span>
                        </div>

                        <!-- Unselected Item 4 -->
                        <div
                            class="bundle-item item-unselected rounded-4 p-3 mb-3 d-flex align-items-center justify-content-between">
                            <div class="d-flex align-items-center gap-3">
                                <div
                                    class="item-plus-icon rounded-circle d-flex align-items-center justify-content-center">
                                    <i class="fa-solid fa-plus fs-8"></i>
                                </div>
                                <div>
                                    <h4 class="item-name text-white-50 fs-6 fw-medium mb-0">Festival Tail</h4>
                                    <span class="item-sub text-white-50 fs-8 opacity-75">12m rainbow streamer</span>
                                </div>
                            </div>
                            <span class="item-price text-white-50 fs-6">$22</span>
                        </div>

                        <!-- Unselected Item 5 -->
                        <div
                            class="bundle-item item-unselected rounded-4 p-3 mb-4 d-flex align-items-center justify-content-between">
                            <div class="d-flex align-items-center gap-3">
                                <div
                                    class="item-plus-icon rounded-circle d-flex align-items-center justify-content-center">
                                    <i class="fa-solid fa-plus fs-8"></i>
                                </div>
                                <div>
                                    <h4 class="item-name text-white-50 fs-6 fw-medium mb-0">Travel Bag</h4>
                                    <span class="item-sub text-white-50 fs-8 opacity-75">Padded, festival-ready</span>
                                </div>
                            </div>
                            <span class="item-price text-white-50 fs-6">$35</span>
                        </div>

                        <hr class="border-secondary opacity-25 mb-4">

                        <!-- Pricing Summary Row -->
                        <div class="d-flex align-items-end justify-content-between mb-4">
                            <div>
                                <span
                                    class="text-uppercase text-white-50 fs-8 fw-bold tracking-wider d-block mb-1">SUBTOTAL</span>
                                <span class="fs-4 fw-bold text-white">$131</span>
                            </div>
                            <div class="text-end">
                                <span class="text-uppercase text-white-50 fs-8 fw-bold tracking-wider d-block mb-1">YOUR
                                    KIT</span>
                                <span class="display-6 fw-bold text-gradient-orange">$131</span>
                            </div>
                        </div>

                        <!-- CTA Button -->
                        <a href="#" class="btn wrapper-cartbest">
                            Build & Shop the Kit <i class="fa-solid fa-arrow-right ms-4"></i>
                        </a>

                    </div>
                </div>

            </div>
        </div>

    </div>
</section>
<!-- Bundle Builder Section End -->
<!-- Why Choose Us Section Start -->
<section class="why-sky-sec py-5 position-relative overflow-hidden">
    <!-- Top Ambient Lighting Glow -->
    <div class="sky-top-glow position-absolute"></div>

    <div class="container py-lg-4 position-relative z-2">

        <!-- Section Header -->
        <div class="text-center mb-5">
            <span class="sub-title text-uppercase tracking-widest text-cyan-light fw-semibold fs-8 d-block mb-2">
                WHY KITEFLYERSHOP
            </span>
            <h2 class="section-title display-5 fw-bold text-white mb-2 heading-font">
                Built for people<br>who love the sky.
            </h2>
            <p class="section-desc text-white-50 fs-7 para-font mb-0">
                The details that make every flight feel premium.
            </p>
        </div>

        <!-- 3x2 Feature Cards Grid -->
        <div class="row g-4">

            <!-- Card 1: 13+ years experience -->
            <div class="col-lg-4 col-md-6">
                <div class="why-feature-card rounded-5 p-4 h-100 d-flex flex-column justify-content-between">
                    <div>
                        <div
                            class="card-icon-badge rounded-circle d-flex align-items-center justify-content-center bg-cyan text-dark mb-4">
                            <i class="fa-solid fa-ribbon fs-7 text-white"></i>
                        </div>
                        <h3 class="card-title text-white fw-bold fs-5 mb-2 primary-bold-font">
                            13+ years experience
                        </h3>
                        <p class="card-desc text-white-50 fs-7 mb-0 para-font">
                            A decade of curating the best wind gear.
                        </p>
                    </div>
                </div>
            </div>

            <!-- Card 2: Premium brands (Active / Highlighted Blur Glow) -->
            <div class="col-lg-4 col-md-6">
                <div
                    class="why-feature-card why-card-active rounded-5 p-4 h-100 d-flex flex-column justify-content-between">
                    <div>
                        <div
                            class="card-icon-badge rounded-circle d-flex align-items-center justify-content-center bg-orange text-white mb-4">
                            <i class="fa-solid fa-wand-magic-sparkles "></i>
                        </div>
                        <h3 class="card-title text-white  fs-5 mb-2 ">
                            Premium brands
                        </h3>
                        <p class="card-desc text-white-50 fs-7 mb-0 para-font">
                            Only trusted, festival-ready quality.
                        </p>
                    </div>
                </div>
            </div>

            <!-- Card 3: Fast shipping -->
            <div class="col-lg-4 col-md-6">
                <div class="why-feature-card rounded-5 p-4 h-100 d-flex flex-column justify-content-between">
                    <div>
                        <div
                            class="card-icon-badge rounded-circle d-flex align-items-center justify-content-center bg-cyan text-dark mb-4">
                            <i class="fa-solid fa-truck-fast fs-7 text-white"></i>
                        </div>
                        <h3 class="card-title text-white  fs-5 mb-2 ">
                            Fast shipping
                        </h3>
                        <p class="card-desc text-white-50 fs-7 mb-0 para-font">
                            Dispatched daily so you don't miss the wind.
                        </p>
                    </div>
                </div>
            </div>

            <!-- Card 4: Huge selection -->
            <div class="col-lg-4 col-md-6">
                <div class="why-feature-card rounded-5 p-4 h-100 d-flex flex-column justify-content-between">
                    <div>
                        <div
                            class="card-icon-badge rounded-circle d-flex align-items-center justify-content-center bg-cyan text-dark mb-4">
                            <i class="fa-solid fa-shield-halved fs-7 text-white"></i>
                        </div>
                        <h3 class="card-title text-white  fs-5 mb-2 ">
                            Huge selection
                        </h3>
                        <p class="card-desc text-white-50 fs-7 mb-0 para-font">
                            From beginner deltas to pro stunt kites.
                        </p>
                    </div>
                </div>
            </div>

            <!-- Card 5: Festival-ready -->
            <div class="col-lg-4 col-md-6">
                <div class="why-feature-card rounded-5 p-4 h-100 d-flex flex-column justify-content-between">
                    <div>
                        <div
                            class="card-icon-badge rounded-circle d-flex align-items-center justify-content-center bg-cyan text-dark mb-4">
                            <i class="fa-solid fa-users-viewfinder fs-7 text-white"></i>
                        </div>
                        <h3 class="card-title text-white  fs-5 mb-2 ">
                            Festival-ready
                        </h3>
                        <p class="card-desc text-white-50 fs-7 mb-0 para-font">
                            Loved by competitors and casual flyers alike.
                        </p>
                    </div>
                </div>
            </div>

            <!-- Card 6: Expert support -->
            <div class="col-lg-4 col-md-6">
                <div class="why-feature-card rounded-5 p-4 h-100 d-flex flex-column justify-content-between">
                    <div>
                        <div
                            class="card-icon-badge rounded-circle d-flex align-items-center justify-content-center bg-cyan text-dark mb-4">
                            <i class="fa-regular fa-heart fs-7 text-white"></i>
                        </div>
                        <h3 class="card-title text-white  fs-5 mb-2 ">
                            Expert support
                        </h3>
                        <p class="card-desc text-white-50 fs-7 mb-0 para-font">
                            Real flyers behind every conversation.
                        </p>
                    </div>
                </div>
            </div>

        </div>

    </div>
</section>
<!-- Why Choose Us Section End -->
<!-- Sky Community Section Start -->
<section class="sky-community-sec position-relative overflow-hidden py-5">

    <!-- Dark Background Image & Overlay -->
    <div class="sky-bg-overlay"></div>
    <img src="img/kites-flying-bg.png" alt="Sky Background" class="sky-bg-img">

    <div class="container py-lg-5 position-relative z-2">
        <div class="row align-items-center min-vh-75">

            <!-- Left Side Content Column -->
            <div class="col-lg-6 col-xl-7">
                <div class="community-content pe-xl-4">

                    <!-- Tag Badge -->
                    <div class="d-inline-flex align-items-center gap-2 px-3 py-1 rounded-pill community-tag mb-4">
                        <i class="fa-solid fa-flag text-cyan fs-8"></i>
                        <span class="text-uppercase tracking-wider text-white-50 fs-8 fw-semibold">KITE FESTIVALS</span>
                    </div>

                    <!-- Main Heading -->
                    <h2 class="display-4 fw-bold text-white mb-3 heading-font">
                        More than a hobby<br>
                        <span class=" gradient-text-orange">A sky-filled community.</span>
                    </h2>

                    <!-- Subtitle / Description -->
                    <p class="text-white-50 fs-7 para-font mb-4 max-w-500">
                        From international fly-ins to neighborhood meet-ups, we celebrate every kind of sky. Discover
                        events, competitions and the people who keep the wind alive.
                    </p>

                    <!-- CTA Buttons -->
                    <div class="d-flex flex-wrap gap-3 mb-5">
                        <a href="#"
                            class="btn extra-color-8 rounded-pill px-4 py-2-5 fw-bold fs-7 d-inline-flex align-items-center gap-2">
                            Explore festivals <i class="fa-solid fa-arrow-right fs-8"></i>
                        </a>
                        <a href="#"
                            class="btn btn-glass-map rounded-pill px-4 py-2-5 fw-medium fs-7 text-white d-inline-flex align-items-center gap-2">
                            <i class="fa-solid fa-location-dot text-cyan fs-8"></i> Festival map
                        </a>
                    </div>

                    <!-- 4 Glassmorphism Stats Cards -->
                    <div class="row g-3">

                        <!-- Stat 1 -->
                        <div class="col-6 col-sm-3">
                            <div class="stat-glass-card p-3 rounded-4">
                                <h3 class="stat-number text-white fw-bold fs-4 mb-1">120+</h3>
                                <span
                                    class="stat-label text-uppercase text-white-50 fs-9 tracking-wider fw-semibold d-block">FESTIVALS
                                    TRACKED</span>
                            </div>
                        </div>

                        <!-- Stat 2 -->
                        <div class="col-6 col-sm-3">
                            <div class="stat-glass-card p-3 rounded-4">
                                <h3 class="stat-number text-white fw-bold fs-4 mb-1">32</h3>
                                <span
                                    class="stat-label text-uppercase text-white-50 fs-9 tracking-wider fw-semibold d-block">COUNTRIES</span>
                            </div>
                        </div>

                        <!-- Stat 3 -->
                        <div class="col-6 col-sm-3">
                            <div class="stat-glass-card p-3 rounded-4">
                                <h3 class="stat-number text-white fw-bold fs-4 mb-1">8</h3>
                                <span
                                    class="stat-label text-uppercase text-white-50 fs-9 tracking-wider fw-semibold d-block">MAJOR
                                    FLY-INS / YR</span>
                            </div>
                        </div>

                        <!-- Stat 4 -->
                        <div class="col-6 col-sm-3">
                            <div class="stat-glass-card p-3 rounded-4">
                                <h3 class="stat-number text-white fw-bold fs-4 mb-1">1M+</h3>
                                <span
                                    class="stat-label text-uppercase text-white-50 fs-9 tracking-wider fw-semibold d-block">KITES
                                    IN THE SKY</span>
                            </div>
                        </div>

                    </div>

                </div>
            </div>

            <!-- Right Side Image Graphic Column (3 Kites Floating) -->
            <div class="col-lg-6 col-xl-5  mt-5 position-relative mt-lg-0">
                <div class="right-kites-wrapper ">

                    <!-- Kite 1: Red (Left Floating) -->
                    <img src="img/three-kite.png" alt="Red Kite"
                        class="floating-kite kite-red  position-absolute-kite-wraaa">

                </div>
            </div>

        </div>
    </div>
</section>
<!-- Sky Community Section End -->
<!-- Adventure Timeline Section Start -->
<section class="timeline-sec py-5 position-relative overflow-hidden" id="timelineSec">
    <div class="container py-lg-5">

        <!-- Header -->
        <div class="text-center mb-5">
            <span class="sub-title text-uppercase tracking-widest text-cyan fw-bold fs-8 d-block mb-2">
                ADVENTURE TIMELINE
            </span>
            <h2 class="display-4 fw-bold text-white mb-3 heading-font">
                From first lift<br>to festival sky.
            </h2>
            <p class="text-white-50 fs-7 para-font mb-0">
                A path every flyer follows — at their own pace, on their own wind.
            </p>
        </div>

        <!-- Horizontal Timeline Wrapper -->
        <div class="timeline-wrapper position-relative my-5 pt-3">

            <!-- GSAP Animated Connecting Line -->
            <div class="timeline-line-bg position-absolute">
                <div class="timeline-line-progress position-absolute" id="timelineProgress"></div>
            </div>

            <!-- Timeline Nodes Container -->
            <div class="row g-4 justify-content-between position-relative z-2">

                <!-- Node 1 -->
                <div class="col-6 col-md-2-4 timeline-node">
                    <div class="d-flex flex-column align-items-center text-center">
                        <div
                            class="node-icon-box position-relative d-flex align-items-center justify-content-center bg-white mb-4">
                            <i class="fa-solid fa-compass text-cyan fs-5"></i>
                            <span class="node-badge-dot position-absolute"></span>
                        </div>
                        <h3 class="node-title text-white  fs-6 mb-2">Choose A Kite</h3>
                        <p class="node-desc text-white-50 fs-8 mb-0">From classic deltas to pro stunt rigs.</p>
                    </div>
                </div>

                <!-- Node 2 -->
                <div class="col-6 col-md-2-4 timeline-node">
                    <div class="d-flex flex-column align-items-center text-center">
                        <div
                            class="node-icon-box position-relative d-flex align-items-center justify-content-center bg-white mb-4">
                            <i class="fa-solid fa-wind text-cyan fs-5"></i>
                            <span class="node-badge-dot position-absolute"></span>
                        </div>
                        <h3 class="node-title text-white  fs-6 mb-2">Find Wind</h3>
                        <p class="node-desc text-white-50 fs-8 mb-0">Beach, park, ridge — wherever it blows.</p>
                    </div>
                </div>

                <!-- Node 3 -->
                <div class="col-6 col-md-2-4 timeline-node">
                    <div class="d-flex flex-column align-items-center text-center">
                        <div
                            class="node-icon-box position-relative d-flex align-items-center justify-content-center bg-white mb-4">
                            <img src="img/sparker.png" class="img-fluid" alt="">
                            <span class="node-badge-dot position-absolute"></span>
                        </div>
                        <h3 class="node-title text-white  fs-6 mb-2">Take Flight</h3>
                        <p class="node-desc text-white-50 fs-8 mb-0">Launch, climb, settle into the lift.</p>
                    </div>
                </div>

                <!-- Node 4 -->
                <div class="col-6 col-md-2-4 timeline-node">
                    <div class="d-flex flex-column align-items-center text-center">
                        <div
                            class="node-icon-box position-relative d-flex align-items-center justify-content-center bg-white mb-4">
                            <i class="fa-solid fa-ribbon text-cyan fs-5"></i>
                            <span class="node-badge-dot position-absolute"></span>
                        </div>
                        <h3 class="node-title text-white  fs-6 mb-2">Master Tricks</h3>
                        <p class="node-desc text-white-50 fs-8 mb-0">Loops, dives, choreographed runs.</p>
                    </div>
                </div>

                <!-- Node 5 -->
                <div class="col-6 col-md-2-4 timeline-node">
                    <div class="d-flex flex-column align-items-center text-center">
                        <div
                            class="node-icon-box position-relative d-flex align-items-center justify-content-center bg-white mb-4">
                            <i class="fa-solid fa-flag text-cyan fs-5"></i>
                            <span class="node-badge-dot position-absolute"></span>
                        </div>
                        <h3 class="node-title text-white  fs-6 mb-2">Join Festivals</h3>
                        <p class="node-desc text-white-50 fs-8 mb-0">Fly with thousands under one sky.</p>
                    </div>
                </div>

            </div>
        </div>

    </div>
</section>
<!-- Adventure Timeline Section End -->
<!-- Windsocks & Wind Art Hero Section Start -->
<section class="wind-art-sec py-5 position-relative overflow-hidden">
    <div class="container py-lg-5">
        <div class="row align-items-center g-4 g-lg-5">

            <!-- Left Side Content Column -->
            <div class="col-lg-6">
                <div class="wind-art-content pe-xl-3">

                    <!-- Subtitle -->
                    <span class="sub-title text-uppercase tracking-widest text-cyan fw-bold fs-8 d-block mb-3">
                        WINDSOCKS & WIND ART
                    </span>

                    <!-- Heading -->
                    <h2 class="display-4 fw-bold text-white mb-3 heading-font">
                        Wind,<br>
                        made <span class="text-gradient-orange111">beautiful.</span>
                    </h2>

                    <!-- Paragraph -->
                    <p class="text-white-50 fs-7 para-font mb-4 max-w-480">
                        Our windsocks, garden spinners and windmills bring slow, hypnotic motion to any outdoor space.
                        Hand-finished, weatherproof, built to spin for seasons.
                    </p>

                    <!-- Buttons -->
                    <div class="d-flex flex-wrap gap-3">
                        <a href="#" class="btn btn-cyan-pill rounded-pill px-4 py-2-5 fw-semibold fs-7">
                            Shop spinners
                        </a>
                        <a href="#" class="btn btn-white-pill rounded-pill px-4 py-2-5 fw-semibold fs-7 text-dark">
                            Shop windsocks
                        </a>
                    </div>

                </div>
            </div>

            <!-- Right Side Image Column -->
            <div class="col-lg-6">
                <div class="wind-art-img-wrapper position-relative rounded-5 overflow-hidden">

                    <!-- Main Showcase Image -->
                    <img src="img/madewind1.png" alt="Garden Wind Art"
                        class="w-100 h-100 object-fit-cover d-block">

                    <!-- Floating Top Right Wind Badge Icon -->
                    <div
                        class="wind-floating-badge rounded-circle d-flex align-items-center justify-content-center position-absolute shadow-sm">
                        <i class="fa-solid fa-wind text-cyan fs-6"></i>
                    </div>

                </div>
            </div>

        </div>
    </div>
</section>
<!-- Windsocks & Wind Art Hero Section End -->
<!-- Testimonial Section Start -->
<section class="flyer-stories-sec py-5 position-relative overflow-hidden">
    <div class="container py-lg-5">
        <div class="row align-items-center g-4 g-lg-5">

            <!-- Left Side Dual Art Cards Column -->
            <div class="col-lg-6">
                <div class="d-flex gap-2 gap-md-2 align-items-center justify-content-center">

                    <!-- Left Artwork Card (Shifted Down) -->
                    <div class="art-card art-card-left rounded-5 overflow-hidden shadow-lg">
                        <img src="img/whatfly1.png" alt="Sky Artwork" class="w-100 h-100 object-fit-cover">
                    </div>

                    <!-- Right Artwork Card (Shifted Up) -->
                    <div class="art-card art-card-right rounded-5 overflow-hidden shadow-lg">
                        <img src="img/whatfly.png" alt="Pattern Artwork" class="w-100 h-100 object-fit-cover">
                    </div>

                </div>
            </div>

            <!-- Right Side Testimonial Carousel Column -->
            <div class="col-lg-6">
                <div class="testimonial-content-wrapper ps-xl-3">

                    <!-- Section Header -->
                    <span class="sub-title text-uppercase tracking-widest text-cyan fw-bold fs-8 d-block mb-2">
                        CUSTOMER STORIES
                    </span>
                    <h2 class="display-5 fw-bold text-white mb-4 heading-font">
                        What Flyers<br>Say.
                    </h2>

                    <!-- Bootstrap Carousel / Testimonial Slider -->
                    <div id="testimonialCarousel" class="carousel slide" data-bs-ride="carousel">
                        <div class="carousel-inner">

                            <!-- Slide 1 -->
                            <div class="carousel-item active">
                                <div class="testimonial-card position-relative">

                                    <!-- User Info & Quote Icon Row -->
                                    <div class="d-flex align-items-center justify-content-between mb-3">
                                        <div class="d-flex align-items-center gap-3">
                                            <img src="img/avatar.png" alt="John Walker"
                                                class="user-avatar rounded-circle border border-2 border-cyan">
                                            <div>
                                                <h4 class="user-name text-white fs-6 fw-bold mb-0">John Walker</h4>
                                                <span class="user-tag text-white-50 fs-8">Kites</span>
                                            </div>
                                        </div>

                                        <!-- Orange Dual Quote Icon (Font Awesome 6) -->
                                        <div class="quote-icon text-orange display-6">
                                            <i class="fa-solid fa-quote-right"></i>
                                        </div>
                                    </div>

                                    <!-- Headline & Review Body -->
                                    <h3 class="review-title text-white fs-6  mb-2">
                                        Parents + Families Kids Kites Lover
                                    </h3>
                                    <p class="review-text text-white-50 fs-7 para-font mb-3">
                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                                        incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis
                                        nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                                    </p>

                                    <!-- Font Awesome 6 Rating Stars -->
                                    <div class="star-rating d-flex gap-1 mb-4 text-orange">
                                        <i class="fa-solid fa-star extra-color-11"></i>
                                        <i class="fa-solid fa-star extra-color-11"></i>
                                        <i class="fa-solid fa-star extra-color-11"></i>
                                        <i class="fa-solid fa-star extra-color-11"></i>
                                        <i class="fa-solid fa-star extra-color-11"></i>
                                    </div>

                                </div>
                            </div>

                            <!-- Slide 2 -->
                            <div class="carousel-item">
                                <div class="testimonial-card position-relative">
                                    <div class="d-flex align-items-center justify-content-between mb-3">
                                        <div class="d-flex align-items-center gap-3">
                                            <img src="img/avatar.png" alt="Sarah Jenkins"
                                                class="user-avatar rounded-circle border border-2 border-cyan">
                                            <div>
                                                <h4 class="user-name text-white fs-6 fw-bold mb-0">Sarah Jenkins</h4>
                                                <span class="user-tag text-white-50 fs-8">Festival Flyer</span>
                                            </div>
                                        </div>
                                        <div class="quote-icon text-orange display-6">
                                            <i class="fa-solid fa-quote-right"></i>
                                        </div>
                                    </div>
                                    <h3 class="review-title text-white fs-6  mb-2">
                                        Unmatched Craftsmanship & Flight Control
                                    </h3>
                                    <p class="review-text text-white-50 fs-7 para-font mb-3">
                                        The wind response and build quality are phenomenal. Every festival trip with
                                        these kites turns heads. Absolutely recommended for beginners and experts alike!
                                    </p>
                                    <div class="star-rating d-flex gap-1 mb-4 text-orange">
                                        <i class="fa-solid fa-star extra-color-11"></i>
                                        <i class="fa-solid fa-star extra-color-11"></i>
                                        <i class="fa-solid fa-star extra-color-11"></i>
                                        <i class="fa-solid fa-star extra-color-11"></i>
                                        <i class="fa-solid fa-star extra-color-11"></i>
                                    </div>
                                </div>
                            </div>

                        </div>

                        <!-- Carousel Controls (Optional Dots/Indicators) -->
                        <div class="carousel-indicators position-relative justify-content-start m-0 mb-4">
                            <button type="button" data-bs-target="#testimonialCarousel" data-bs-slide-to="0"
                                class="active" aria-current="true"></button>
                            <button type="button" data-bs-target="#testimonialCarousel" data-bs-slide-to="1"></button>
                        </div>
                    </div>

                    <!-- Bottom White Glass Satisfaction Stat Badge -->
                    <div
                        class="stat-satisfaction-pill bg-white rounded-5 p-3 p-md-3-5 text-dark d-inline-flex align-items-center justify-content-between w-100 max-w-450 shadow-lg">
                        <div>
                            <h3 class="stat-value fw-bold fs-4 mb-0 text-dark">99% Satisfied</h3>
                            <p class="stat-desc text-muted fs-8 mb-0">Lorem ipsum dolor sit amet, consectetur
                                adipiscing.</p>
                        </div>

                        <!-- Avatar Overlap Stack -->
                        <div class="avatar-group d-flex align-items-center ms-3">
                            <img src="img/avatar.png" alt="User" class="stack-avatar rounded-circle">
                            <img src="img/avatar1.png" alt="User" class="stack-avatar rounded-circle">
                            <img src="img/avatar2.png" alt="User" class="stack-avatar rounded-circle">
                        </div>
                    </div>

                </div>
            </div>

        </div>
    </div>
</section>
<!-- Testimonial Section End -->
<!-- Community Gallery Section Start -->
<section class="community-gallery-sec py-5 position-relative overflow-hidden">
    <div class="container py-lg-5">

        <!-- Section Header -->
        <div class="text-center mb-5">
            <span class="sub-title text-uppercase tracking-widest text-cyan fw-bold fs-8 d-block mb-2">
                @KITEFLYERSHOP
            </span>
            <h2 class="display-4 fw-bold text-white mb-2 heading-font">
                From the community.
            </h2>
            <p class="text-white-50 fs-7 para-font mb-0">
                Tag us in your sky moments — we feature our favorites every week.
            </p>
        </div>

        <!-- Custom Gallery Layout Grid -->
        <div class="community-grid-container">

            <!-- Left Tall Card -->
            <div class="gallery-item item-tall-left rounded-5 overflow-hidden shadow-lg">
                <img src="img/shopkite3.png" alt="Kites on beach sunset" class="gallery-img">
                <div class="gallery-hover-overlay"></div>
            </div>

            <!-- Middle Grid Top Left -->
            <div class="gallery-item item-mid-1 rounded-5 overflow-hidden shadow-lg">
                <img src="img/shopkite2.png" alt="Kite festival crowd" class="gallery-img">
                <div class="gallery-hover-overlay"></div>
            </div>

            <!-- Middle Grid Top Right -->
            <div class="gallery-item item-mid-2 rounded-5 overflow-hidden shadow-lg">
                <img src="img/shopkite1.png" alt="Garden spinners" class="gallery-img">
                <div class="gallery-hover-overlay"></div>
            </div>

            <!-- Middle Grid Bottom Left -->
            <div class="gallery-item item-mid-3 rounded-5 overflow-hidden shadow-lg">
                <img src="img/shopkite.png" alt="Kids running on beach" class="gallery-img">
                <div class="gallery-hover-overlay"></div>
            </div>

            <!-- Middle Grid Bottom Right -->
            <div class="gallery-item item-mid-4 rounded-5 overflow-hidden shadow-lg">
                <img src="img/shopkite3.png" alt="Sunrise kite flying" class="gallery-img">
                <div class="gallery-hover-overlay"></div>
            </div>

            <!-- Right Tall Card -->
            <div class="gallery-item item-tall-right rounded-5 overflow-hidden shadow-lg">
                <img src="img/shopkite3.png" alt="Cyan sky kite flight" class="gallery-img">
                <div class="gallery-hover-overlay"></div>
            </div>

        </div>

    </div>
</section>
<!-- Community Gallery Section End -->
<!-- Learning Hub Section Start -->
<section class="learning-hub-sec py-5 position-relative overflow-hidden" id="learningHubSec">
    <div class="container py-lg-5">

        <!-- Header -->
        <div class="text-center mb-5">
            <span class="sub-title text-uppercase tracking-widest text-cyan fw-bold fs-8 d-block mb-2">
                LEARNING HUB
            </span>
            <h2 class="display-4 fw-bold text-white mb-2 heading-font">
                Fly smarter, fly higher.
            </h2>
            <p class="text-white-50 fs-7 para-font mb-0">
                Guides, tips and tutorials from a decade of flying.
            </p>
        </div>

        <!-- 4 Column Cards Row -->
        <div class="row g-4 justify-content-center">

            <!-- Card 1 -->
            <div class="col-12 col-sm-6 col-lg-3 hub-card-col">
                <div class="hub-card p-4 rounded-4 position-relative d-flex flex-column h-100">
                    <span class="hub-tag text-uppercase text-cyan fw-bold fs-9 mb-3 d-block">
                        START HERE
                    </span>
                    <div
                        class="hub-icon-box rounded-circle bg-white d-flex align-items-center justify-content-center mb-4">
                        <i class="fa-solid fa-graduation-cap text-dark fs-6"></i>
                    </div>
                    <h3 class="hub-title text-white fw-bold fs-6 mb-2">Beginner's Guide</h3>
                    <p class="hub-desc text-white-50 fs-8 mb-4 flex-grow-1">
                        Pick your first kite, learn launch basics, fly safe.
                    </p>
                    <a href="#"
                        class="hub-link text-white text-decoration-none fs-8 fw-semibold d-inline-flex align-items-center gap-2">
                        Read guide <i class="fa-solid fa-arrow-right fs-9 link-arrow"></i>
                    </a>
                </div>
            </div>

            <!-- Card 2 -->
            <div class="col-12 col-sm-6 col-lg-3 hub-card-col">
                <div class="hub-card p-4 rounded-4 position-relative d-flex flex-column h-100">
                    <span class="hub-tag text-uppercase text-cyan fw-bold fs-9 mb-3 d-block">
                        CONDITIONS
                    </span>
                    <div
                        class="hub-icon-box rounded-circle bg-white d-flex align-items-center justify-content-center mb-4">
                        <i class="fa-solid fa-wind text-dark fs-6"></i>
                    </div>
                    <h3 class="hub-title text-white fw-bold fs-6 mb-2">Best Wind Conditions</h3>
                    <p class="hub-desc text-white-50 fs-8 mb-4 flex-grow-1">
                        How to read wind, weather and beach forecasts.
                    </p>
                    <a href="#"
                        class="hub-link text-white text-decoration-none fs-8 fw-semibold d-inline-flex align-items-center gap-2">
                        Read guide <i class="fa-solid fa-arrow-right fs-9 link-arrow"></i>
                    </a>
                </div>
            </div>

            <!-- Card 3 -->
            <div class="col-12 col-sm-6 col-lg-3 hub-card-col">
                <div class="hub-card p-4 rounded-4 position-relative d-flex flex-column h-100">
                    <span class="hub-tag text-uppercase text-cyan fw-bold fs-9 mb-3 d-block">
                        TECHNIQUE
                    </span>
                    <div
                        class="hub-icon-box rounded-circle bg-white d-flex align-items-center justify-content-center mb-4">
                        <i class="fa-solid fa-wand-magic-sparkles text-dark fs-6"></i>
                    </div>
                    <h3 class="hub-title text-white fw-bold fs-6 mb-2">Stunt Tricks 101</h3>
                    <p class="hub-desc text-white-50 fs-8 mb-4 flex-grow-1">
                        Loops, dives and figure-8s explained step by step.
                    </p>
                    <a href="#"
                        class="hub-link text-white text-decoration-none fs-8 fw-semibold d-inline-flex align-items-center gap-2">
                        Read guide <i class="fa-solid fa-arrow-right fs-9 link-arrow"></i>
                    </a>
                </div>
            </div>

            <!-- Card 4 -->
            <div class="col-12 col-sm-6 col-lg-3 hub-card-col">
                <div class="hub-card p-4 rounded-4 position-relative d-flex flex-column h-100">
                    <span class="hub-tag text-uppercase text-cyan fw-bold fs-9 mb-3 d-block">
                        TRAVEL
                    </span>
                    <div
                        class="hub-icon-box rounded-circle bg-white d-flex align-items-center justify-content-center mb-4">
                        <i class="fa-solid fa-calendar-days text-dark fs-6"></i>
                    </div>
                    <h3 class="hub-title text-white fw-bold fs-6 mb-2">Festival Prep</h3>
                    <p class="hub-desc text-white-50 fs-8 mb-4 flex-grow-1">
                        What to pack, where to go, how to fly in formation.
                    </p>
                    <a href="#"
                        class="hub-link text-white text-decoration-none fs-8 fw-semibold d-inline-flex align-items-center gap-2">
                        Read guide <i class="fa-solid fa-arrow-right fs-9 link-arrow"></i>
                    </a>
                </div>
            </div>

        </div>

    </div>
</section>
<!-- Learning Hub Section End -->
<!-- Newsletter Banner Section Start -->
<section class="newsletter-banner-sec py-5 position-relative overflow-hidden" id="newsletterSec">
    <div class="container py-lg-4">

        <!-- Centered Banner Card with Background Image -->
        <div
            class="newsletter-card position-relative rounded-5 overflow-hidden shadow-lg mx-auto py-5 px-4 px-md-5 text-center">

            <!-- Soft Overlay for Content Readability -->
            <div class="card-bg-overlay position-absolute top-0 start-0 w-100 h-100"></div>

            <!-- Card Content Content Wrapper -->
            <div class="newsletter-content position-relative z-2 py-md-3">

                <!-- Envelope Icon -->
                <div class="mail-icon-box mb-3 d-inline-block">
                    <i class="fa-regular fa-envelope fs-4 text-navy"></i>
                </div>

                <!-- Main Heading -->
                <h2 class="display-5 fw-bold text-navy mb-3 heading-font max-w-650 mx-auto">
                    Get wind alerts, festival news &amp; new kite drops.
                </h2>

                <!-- Subtext -->
                <p class="text-navy-muted fs-7 para-font mb-4 max-w-550 mx-auto fw-medium">
                    10% off your first order. Exclusive launches. Festival announcements.
                </p>

                <!-- Input & Subscribe Form -->
                <form
                    class="newsletter-form d-flex flex-column flex-sm-row justify-content-center align-items-center gap-2 max-w-500 mx-auto"
                    onsubmit="event.preventDefault();">

                    <div class="input-wrapper w-100">
                        <input type="email"
                            class="form-control form-control-lg rounded-pill px-4 text-center text-sm-start fs-7"
                            placeholder="you@windyemail.com" required>
                    </div>

                    <button type="submit"
                        class="btn btn-navy-pill rounded-pill px-4 py-2-5 fw-semibold fs-7 text-nowrap w-100 w-sm-auto">
                        Subscribe
                    </button>

                </form>

            </div>

        </div>

    </div>
</section>
<!-- Newsletter Banner Section End -->
<!-- Body Content End Here -->

<!-- Footer Include Here -->
<?php include 'inc/footer.php'; ?>
<!-- Footer Include Here -->


<script>
document.addEventListener("DOMContentLoaded", function() {
    gsap.registerPlugin(Draggable);

    const track = document.getElementById("sliderTrack");
    const slides = document.querySelectorAll(".wild-slide-item");
    const currentSlideText = document.getElementById("current-slide");
    const totalSlidesText = document.getElementById("total-slides");
    const progressFill = document.getElementById("progressFill");

    const totalSlides = slides.length;
    let currentIndex = 0;

    totalSlidesText.textContent = totalSlides < 10 ? `0${totalSlides}` : totalSlides;

    function getSlideWidth() {
        const gap = 24; // Equivalent to gap-4 (1.5rem)
        return slides[0].getBoundingClientRect().width + gap;
    }

    function updateSlider(index, animate = true) {
        currentIndex = Math.max(0, Math.min(index, totalSlides - 1));
        const moveX = -(currentIndex * getSlideWidth());

        if (animate) {
            gsap.to(track, {
                x: moveX,
                duration: 0.5,
                ease: "power2.out",
                overwrite: "auto"
            });
        } else {
            gsap.set(track, {
                x: moveX
            });
        }

        const formattedIndex = (currentIndex + 1) < 10 ? `0${currentIndex + 1}` : (currentIndex + 1);
        currentSlideText.textContent = formattedIndex;

        const progressPercentage = ((currentIndex + 1) / totalSlides) * 100;
        gsap.to(progressFill, {
            width: `${progressPercentage}%`,
            duration: 0.3,
            overwrite: "auto"
        });
    }

    // Draggable Configuration optimized for smoothness
    let draggableInstance = Draggable.create(track, {
        type: "x",
        inertia: true,
        bounds: {
            minX: -((totalSlides - 1) * getSlideWidth()),
            maxX: 0
        },
        onDrag: function() {
            // Realtime tracking chhod kar smooth feel ke liye
        },
        onDragEnd: function() {
            const slideWidth = getSlideWidth();
            const nearestIndex = Math.round(-this.x / slideWidth);
            updateSlider(nearestIndex);
        }
    })[0];

    // Arrow Nav Controls
    document.getElementById("nextBtn").addEventListener("click", () => {
        if (currentIndex < totalSlides - 1) {
            updateSlider(currentIndex + 1);
            draggableInstance.update();
        }
    });

    document.getElementById("prevBtn").addEventListener("click", () => {
        if (currentIndex > 0) {
            updateSlider(currentIndex - 1);
            draggableInstance.update();
        }
    });

    // Handle Window Resize smoothly
    let resizeTimer;
    window.addEventListener("resize", () => {
        clearTimeout(resizeTimer);
        resizeTimer = setTimeout(() => {
            draggableInstance.applyBounds({
                minX: -((totalSlides - 1) * getSlideWidth()),
                maxX: 0
            });
            updateSlider(currentIndex, false);
            draggableInstance.update();
        }, 150);
    });
});
</script>