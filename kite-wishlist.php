<?php 
$headerClass = 'header-absolute';
$logoImg = 'img/inner-logo.png';
include 'inc/app.php'; 
?>

<?php
$pageTitle = "Wishlist";
include 'inc/sub-banner.php';
?>

<section class="profile-section py-5">
    <div class="container">
        <div class="row g-4">
            <div class="col-lg-4">
<?php include 'inc/siderbar.php'; ?>            </div>
            <div class="col-lg-8">
                <div class="my-profile-wrapper h-100">
                    <h3 class="heading-italic-font text-white mb-3">My Wishlist</h3>
                    <hr class="mb-4 border-secondary-subtle">

                    <div class="row g-4">
                        <!-- Wishlist Item 1 -->
                        <div class="col-md-6">
                            <div class="wishlist-item-card">
                                <div class="wishlist-img-box mb-3">
                                    <img src="img/toy-product.png" alt="Product" onerror="this.src='https://cdn-icons-png.flaticon.com/512/3082/3082060.png'">
                                    <button class="remove-wish-btn" title="Remove"><i class="fa-solid fa-xmark"></i></button>
                                </div>
                                <h5 class="text-white fw-bold mb-1">Star Wars Ae Toys</h5>
                                <p class="text-muted small mb-3">Size L | Qty Available</p>
                                <div class="d-flex justify-content-between align-items-center">
                                    <span class="price-tag">$550.00</span>
                                    <button class="btn-orange-gradient-pill py-2 px-3 fs-7">Add To Cart</button>
                                </div>
                            </div>
                        </div>

                        <!-- Wishlist Item 2 -->
                        <div class="col-md-6">
                            <div class="wishlist-item-card">
                                <div class="wishlist-img-box mb-3">
                                    <img src="img/toy-product.png" alt="Product" onerror="this.src='https://cdn-icons-png.flaticon.com/512/3082/3082060.png'">
                                    <button class="remove-wish-btn" title="Remove"><i class="fa-solid fa-xmark"></i></button>
                                </div>
                                <h5 class="text-white fw-bold mb-1">Star Wars Ae Toys</h5>
                                <p class="text-muted small mb-3">Size S | Qty Available</p>
                                <div class="d-flex justify-content-between align-items-center">
                                    <span class="price-tag">$550.00</span>
                                    <button class="btn-orange-gradient-pill py-2 px-3 fs-7">Add To Cart</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<style>
.profile-section { background-color: #0b0f19; color: #ffffff; font-family: 'Poppins', sans-serif; }
.my-profile-wrapper { background-color: #121824; border: 1px solid rgba(255, 255, 255, 0.08); border-radius: 20px; padding: 35px; }
.heading-italic-font { font-weight: 900; font-style: italic; text-transform: uppercase; letter-spacing: -0.5px; }
.wishlist-item-card { background-color: #161f2e; border: 1px solid rgba(255, 255, 255, 0.08); border-radius: 15px; padding: 20px; position: relative; }
.wishlist-img-box { height: 160px; background: #1f2937; border-radius: 10px; display: flex; align-items: center; justify-content: center; position: relative; padding: 10px; }
.wishlist-img-box img { max-height: 100%; object-fit: contain; }
.remove-wish-btn { position: absolute; top: 10px; right: 10px; background: rgba(0,0,0,0.6); color: #ff4500; border: none; width: 30px; height: 30px; border-radius: 50%; display: flex; align-items: center; justify-content: center; cursor: pointer; transition: 0.2s; }
.remove-wish-btn:hover { background: #ff4500; color: #fff; }
.price-tag { font-size: 16px; font-weight: 700; color: #ff7a00; }
.btn-orange-gradient-pill { background: linear-gradient(90deg, #ff7a00 0%, #ff4500 100%); color: #ffffff; font-size: 12px; font-weight: 700; border-radius: 30px; border: none; box-shadow: 0 4px 15px rgba(255, 122, 0, 0.3); transition: opacity 0.2s, transform 0.2s; }
.btn-orange-gradient-pill:hover { opacity: 0.9; transform: translateY(-1px); color: #fff; }
</style>

<?php include 'inc/footerlinks.php'; ?>