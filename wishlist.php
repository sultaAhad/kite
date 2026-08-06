<!-- App Include Here -->
<?php 
$headerClasslink = 'header-classlinkmenu';
$headerClass = 'header-absolute';
$logoImg = 'img/inner-logo.png'; 
include 'inc/app.php'; 
?>

<!-- Body Content Start Here -->

<!-- banner Include Here  -->
<?php
$pageTitle = "My Wishlist";
include 'inc/sub-banner.php';
?>
<!-- banner Include End Here  -->

<style>
    .wishlist-section {
        background-color: #050b14;
        color: #fff;
        padding: 80px 0;
        min-height: 60vh;
    }
    .wishlist-card {
        background-color: #0d1b2a;
        border: 1px solid rgba(255, 255, 255, 0.08);
        border-radius: 16px;
        padding: 20px;
        position: relative;
        transition: transform 0.3s ease, box-shadow 0.3s ease;
        height: 100%;
        display: flex;
        flex-direction: column;
    }
    .wishlist-card:hover {
        transform: translateY(-5px);
        box-shadow: 0 10px 25px rgba(0, 0, 0, 0.4);
        border-color: rgba(255, 69, 0, 0.3);
    }
    .remove-wishlist-btn {
        position: absolute;
        top: 15px;
        right: 15px;
        width: 32px;
        height: 32px;
        border-radius: 50%;
        background: rgba(255, 255, 255, 0.1);
        color: #a0abbb;
        border: none;
        display: flex;
        align-items: center;
        justify-content: center;
        cursor: pointer;
        transition: all 0.3s ease;
        z-index: 2;
    }
    .remove-wishlist-btn:hover {
        background: #ff4500;
        color: #fff;
    }
    .wishlist-img-box {
        aspect-ratio: 4/3;
        border-radius: 12px;
        overflow: hidden;
        background-color: #050b14;
        margin-bottom: 15px;
        position: relative;
    }
    .wishlist-img-box img {
        width: 100%;
        height: 100%;
        object-fit: cover;
        transition: transform 0.5s ease;
    }
    .wishlist-card:hover .wishlist-img-box img {
        transform: scale(1.05);
    }
    .wishlist-title {
        font-size: 18px;
        font-weight: 600;
        color: #fff;
        margin-bottom: 8px;
        text-decoration: none;
        display: block;
        transition: color 0.3s;
    }
    .wishlist-title:hover {
        color: #ff4500;
    }
    .wishlist-price {
        font-size: 16px;
        font-weight: 700;
        color: #ff7a00;
        margin-bottom: 15px;
    }
    .wishlist-price span {
        font-size: 13px;
        color: #6c757d;
        text-decoration: line-through;
        margin-left: 8px;
    }
    .stock-badge {
        font-size: 11px;
        padding: 4px 10px;
        border-radius: 20px;
        font-weight: 600;
        display: inline-block;
        margin-bottom: 15px;
    }
    .stock-in {
        background: rgba(40, 167, 69, 0.15);
        color: #28a745;
    }
    .stock-out {
        background: rgba(220, 53, 69, 0.15);
        color: #dc3545;
    }
    .action-btn {
        background: linear-gradient(90deg, #ff7a00 0%, #ff4500 100%);
        color: #fff;
        border: none;
        width: 100%;
        padding: 10px;
        border-radius: 25px;
        font-weight: 600;
        font-size: 14px;
        cursor: pointer;
        transition: opacity 0.3s;
        text-align: center;
        text-decoration: none;
        margin-top: auto;
    }
    .action-btn:hover {
        opacity: 0.9;
        color: #fff;
    }
    .action-btn.disabled {
        background: #2a3746;
        color: #6c757d;
        cursor: not-allowed;
        pointer-events: none;
    }
    
    /* Empty Wishlist Styling */
    .empty-wishlist {
        text-align: center;
        padding: 60px 20px;
    }
    .empty-wishlist i {
        font-size: 60px;
        color: #a0abbb;
        margin-bottom: 20px;
        opacity: 0.5;
    }
    .empty-wishlist h3 {
        color: #fff;
        font-weight: 700;
        margin-bottom: 10px;
    }
    .empty-wishlist p {
        color: #a0abbb;
        margin-bottom: 25px;
    }
</style>

<section class="wishlist-section">
    <div class="container">
        
        <!-- Wishlist Grid -->
        <div class="row g-4" id="wishlistContainer">
            
            <!-- Item 1 -->
            <div class="col-lg-3 col-md-4 col-sm-6 wishlist-item">
                <div class="wishlist-card">
                    <button type="button" class="remove-wishlist-btn" title="Remove from wishlist" onclick="removeItem(this)">
                        <i class="fa-solid fa-xmark"></i>
                    </button>
                    <div class="wishlist-img-box">
                        <img src="img/collection-img.png" alt="Product Image">
                    </div>
                    <div>
                        <span class="stock-badge stock-in">In Stock</span>
                    </div>
                    <a href="product-detail.php" class="wishlist-title">Delta Kite
</a>
                    <div class="wishlist-price">$129.00 <span>$159.00</span></div>
                    <button type="button" class="action-btn">Add to Cart</button>
                </div>
            </div>

            <!-- Item 2 -->
            <div class="col-lg-3 col-md-4 col-sm-6 wishlist-item">
                <div class="wishlist-card">
                    <button type="button" class="remove-wishlist-btn" title="Remove from wishlist" onclick="removeItem(this)">
                        <i class="fa-solid fa-xmark"></i>
                    </button>
                    <div class="wishlist-img-box">
                        <img src="img/collection-img.png" alt="Product Image">
                    </div>
                    <div>
                        <span class="stock-badge stock-in">In Stock</span>
                    </div>
                    <a href="product-detail.php" class="wishlist-title">Bird Kids Kite
</a>
                    <div class="wishlist-price">$89.00</div>
                    <button type="button" class="action-btn">Add to Cart</button>
                </div>
            </div>

            <!-- Item 3 -->
            <div class="col-lg-3 col-md-4 col-sm-6 wishlist-item">
                <div class="wishlist-card">
                    <button type="button" class="remove-wishlist-btn" title="Remove from wishlist" onclick="removeItem(this)">
                        <i class="fa-solid fa-xmark"></i>
                    </button>
                    <div class="wishlist-img-box">
                        <img src="img/collection-img.png" alt="Product Image">
                    </div>
                    <div>
                        <span class="stock-badge stock-out">Out of Stock</span>
                    </div>
                    <a href="product-detail.php" class="wishlist-title">Airplane Kids Kite
</a>
                    <div class="wishlist-price">$199.00</div>
                    <button type="button" class="action-btn disabled">Out of Stock</button>
                </div>
            </div>

            <!-- Item 4 -->
            <div class="col-lg-3 col-md-4 col-sm-6 wishlist-item">
                <div class="wishlist-card">
                    <button type="button" class="remove-wishlist-btn" title="Remove from wishlist" onclick="removeItem(this)">
                        <i class="fa-solid fa-xmark"></i>
                    </button>
                    <div class="wishlist-img-box">
                        <img src="img/collection-img.png" alt="Product Image">
                    </div>
                    <div>
                        <span class="stock-badge stock-in">In Stock</span>
                    </div>
                    <a href="product-detail.php" class="wishlist-title">Cross Diamond Kite
</a>
                    <div class="wishlist-price">$249.00 <span>$299.00</span></div>
                    <button type="button" class="action-btn">Add to Cart</button>
                </div>
            </div>

        </div>

        <!-- Empty Wishlist State (Hidden by default) -->
        <div class="empty-wishlist d-none" id="emptyWishlist">
            <i class="fa-regular fa-heart"></i>
            <h3>Your Wishlist is Empty</h3>
            <p>Explore our products and save your favorite items here!</p>
            <div class="d-flex justify-content-center">
                <a href="shop.php" class="action-btn px-5" style="width: auto;">Continue Shopping</a>
            </div>
        </div>

    </div>
</section>

<script>
function removeItem(button) {
    const item = button.closest('.wishlist-item');
    item.style.transition = 'opacity 0.3s ease, transform 0.3s ease';
    item.style.opacity = '0';
    item.style.transform = 'scale(0.9)';

    setTimeout(() => {
        item.remove();
        checkEmptyState();
    }, 300);
}

function checkEmptyState() {
    const container = document.getElementById('wishlistContainer');
    const emptyState = document.getElementById('emptyWishlist');
    const items = container.querySelectorAll('.wishlist-item');

    if (items.length === 0) {
        container.classList.add('d-none');
        emptyState.classList.remove('d-none');
    }
}
</script>

<!-- Body Content End Here -->

<!-- Footer Include Here -->
<?php include 'inc/footer.php'; ?>