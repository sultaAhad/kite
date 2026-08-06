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
$pageTitle = "Shopping Cart";
include 'inc/sub-banner.php';
?>
<!-- banner Include End Here  -->

<style>
    .cart-section {
        background-color: #050b14;
        color: #fff;
        padding: 80px 0;
    }
    .cart-table {
        width: 100%;
        border-collapse: separate;
        border-spacing: 0 15px;
    }
    .cart-table th {
        color: #a0abbb;
        font-size: 14px;
        font-weight: 600;
        padding: 0 20px 10px 20px;
        text-transform: uppercase;
    }
    .cart-table tr.cart-item-row {
        background-color: #0d1b2a;
        border-radius: 15px;
    }
    .cart-table td {
        padding: 20px;
        vertical-align: middle;
        color: #fff;
    }
    .cart-table td:first-child {
        border-top-left-radius: 15px;
        border-bottom-left-radius: 15px;
    }
    .cart-table td:last-child {
        border-top-right-radius: 15px;
        border-bottom-right-radius: 15px;
    }
    .cart-product-info {
        display: flex;
        align-items: center;
        gap: 20px;
    }
    .cart-product-info img {
        width: 70px;
        height: 70px;
        object-fit: cover;
        border-radius: 10px;
        background-color: #050b14;
    }
    .cart-product-info h5 {
        font-size: 16px;
        font-weight: 700;
        margin-bottom: 5px;
        color: #fff;
    }
    .cart-product-info span {
        font-size: 13px;
        color: #a0abbb;
    }
    
    /* Quantity Counter inside Cart */
    .quantity-counter {
        display: flex;
        align-items: center;
        background-color: #ffffff;
        border-radius: 30px;
        padding: 4px 12px;
        width: 110px;
        justify-content: space-between;
    }
    .quantity-counter button {
        background: none;
        border: none;
        color: #000;
        font-size: 14px;
        cursor: pointer;
        font-weight: bold;
    }
    .quantity-counter input {
        background: none;
        border: none;
        color: #000;
        text-align: center;
        width: 30px;
        font-weight: 600;
        outline: none;
    }
    
    .remove-btn {
        background: none;
        border: none;
        color: #ff4500;
        font-size: 18px;
        cursor: pointer;
        transition: opacity 0.3s;
    }
    .remove-btn:hover {
        opacity: 0.8;
    }
    
    /* Cart Summary Card */
    .cart-summary-card {
        background-color: #0d1b2a;
        border: 1px solid rgba(255, 255, 255, 0.08);
        border-radius: 20px;
        padding: 30px;
        margin-top: 30px;
    }
    .cart-summary-card h4 {
        font-size: 20px;
        font-weight: 700;
        margin-bottom: 20px;
        color: #fff;
    }
    .summary-item {
        display: flex;
        justify-content: space-between;
        margin-bottom: 15px;
        font-size: 14px;
        color: #a0abbb;
    }
    .summary-item.total {
        font-size: 18px;
        font-weight: 700;
        color: #fff;
        border-top: 1px solid rgba(255, 255, 255, 0.1);
        padding-top: 15px;
        margin-top: 15px;
    }
    .summary-item.total span:last-child {
        color: #00bcd4;
    }
    .checkout-btn {
        background: linear-gradient(90deg, #ff7a00 0%, #ff4500 100%);
        color: #fff;
        border: none;
        width: 100%;
        padding: 12px;
        border-radius: 30px;
        font-weight: 600;
        font-size: 15px;
        cursor: pointer;
        text-decoration: none;
        display: block;
        text-align: center;
        transition: opacity 0.3s;
        margin-top: 20px;
    }
    .checkout-btn:hover {
        opacity: 0.9;
        color: #fff;
    }
</style>

<section class="cart-section">
    <div class="container">
        <div class="row">
            <!-- Cart Items Table -->
            <div class="col-lg-8 mb-4 mb-lg-0">
                <div class="table-responsive">
                    <table class="cart-table">
                        <thead>
                            <tr>
                                <th>Product</th>
                                <th>Price</th>
                                <th>Quantity</th>
                                <th>Subtotal</th>
                                <th><i class="fa-solid fa-trash-can"></i></th>
                            </tr>
                        </thead>
                        <tbody>
                            <!-- Cart Item 1 -->
                            <tr class="cart-item-row">
                                <td>
                                    <div class="cart-product-info">
                                        <img src="img/product.png" alt="Product">
                                        <div>
                                            <h5>Delta Kids Kite</h5>
                                            <span>Size: Standard</span>
                                        </div>
                                    </div>
                                </td>
                                <td class="fw-bold">$44.99</td>
                                <td>
                                    <div class="quantity-counter">
                                        <button type="button">-</button>
                                        <input type="text" value="2" readonly>
                                        <button type="button">+</button>
                                    </div>
                                </td>
                                <td class="fw-bold text-cyan">$89.98</td>
                                <td>
                                    <button class="remove-btn"><i class="fa-solid fa-xmark"></i></button>
                                </td>
                            </tr>
                            <!-- Cart Item 2 -->
                            <tr class="cart-item-row">
                                <td>
                                    <div class="cart-product-info">
                                        <img src="img/product1.png" alt="Product">
                                        <div>
                                            <h5>Bird Kids Kite</h5>
                                            <span>Size: Large</span>
                                        </div>
                                    </div>
                                </td>
                                <td class="fw-bold">$57.99</td>
                                <td>
                                    <div class="quantity-counter">
                                        <button type="button">-</button>
                                        <input type="text" value="1" readonly>
                                        <button type="button">+</button>
                                    </div>
                                </td>
                                <td class="fw-bold text-cyan">$57.99</td>
                                <td>
                                    <button class="remove-btn"><i class="fa-solid fa-xmark"></i></button>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>

            <!-- Cart Summary Sidebar -->
            <div class="col-lg-4">
                <div class="cart-summary-card">
                    <h4>Cart Total</h4>
                    <div class="summary-item">
                        <span>Subtotal</span>
                        <span class="text-white fw-bold">$147.97</span>
                    </div>
                    <div class="summary-item">
                        <span>Shipping Estimate</span>
                        <span class="text-white fw-bold">$10.00</span>
                    </div>
                    <div class="summary-item total">
                        <span>Total Amount</span>
                        <span>$157.97</span>
                    </div>
                    <a href="checkout.php" class="checkout-btn">Proceed To Checkout</a>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Body Content End Here -->

<!-- Footer Include Here -->
<?php include 'inc/footer.php'; ?>