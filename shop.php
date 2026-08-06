<!-- App Include Here -->
<?php 
$headerClasslink = 'header-classlinkmenu';
$headerClass = 'header-absolute';
$logoImg = 'img/inner-logo.png'; // Yahan apna inner page wala logo ka path dalein
include 'inc/app.php'; 
?>

<!-- Body Content Start Here -->

<!-- banner Include Here  -->
<?php
$pageTitle = "Shop";
include 'inc/sub-banner.php';
?>
<!-- banner Include End Here  -->

<style>
    /* Shop Section Styling */
    .shop-section {
        background-color: #050b14;
        color: #fff;
        padding: 60px 0;
    }
    
    /* Filter Bar Header Layout (Tabs + Search) */
    .shop-filter-bar {
        display: flex;
        justify-content: space-between;
        align-items: center;
        flex-wrap: wrap;
        gap: 20px;
        margin-bottom: 40px;
    }

    /* Bootstrap Custom Tabs Styling */
    .shop-tabs {
        border: none;
        display: flex;
        flex-wrap: wrap;
        gap: 10px;
        margin-bottom: 0;
        justify-content: flex-start;
    }
    .shop-tabs .nav-link {
        background-color: #0d1b2a;
        color: #a0abbb;
        border: 1px solid rgba(255, 255, 255, 0.05);
        padding: 10px 24px;
        border-radius: 30px;
        font-size: 14px;
        font-weight: 500;
        transition: all 0.3s ease;
    }
    .shop-tabs .nav-link.active, .shop-tabs .nav-link:hover {
        background-color: #ff4500; /* Image ke mutabiq active orange/red ya cyan color */
        color: #fff;
        border-color: #ff4500;
    }

    /* Search Bar Styling matching the image */
    .shop-search-wrap {
        position: relative;
    }
    .shop-search-wrap input {
        background-color: #050b14;
        border: 1px solid rgba(255, 255, 255, 0.15);
        padding: 10px 20px 10px 45px;
        border-radius: 30px;
        color: #fff;
        font-size: 14px;
        width: 260px;
        outline: none;
        transition: border-color 0.3s;
    }
    .shop-search-wrap input:focus {
        border-color: #00bcd4;
    }
    .shop-search-wrap input::placeholder {
        color: #6c757d;
    }
    .shop-search-wrap i {
        position: absolute;
        left: 18px;
        top: 50%;
        transform: translateY(-50%);
        color: #6c757d;
        font-size: 14px;
    }
</style>

