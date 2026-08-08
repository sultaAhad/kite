<!-- App Include Here -->
<?php 
$headerClasslink = 'header-classlinkmenu';
$headerClass = 'header-absolute';
$logoImg = 'img/inner-logo.png'; // Yahan apna inner page wala logo ka path dalein
include 'inc/app.php'; 
?>
<!-- App Include Here -->

<!-- banner Include Here  -->
<?php
$pageTitle = "Checkout";
include 'inc/sub-banner.php';
?>
<!-- banner Include End Here  -->

<!-- Checkout Section Starts Here -->
<section class="checkout-hub-section">
    <div class="container">

        <!-- 1. Top Notice Bar -->
        <div class="top-auth-notice-bar d-flex flex-wrap justify-content-between align-items-center mb-5">
            <div class="notice-text">
                SIGN IN AS EXSISTING USER OR CONTINUE AS GUEST USER
            </div>
            <div class="auth-actions-toggle d-flex align-items-center">
                <a href="#" class="auth-link">Sign In</a>
                <span class="vertical-divider"></span>
                <a href="#" class="auth-link">Guest User</a>
            </div>
        </div>

        <div class="row g-5">
            <!-- Left Side Forms Layout -->
            <div class="col-lg-8">
                <form id="checkoutMainForm" onsubmit="event.preventDefault();">

                    <!-- ================= SHIPPING DETAILS ================= -->
                    <div class="checkout-block-group mb-5">
                        <h3 class="checkout-section-title">SHIPPING DETAILS</h3>

                        <div class="row g-4 mb-3">
                            <!-- Active Address (My Home) -->
                            <div class="col-md-6">
                                <label class="address-select-card active-state">
                                    <input type="radio" name="shipping_address" value="home" checked
                                        class="address-radio-input">
                                    <div class="address-card-header d-flex justify-content-between align-items-center">
                                        <h4>MY HOME</h4>
                                        <div class="custom-radio-ui"></div>
                                    </div>
                                    <p class="address-body-text">
                                        4806 Fittro Street hughes, Victoria<br>
                                        StreetMorton Ipsum
                                    </p>
                                    <p class="address-city-zip">Ottawa, IL 61350</p>
                                </label>
                            </div>

                            <!-- Inactive Address (Office) -->
                            <div class="col-md-6">
                                <label class="address-select-card">
                                    <input type="radio" name="shipping_address" value="office"
                                        class="address-radio-input">
                                    <div class="address-card-header d-flex justify-content-between align-items-center">
                                        <h4>OFFICE</h4>
                                        <div class="custom-radio-ui"></div>
                                    </div>
                                    <p class="address-body-text">
                                        4806 Fittro Street hughes, Victoria<br>
                                        StreetMorton Ipsum
                                    </p>
                                    <p class="address-city-zip">Ottawa, IL 61350</p>
                                </label>
                            </div>
                        </div>

                        <!-- Add New Address Action -->
                        <button type="button" class="btn-action-trigger-link">
                            <i class="fa-solid fa-circle-plus"></i> Add New Address
                        </button>
                    </div>


                    <!-- ================= BILLING DETAILS ================= -->
                    <div class="checkout-block-group mb-5">
                        <h3 class="checkout-section-title">BILLING DETAILS</h3>

                        <div class="row g-4 mb-3">
                            <div class="col-md-6">
                                <input type="text" class="form-control custom-checkout-input" placeholder="First Name"
                                    required>
                            </div>
                            <div class="col-md-6">
                                <input type="text" class="form-control custom-checkout-input" placeholder="Last Name"
                                    required>
                            </div>
                            <div class="col-md-6">
                                <input type="email" class="form-control custom-checkout-input"
                                    placeholder="Email Address" required>
                            </div>
                            <div class="col-md-6">
                                <input type="tel" class="form-control custom-checkout-input"
                                    placeholder="Contact Number" required>
                            </div>
                        </div>

                        <!-- Same As Shipping Action Check -->
                        <label class="custom-checkbox-trigger-label">
                            <input type="checkbox" checked class="native-hidden-check">
                            <span class="custom-checkbox-ui"><i class="fa-solid fa-circle-dot"></i></span>
                            Same As Shipping details
                        </label>
                    </div>


                    <!-- ================= PAYMENT DETAILS ================= -->
                    <div class="checkout-block-group mb-4">
                        <h3 class="checkout-section-title">PAYMENT DETAILS</h3>

                        <!-- Payment Gateways Grid Selector -->
                        <div class="row g-3 mb-4">
                            <!-- Card Option -->
                            <div class="col-md-6">
                                <label class="payment-method-tile text-muted">
                                    <input type="radio" name="payment_gateway" value="card" checked
                                        class="payment-radio-input">
                                    <div class="tile-inner-flex d-flex align-items-center justify-content-between">
                                        <div class="d-flex align-items-center gap-3">
                                            <div class="custom-payment-radio-ui"></div>
                                            <span class="method-label-text">Credit or Debit Card</span>
                                        </div>
                                        <img src="img/card-brands.png" alt="Cards"
                                            class="gateway-brand-logo fallback-icon-img"
                                            onerror="this.src='https://cdn-icons-png.flaticon.com/512/349/349228.png'">
                                    </div>
                                </label>
                            </div>

                            <!-- PayPal Option -->
                            <div class="col-md-6">
                                <label class="payment-method-tile">
                                    <input type="radio" name="payment_gateway" value="paypal"
                                        class="payment-radio-input">
                                    <div class="tile-inner-flex d-flex align-items-center justify-content-between">
                                        <div class="d-flex align-items-center gap-3">
                                            <div class="custom-payment-radio-ui"></div>
                                            <span class="method-label-text">PayPal</span>
                                        </div>
                                        <img src="img/paypal-logo.png" alt="PayPal"
                                            class="gateway-brand-logo fallback-icon-img"
                                            onerror="this.src='https://cdn-icons-png.flaticon.com/512/174/174861.png'">
                                    </div>
                                </label>
                            </div>

                            <!-- Stripe Option -->
                            <div class="col-md-6">
                                <label class="payment-method-tile">
                                    <input type="radio" name="payment_gateway" value="stripe"
                                        class="payment-radio-input">
                                    <div class="tile-inner-flex d-flex align-items-center justify-content-between">
                                        <div class="d-flex align-items-center gap-3">
                                            <div class="custom-payment-radio-ui"></div>
                                            <span class="method-label-text">Pay With Stripe</span>
                                        </div>
                                        <img src="img/stripe-logo.png" alt="Stripe"
                                            class="gateway-brand-logo fallback-icon-img"
                                            onerror="this.src='https://cdn-icons-png.flaticon.com/512/5968/5968382.png'">
                                    </div>
                                </label>
                            </div>

                            <!-- Clear Pay Option -->
                            <div class="col-md-6">
                                <label class="payment-method-tile">
                                    <input type="radio" name="payment_gateway" value="clearpay"
                                        class="payment-radio-input">
                                    <div class="tile-inner-flex d-flex align-items-center justify-content-between">
                                        <div class="d-flex align-items-center gap-3">
                                            <div class="custom-payment-radio-ui"></div>
                                            <span class="method-label-text">Pay With Clear pay</span>
                                        </div>
                                        <img src="img/clearpay-logo.png" alt="Clearpay"
                                            class="gateway-brand-logo fallback-icon-img" style="height:12px;"
                                            onerror="this.src='https://cdn-icons-png.flaticon.com/512/825/825561.png'">
                                    </div>
                                </label>
                            </div>
                        </div>

                        <!-- Card Dynamic Fields (Visible when Card is chosen) -->
                        <div id="conditionalCardFieldsContainer">
                            <div class="row g-4">
                                <div class="col-12">
                                    <input type="text" class="form-control custom-checkout-input"
                                        placeholder="Card Number">
                                </div>
                                <div class="col-md-6">
                                    <input type="text" class="form-control custom-checkout-input"
                                        placeholder="Expiry Date">
                                </div>
                                <div class="col-md-6">
                                    <input type="text" class="form-control custom-checkout-input" placeholder="CVV">
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Bottom Terms Policy Check and Submit Row -->
                    <div class="d-flex flex-wrap justify-content-between align-items-center pt-4 border-top mt-5 border-secondary-subtle">
                        <label class="custom-terms-checkbox d-flex align-items-start gap-2 max-width-terms">
                            <input type="checkbox" required class="form-check-input mt-1 bg-dark border-secondary">
                            <span>Nam massa dolor, imperdiet sed ante eget, luctus gravida ipsum lobortis eu. Donec id</span>
                        </label>
                        <!-- <button type="submit" class="btn">Submit</button> -->
                        <a href="thankyou.php" class="btn btn-outline-custom">Submit</a>
                    </div>

                </form>
            </div>

            <!-- ================= RIGHT SIDE ORDER SUMMARY ================= -->
            <div class="col-lg-4">
                <div class="order-summary-sidebar-card">
                    <h3 class="summary-main-title">ORDER SUMMARY</h3>

                    <!-- Product Items List Block -->
                    <div class="summary-items-scrollable-wrapper">

                        <!-- Item 1 -->
                        <div class="summary-product-row d-flex align-items-center justify-content-between">
                            <div class="d-flex align-items-center gap-3">
                                <div class="product-thumb-container">
                                    <img src="img/toy-product.png" alt="Star Wars"
                                        onerror="this.src='https://cdn-icons-png.flaticon.com/512/3082/3082060.png'">
                                </div>
                                <div class="product-meta-details">
                                    <h5>Star Wars Ae Toys</h5>
                                    <p>Size L <span>|</span> #Qty 3</p>
                                </div>
                            </div>
                            <div class="product-price-tag">$550.00</div>
                        </div>

                        <!-- Item 2 -->
                        <div class="summary-product-row d-flex align-items-center justify-content-between">
                            <div class="d-flex align-items-center gap-3">
                                <div class="product-thumb-container">
                                    <img src="img/toy-product.png" alt="Star Wars"
                                        onerror="this.src='https://cdn-icons-png.flaticon.com/512/3082/3082060.png'">
                                </div>
                                <div class="product-meta-details">
                                    <h5>Star Wars Ae Toys</h5>
                                    <p>Size S <span>|</span> #Qty 3</p>
                                </div>
                            </div>
                            <div class="product-price-tag">$550.00</div>
                        </div>

                        <!-- Item 3 (Selected/Highlighted active border tracking) -->
                        <div class="summary-product-row active-highlight-row d-flex align-items-center justify-content-between">
                            <div class="d-flex align-items-center gap-3">
                                <div class="product-thumb-container">
                                    <img src="img/toy-product.png" alt="Star Wars"
                                        onerror="this.src='https://cdn-icons-png.flaticon.com/512/3082/3082060.png'">
                                </div>
                                <div class="product-meta-details">
                                    <h5>Star Wars Ae Toys</h5>
                                    <p>Size L <span>|</span> #Qty 3</p>
                                </div>
                            </div>
                            <div class="product-price-tag">$550.00</div>
                        </div>

                    </div>

                    <!-- Pricing Breakdown Structure Stack -->
                    <div class="pricing-breakdown-box">
                        <div class="breakdown-row d-flex justify-content-between">
                            <span class="lbl">Sub Total</span>
                            <span class="val">$500.00</span>
                        </div>
                        <div class="breakdown-row d-flex justify-content-between">
                            <span class="lbl">Shipping Cost</span>
                            <span class="val">$200.00+</span>
                        </div>
                        <div class="breakdown-row d-flex justify-content-between">
                            <span class="lbl">Estimated Tax</span>
                            <span class="val">$10.00</span>
                        </div>
                        <div class="breakdown-row d-flex justify-content-between text-discount">
                            <span class="lbl">Promo Discount</span>
                            <span class="val">-$15</span>
                        </div>
                    </div>

                    <!-- Grand Total Footer Summary Row -->
                    <div class="summary-grand-total-footer d-flex justify-content-between align-items-center">
                        <div class="total-lbl">Total Amount:</div>
                        <div class="total-price-val">$500.00</div>
                    </div>

                </div>
            </div>
        </div>

    </div>
