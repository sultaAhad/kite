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
$pageTitle = "Shop Detail";
include 'inc/sub-banner.php';
?>
<!-- banner Include End Here  -->

<style>
/* Shop Detail Section Styling */
.shop-detail-section {
    background-color: #050b14;
    color: #fff;
    padding: 80px 0;
}

/* Swiper Slider Styling */
.shop-detail-slider-wrap {
    display: flex;
    gap: 15px;
    align-items: flex-start;
}

/* Thumbnails Slider */
.shop-thumbs-swiper {
    width: 100px;
    height: 450px;
}

.shop-thumbs-swiper .swiper-slide {
    height: auto;
    opacity: 0.5;
    cursor: pointer;
    border-radius: 12px;
    overflow: hidden;
    border: 2px solid transparent;
    transition: all 0.3s ease;
}

.shop-thumbs-swiper .swiper-slide-thumb-active {
    opacity: 1;
    border-color: #00bcd4;
}

.shop-thumbs-swiper img {
    width: 100%;
    height: 100%;
    object-fit: cover;
}

/* Main Big Image Slider */
.shop-main-swiper {
    flex: 1;
    height: 450px;
    border-radius: 20px;
    overflow: hidden;
    background-color: #0a1424;
}

.shop-main-swiper .swiper-slide img {
    width: 100%;
    height: 100%;
    object-fit: cover;
    border-radius: 20px;
}

/* Product Content Styling */
.product-detail-content .badge-instock {
    background-color: #ff5722;
    color: #fff;
    font-size: 11px;
    font-weight: 600;
    padding: 4px 12px;
    border-radius: 6px;
    text-transform: uppercase;
    display: inline-block;
    margin-bottom: 15px;
}

.product-detail-content h2 {
    font-size: 28px;
    font-weight: 700;
    line-height: 1.4;
    margin-bottom: 15px;
}

.product-detail-content .product-price {
    font-size: 24px;
    font-weight: 700;
    color: #00bcd4;
    margin-bottom: 20px;
}

.product-detail-content p {
    color: #a0abbb;
    font-size: 14px;
    line-height: 1.8;
    margin-bottom: 25px;
}

.product-detail-content .quantity-label {
    font-size: 14px;
    font-weight: 500;
    color: #fff;
    margin-bottom: 8px;
    display: block;
}

/* Quantity Box & Button (Background White) */
.quantity-cart-wrap {
    display: flex;
    align-items: center;
    gap: 20px;
    flex-wrap: wrap;
}

.quantity-counter {
    display: flex;
    align-items: center;
    background-color: #ffffff;
    /* Background white kar diya gaya hai */
    border: 1px solid rgba(255, 255, 255, 0.1);
    border-radius: 30px;
    padding: 5px 15px;
    width: 140px;
    justify-content: space-between;
}

.quantity-counter button {
    background: none;
    border: none;
    color: #000;
    /* Dark text/icons for white background */
    font-size: 16px;
    cursor: pointer;
    font-weight: bold;
}

.quantity-counter input {
    background: none;
    border: none;
    color: #000;
    /* Dark text for white background */
    text-align: center;
    width: 40px;
    font-weight: 600;
    outline: none;
}

.add-to-cart-btn {
    background: linear-gradient(90deg, #ff7a00 0%, #ff4500 100%);
    color: #fff;
    border: none;
    padding: 12px 35px;
    border-radius: 30px;
    font-weight: 600;
    font-size: 15px;
    cursor: pointer;
    text-decoration: none;
    transition: opacity 0.3s;
    display: inline-block;
}

.add-to-cart-btn:hover {
    opacity: 0.9;
    color: #fff;
}
</style>

<!-- Shop Detail Section Start Here -->
<section class="shop-detail-section">
    <div class="container">
        <div class="row align-items-center">

            <!-- Left Side: Swiper Sliders -->
            <div class="col-lg-7 mb-4 mb-lg-0">
                <div class="shop-detail-slider-wrap">



                    <!-- Main Image Swiper -->
                    <div class="swiper shop-main-swiper">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide"><img src="img/shopkite3.png" alt="Main Kite 1"></div>
                            <div class="swiper-slide"><img src="img/product1.png" alt="Main Kite 2"></div>
                            <div class="swiper-slide"><img src="img/product2.png" alt="Main Kite 3"></div>
                            <div class="swiper-slide"><img src="img/product3.png" alt="Main Kite 4"></div>
                            <div class="swiper-slide"><img src="img/product.png" alt="Main Kite 5"></div>
                        </div>
                    </div>
                    <!-- Thumbnails Swiper -->
                    <div class="swiper shop-thumbs-swiper">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide"><img src="img/shopkite3.png" alt="Thumb 1"></div>
                            <div class="swiper-slide"><img src="img/product1.png" alt="Thumb 2"></div>
                            <div class="swiper-slide"><img src="img/product2.png" alt="Thumb 3"></div>
                            <div class="swiper-slide"><img src="img/product3.png" alt="Thumb 4"></div>
                            <div class="swiper-slide"><img src="img/product.png" alt="Thumb 5"></div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Right Side: Product Details & Actions -->
            <div class="col-lg-5">
                <div class="product-detail-content ps-lg-4">
                    <span class="badge-instock">INSTOCK</span>
                    <h2>Delta Kids Kite + RipStop Nylon Material + Line on D-Handle + 2-tails + Bag</h2>
                    <div class="product-price">$44.99</div>
                    <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium,
                        totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae.
                    </p>

                    <span class="quantity-label">Quantity</span>
                    <div class="quantity-cart-wrap">
                        <!-- Quantity Counter with White Background -->
                        <div class="quantity-counter">
                            <button type="button" id="decrease-btn">-</button>
                            <input type="text" id="quantity-input" value="10" readonly>
                            <button type="button" id="increase-btn">+</button>
                        </div>

                        <!-- Add To Cart Button -->
                        <a href="#" class="add-to-cart-btn">Add To Cart</a>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>
<!-- Shop Detail Section End Here -->

<!-- Swiper & Counter Initialization Script -->
<script>
document.addEventListener("DOMContentLoaded", function() {
    // Thumbnail Swiper
    var swiperThumbs = new Swiper(".shop-thumbs-swiper", {
        direction: "vertical",
        spaceBetween: 10,
        slidesPerView: 4,
        freeMode: true,
        watchSlidesProgress: true,
    });

    // Main Swiper
    var swiperMain = new Swiper(".shop-main-swiper", {
        spaceBetween: 10,
        thumbs: {
            swiper: swiperThumbs,
        },
    });

    // Quantity Counter Logic
    const decreaseBtn = document.getElementById("decrease-btn");
    const increaseBtn = document.getElementById("increase-btn");
    const quantityInput = document.getElementById("quantity-input");

    increaseBtn.addEventListener("click", function() {
        let currentValue = parseInt(quantityInput.value);
        quantityInput.value = currentValue + 1;
    });

    decreaseBtn.addEventListener("click", function() {
        let currentValue = parseInt(quantityInput.value);
        if (currentValue > 1) {
            quantityInput.value = currentValue - 1;
        }
    });
});
</script>

<!-- Body Content End Here -->

<!-- Footer Include Here -->
<?php include 'inc/footer.php'; ?>
<!-- Footer Include Here -->