<!-- Product Section with Bootstrap Tabs Start Here -->
<section class="shop-section">
    <div class="container">
        
        <!-- Filter Bar: Tabs and Search Box in one row -->
        <div class="shop-filter-bar">
            <!-- Bootstrap Nav Tabs -->
            <ul class="nav nav-tabs shop-tabs" id="shopTab" role="tablist">
                <li class="nav-item" role="presentation">
                    <button class="nav-link active" id="all-tab" data-bs-toggle="tab" data-bs-target="#all-pane" type="button" role="tab" aria-controls="all-pane" aria-selected="true">All</button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link" id="stunt-tab" data-bs-toggle="tab" data-bs-target="#stunt-pane" type="button" role="tab" aria-controls="stunt-pane" aria-selected="false">Stunt</button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link" id="delta-tab" data-bs-toggle="tab" data-bs-target="#delta-pane" type="button" role="tab" aria-controls="delta-pane" aria-selected="false">Delta</button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link" id="foil-tab" data-bs-toggle="tab" data-bs-target="#foil-pane" type="button" role="tab" aria-controls="foil-pane" aria-selected="false">Foil</button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link" id="spinners-tab" data-bs-toggle="tab" data-bs-target="#spinners-pane" type="button" role="tab" aria-controls="spinners-pane" aria-selected="false">Wind Spinners</button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link" id="windsocks-tab" data-bs-toggle="tab" data-bs-target="#windsocks-pane" type="button" role="tab" aria-controls="windsocks-pane" aria-selected="false">Windsocks</button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link" id="accessories-tab" data-bs-toggle="tab" data-bs-target="#accessories-pane" type="button" role="tab" aria-controls="accessories-pane" aria-selected="false">Accessories</button>
                </li>
            </ul>

            <!-- Search Box -->
            <div class="shop-search-wrap">
                <i class="fa-solid fa-magnifying-glass"></i>
                <input type="text" placeholder="Search kites, spinners...">
            </div>
        </div>

        <!-- Bootstrap Tab Content -->
        <div class="tab-content" id="shopTabContent">
            <!-- All Tab Pane -->
            <div class="tab-pane fade show active" id="all-pane" role="tabpanel" aria-labelledby="all-tab">
               <!-- Main Product Cards Grid -->
               <div class="row g-4">

            <!-- Product Card 1 -->
            <div class="col-xl-3 col-lg-4 col-sm-6">
                <a href="product-detail">
                <div class="product-card rounded-4 overflow-hidden p-3 h-100 d-flex flex-column justify-content-between">
                    <div>
                        <!-- Inner Card Image Slider -->
                        <div class="card-img-slider-wrap position-relative rounded-4 overflow-hidden mb-3">
                            <!-- Discount Badge Overlay -->
                            <span class="discount-badge position-absolute top-0 end-0 m-3 z-3 fs-8 fw-bold text-dark px-2 py-1 rounded-3">
                                10% OFF
                            </span>

                            <!-- Inner Slick Slider -->
                            <div class="inner-card-slider">
                                <div><img src="img/product.png" alt="Delta Kite 1" class="img-fluid w-100 card-slide-img"></div>
                                <div><img src="img/product1.png" alt="Delta Kite 2" class="img-fluid w-100 card-slide-img"></div>
                                <div><img src="img/product2.png" alt="Delta Kite 3" class="img-fluid w-100 card-slide-img"></div>
                                <div><img src="img/product3.png" alt="Delta Kite 4" class="img-fluid w-100 card-slide-img"></div>
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
                        <a href="#" class="cart-btn rounded-circle d-flex align-items-center justify-content-center text-white text-decoration-none">
                            <i class="fa-solid fa-cart-shopping fs-7"></i>
                        </a>
                    </div>
                </div>
                </a>
            </div>

            <!-- Product Card 2 -->
            <div class="col-xl-3 col-lg-4 col-sm-6">
                <div class="product-card rounded-4 overflow-hidden p-3 h-100 d-flex flex-column justify-content-between">
                    <div>
                        <div class="card-img-slider-wrap position-relative rounded-4 overflow-hidden mb-3">
                            <span class="discount-badge position-absolute top-0 end-0 m-3 z-3 fs-8 fw-bold text-dark px-2 py-1 rounded-3">
                                10% OFF
                            </span>
                            <div class="inner-card-slider">
                                <div><img src="img/product.png" alt="Delta Kite 1" class="img-fluid w-100 card-slide-img"></div>
                                <div><img src="img/product1.png" alt="Delta Kite 2" class="img-fluid w-100 card-slide-img"></div>
                                <div><img src="img/product2.png" alt="Delta Kite 3" class="img-fluid w-100 card-slide-img"></div>
                                <div><img src="img/product3.png" alt="Delta Kite 4" class="img-fluid w-100 card-slide-img"></div>
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
                        <a href="#" class="cart-btn rounded-circle d-flex align-items-center justify-content-center text-white text-decoration-none">
                            <i class="fa-solid fa-cart-shopping fs-7"></i>
                        </a>
                    </div>
                </div>
            </div>

            <!-- Product Card 3 -->
            <div class="col-xl-3 col-lg-4 col-sm-6">
                <div class="product-card rounded-4 overflow-hidden p-3 h-100 d-flex flex-column justify-content-between">
                    <div>
                        <div class="card-img-slider-wrap position-relative rounded-4 overflow-hidden mb-3">
                            <span class="discount-badge position-absolute top-0 end-0 m-3 z-3 fs-8 fw-bold text-dark px-2 py-1 rounded-3">
                                10% OFF
                            </span>
                            <div class="inner-card-slider">
                                <div><img src="img/product.png" alt="Delta Kite 1" class="img-fluid w-100 card-slide-img"></div>
                                <div><img src="img/product1.png" alt="Delta Kite 2" class="img-fluid w-100 card-slide-img"></div>
                                <div><img src="img/product2.png" alt="Delta Kite 3" class="img-fluid w-100 card-slide-img"></div>
                                <div><img src="img/product3.png" alt="Delta Kite 4" class="img-fluid w-100 card-slide-img"></div>
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
                        <a href="#" class="cart-btn rounded-circle d-flex align-items-center justify-content-center text-white text-decoration-none">
                            <i class="fa-solid fa-cart-shopping fs-7"></i>
                        </a>
                    </div>
                </div>
            </div>

            <!-- Product Card 4 -->
            <div class="col-xl-3 col-lg-4 col-sm-6">
                <div class="product-card rounded-4 overflow-hidden p-3 h-100 d-flex flex-column justify-content-between">
                    <div>
                        <div class="card-img-slider-wrap position-relative rounded-4 overflow-hidden mb-3">
                            <span class="discount-badge position-absolute top-0 end-0 m-3 z-3 fs-8 fw-bold text-dark px-2 py-1 rounded-3">
                                10% OFF
                            </span>
                            <div class="inner-card-slider">
                                <div><img src="img/product.png" alt="Delta Kite 1" class="img-fluid w-100 card-slide-img"></div>
                                <div><img src="img/product1.png" alt="Delta Kite 2" class="img-fluid w-100 card-slide-img"></div>
                                <div><img src="img/product2.png" alt="Delta Kite 3" class="img-fluid w-100 card-slide-img"></div>
                                <div><img src="img/product3.png" alt="Delta Kite 4" class="img-fluid w-100 card-slide-img"></div>
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
                        <a href="#" class="cart-btn rounded-circle d-flex align-items-center justify-content-center text-white text-decoration-none">
                            <i class="fa-solid fa-cart-shopping fs-7"></i>
                        </a>
                    </div>
                </div>
            </div>

        </div>
            </div>

            <!-- Stunt Tab Pane -->
            <div class="tab-pane fade" id="stunt-pane" role="tabpanel" aria-labelledby="stunt-tab">
                <div class="row g-4">
                    <!-- Stunt Products Content Here -->
                </div>
            </div>

            <!-- Delta Tab Pane -->
            <div class="tab-pane fade" id="delta-pane" role="tabpanel" aria-labelledby="delta-tab">
                <div class="row g-4">
                    <!-- Delta Products Content Here -->
                </div>
            </div>

            <!-- Foil Tab Pane -->
            <div class="tab-pane fade" id="foil-pane" role="tabpanel" aria-labelledby="foil-tab">
                <div class="row g-4"></div>
            </div>

            <!-- Wind Spinners Tab Pane -->
            <div class="tab-pane fade" id="spinners-pane" role="tabpanel" aria-labelledby="spinners-tab">
                <div class="row g-4"></div>
            </div>

            <!-- Windsocks Tab Pane -->
            <div class="tab-pane fade" id="windsocks-pane" role="tabpanel" aria-labelledby="windsocks-tab">
                <div class="row g-4"></div>
            </div>

            <!-- Accessories Tab Pane -->
            <div class="tab-pane fade" id="accessories-pane" role="tabpanel" aria-labelledby="accessories-tab">
                <div class="row g-4"></div>
            </div>
        </div>
    </div>
</section>
<!-- Product Section with Bootstrap Tabs End Here -->

<!-- Body Content End Here -->

<!-- Footer Include Here -->
<?php include 'inc/footer.php'; ?>
<!-- Footer Include Here -->