</section>

<!-- Custom Dark Theme Architecture Scope Separate Namespace CSS -->
<style>
.checkout-hub-section {
    background-color: #0b0f19; /* Rich dark background matching auth/cart theme */
    padding: 60px 0;
    font-family: 'Poppins', sans-serif;
    color: #ffffff;
}

/* --- 1. Top Notice Bar Style --- */
.checkout-hub-section .top-auth-notice-bar {
    background: linear-gradient(90deg, #161f2e 0%, #111827 100%);
    border: 1px solid rgba(255, 255, 255, 0.08);
    border-radius: 50px;
    padding: 15px 35px;
}

.checkout-hub-section .top-auth-notice-bar .notice-text {
    font-size: 13px;
    font-weight: 700;
    color: #ff7a00; /* Gradient accent highlighted matching theme */
    letter-spacing: 0.3px;
}

.checkout-hub-section .auth-actions-toggle .auth-link {
    color: #f3f4f6;
    font-size: 13px;
    font-weight: 600;
    text-decoration: none;
    transition: opacity 0.2s;
}

.checkout-hub-section .auth-actions-toggle .auth-link:hover {
    opacity: 0.7;
}

.checkout-hub-section .auth-actions-toggle .vertical-divider {
    width: 1px;
    height: 16px;
    background-color: rgba(255, 255, 255, 0.2);
    display: inline-block;
    margin: 0 15px;
}

/* --- Common Headers Structure --- */
.checkout-hub-section .checkout-section-title {
    font-size: 24px;
    font-weight: 900;
    font-style: italic;
    text-transform: uppercase;
    color: #ffffff;
    margin-bottom: 25px;
    letter-spacing: -0.5px;
}

/* --- 2. Address Select Cards (Shipping Layout) --- */
.checkout-hub-section .address-select-card {
    display: block;
    background-color: #121824;
    border: 2px solid rgba(255, 255, 255, 0.06);
    border-radius: 14px;
    padding: 25px;
    cursor: pointer;
    position: relative;
    transition: all 0.25s ease;
}

.checkout-hub-section .address-select-card.active-state {
    background-color: #161f2e;
    border-color: #ff7a00;
    box-shadow: 0 8px 25px rgba(255, 122, 0, 0.15);
}

.checkout-hub-section .address-select-card h4 {
    font-size: 16px;
    font-weight: 800;
    font-style: italic;
    color: #ffffff;
    margin: 0;
}

.checkout-hub-section .address-select-card .custom-radio-ui {
    width: 16px;
    height: 16px;
    border: 2px solid #4b5563;
    border-radius: 50%;
    position: relative;
}

.checkout-hub-section .address-select-card.active-state .custom-radio-ui {
    border-color: #ff7a00;
}

.checkout-hub-section .address-select-card.active-state .custom-radio-ui::after {
    content: '';
    width: 8px;
    height: 8px;
    background: linear-gradient(90deg, #ff7a00 0%, #ff4500 100%);
    border-radius: 50%;
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
}

.checkout-hub-section .address-radio-input {
    position: absolute;
    visibility: hidden;
}

.checkout-hub-section .address-body-text {
    font-size: 13px;
    color: #9ca3af;
    line-height: 1.6;
    margin: 18px 0 10px 0;
    font-weight: 500;
}

.checkout-hub-section .address-city-zip {
    font-size: 13px;
    font-weight: 600;
    color: #e5e7eb;
    margin: 0;
}

.checkout-hub-section .btn-action-trigger-link {
    background: none;
    border: none;
    color: #ff7a00;
    font-size: 13px;
    font-weight: 700;
    display: flex;
    align-items: center;
    gap: 8px;
    padding: 0;
    margin-top: 15px;
    transition: opacity 0.2s;
}

.checkout-hub-section .btn-action-trigger-link:hover {
    opacity: 0.8;
}

/* --- 3. Inputs Architecture Design --- */
.checkout-hub-section .custom-checkout-input {
    background-color: #121824;
    border: 1px solid rgba(255, 255, 255, 0.1);
    border-radius: 30px;
    padding: 13px 25px;
    font-size: 13px;
    font-weight: 500;
    color: #ffffff;
    box-shadow: none !important;
    transition: border-color 0.2s;
}

.checkout-hub-section .custom-checkout-input:focus {
    border-color: #ff7a00;
    background-color: #161f2e;
}

.checkout-hub-section .custom-checkout-input::placeholder {
    color: #6b7280;
}

/* --- 4. Custom Sub Checkboxes View Configuration --- */
.checkout-hub-section .custom-checkbox-trigger-label {
    display: inline-flex;
    align-items: center;
    gap: 10px;
    font-size: 13px;
    font-weight: 700;
    color: #e5e7eb;
    cursor: pointer;
    margin-top: 15px;
    user-select: none;
}

.checkout-hub-section .native-hidden-check {
    position: absolute;
    visibility: hidden;
}

.checkout-hub-section .custom-checkbox-ui {
    font-size: 16px;
    color: #ff7a00;
    display: inline-block;
    line-height: 1;
}

/* --- 5. Payment Details Options Layout --- */
.checkout-hub-section .payment-method-tile {
    display: block;
    background-color: #121824;
    border: 1px solid rgba(255, 255, 255, 0.1);
    border-radius: 30px;
    padding: 13px 25px;
    cursor: pointer;
    position: relative;
    user-select: none;
    transition: border-color 0.2s;
}

.checkout-hub-section .payment-radio-input {
    position: absolute;
    visibility: hidden;
}

.checkout-hub-section .custom-payment-radio-ui {
    width: 16px;
    height: 16px;
    border: 1px solid #4b5563;
    border-radius: 50%;
    position: relative;
}

.checkout-hub-section .payment-method-tile:has(.payment-radio-input:checked) {
    border-color: #ff7a00;
    background-color: #161f2e;
}

.checkout-hub-section .payment-method-tile:has(.payment-radio-input:checked) .custom-payment-radio-ui {
    border-color: #ff7a00;
}

.checkout-hub-section .payment-method-tile:has(.payment-radio-input:checked) .custom-payment-radio-ui::after {
    content: '';
    width: 8px;
    height: 8px;
    background: linear-gradient(90deg, #ff7a00 0%, #ff4500 100%);
    border-radius: 50%;
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
}

.checkout-hub-section .method-label-text {
    font-size: 13px;
    font-weight: 500;
    color: #9ca3af;
}

.checkout-hub-section .payment-method-tile:has(.payment-radio-input:checked) .method-label-text {
    color: #ffffff;
    font-weight: 600;
}

.checkout-hub-section .gateway-brand-logo {
    height: 18px;
    width: auto;
    object-fit: contain;
    filter: brightness(0.9);
}

/* Bottom Action Controls Elements */
.checkout-hub-section .max-width-terms {
    max-width: 70%;
}

.checkout-hub-section .custom-terms-checkbox span {
    font-size: 13px;
    color: #9ca3af;
    font-weight: 500;
    line-height: 1.5;
}

/* Gradient Applied to Submit Button Across All States */
.checkout-hub-section .btn-checkout-submit-pill {
    background: linear-gradient(90deg, #ff7a00 0%, #ff4500 100%);
    color: #ffffff;
    font-size: 14px;
    font-weight: 700;
    padding: 12px 50px;
    border-radius: 30px;
    border: none;
    transition: opacity 0.2s, transform 0.2s;
    box-shadow: 0 4px 15px rgba(255, 122, 0, 0.3);
}

.checkout-hub-section .btn-checkout-submit-pill:hover {
    opacity: 0.9;
    transform: translateY(-1px);
}

/* --- 6. Right Side Order Summary Sidebar Layout --- */
.checkout-hub-section .order-summary-sidebar-card {
    background-color: #121824;
    border: 1px solid rgba(255, 255, 255, 0.08);
    border-radius: 20px;
    padding: 35px 25px;
    color: #ffffff;
}

.checkout-hub-section .summary-main-title {
    font-size: 22px;
    font-weight: 900;
    font-style: italic;
    text-transform: uppercase;
    margin-bottom: 30px;
    letter-spacing: -0.5px;
}

.checkout-hub-section .summary-items-scrollable-wrapper {
    display: flex;
    flex-direction: column;
    gap: 20px;
    border-bottom: 1px solid rgba(255, 255, 255, 0.08);
    padding-bottom: 25px;
}

.checkout-hub-section .summary-product-row {
    padding: 8px 10px;
    border: 2px solid transparent;
    border-radius: 8px;
}

.checkout-hub-section .summary-product-row.active-highlight-row {
    border-color: #ff7a00;
    background-color: rgba(255, 122, 0, 0.05);
}

.checkout-hub-section .product-thumb-container {
    width: 45px;
    height: 45px;
    background-color: #1f2937;
    border-radius: 8px;
    display: flex;
    align-items: center;
    justify-content: center;
    padding: 5px;
}

.checkout-hub-section .product-thumb-container img {
    max-width: 100%;
    max-height: 100%;
    object-fit: contain;
}

.checkout-hub-section .product-meta-details h5 {
    font-size: 14px;
    font-weight: 600;
    margin: 0 0 3px 0;
    color: #ffffff;
}

.checkout-hub-section .product-meta-details p {
    font-size: 11px;
    color: #9ca3af;
    margin: 0;
    font-weight: 500;
}

.checkout-hub-section .product-meta-details p span {
    margin: 0 5px;
    color: rgba(255, 255, 255, 0.2);
}

.checkout-hub-section .product-price-tag {
    font-size: 14px;
    font-weight: 600;
    color: #ff7a00;
}

/* Breakdown Calculations Panel Grid styling */
.checkout-hub-section .pricing-breakdown-box {
    padding: 25px 10px;
    border-bottom: 1px solid rgba(255, 255, 255, 0.08);
    display: flex;
    flex-direction: column;
    gap: 14px;
}

.checkout-hub-section .breakdown-row .lbl {
    font-size: 13px;
    color: #9ca3af;
    font-weight: 500;
}

.checkout-hub-section .breakdown-row .val {
    font-size: 13px;
    font-weight: 600;
    color: #ffffff;
}

.checkout-hub-section .breakdown-row.text-discount .lbl,
.checkout-hub-section .breakdown-row.text-discount .val {
    color: #f43f5e;
}

/* Grand Total Amount section line */
.checkout-hub-section .summary-grand-total-footer {
    padding-top: 25px;
    padding-left: 10px;
    padding-right: 10px;
}

.checkout-hub-section .summary-grand-total-footer .total-lbl {
    font-size: 16px;
    font-weight: 700;
    color: #ffffff;
}

.checkout-hub-section .summary-grand-total-footer .total-price-val {
    font-size: 24px;
    font-weight: 800;
    color: #ff7a00;
}
</style>

<!-- JavaScript Dynamic State Manager Action Setup Handles Card Toggle Inputs -->
<script>
document.addEventListener("DOMContentLoaded", function() {
    // 1. Manage Dynamic Address Card Highlight Switcher State
    const addressCards = document.querySelectorAll('.checkout-hub-section .address-select-card');
    addressCards.forEach(card => {
        card.addEventListener('click', function() {
            addressCards.forEach(c => c.classList.remove('active-state'));
            this.classList.add('active-state');
        });
    });

    // 2. Manage Dynamic Payment Method Display Collapse Transition View Logic 
    const paymentRadioGroup = document.querySelectorAll('input[name="payment_gateway"]');
    const conditionalCardFields = document.getElementById('conditionalCardFieldsContainer');

    paymentRadioGroup.forEach(radio => {
        radio.addEventListener('change', function() {
            if (this.value === 'card') {
                conditionalCardFields.style.display = 'block';
            } else {
                conditionalCardFields.style.display = 'none';
            }
        });
    });
});
</script>

<!-- Footer Include Here -->
<?php include 'inc/footer.php'; ?>
<!-- Footer Include Here -->