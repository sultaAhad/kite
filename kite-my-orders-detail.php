<?php 
$headerClasslink = 'header-classlinkmenu';
$headerClass = 'header-absolute';
$logoImg = 'img/inner-logo.png'; // Inner page logo path
include 'inc/app.php'; 
?>

<?php
$pageTitle = "Order Details";
include 'inc/sub-banner.php';
?>

<section class="profile-section py-5">
    <div class="container">
        <div class="row g-4">
            <!-- Sidebar Include -->
            <div class="col-lg-4">
                <?php include 'inc/siderbar.php'; ?> 
            </div>

            <!-- Main Content Area -->
            <div class="col-lg-8">
                <div class="my-profile-wrapper order-wrapper p-4 p-md-5">

                    <!-- Order Top Bar Header -->
                    <div class="d-flex justify-content-between align-items-center mb-3">
                        <div>
                            <h3 class="heading-italic-font text-orange mb-1">My Order Detail</h3>
                            <span class="text-secondary fw-semibold">Order ID: #0000654321</span>
                        </div>
                        <a href="ae-my-order-detail.php" class="btn btn-orange-gradient px-4 py-2">Write A Review</a>
                    </div>
                    
                    <hr class="border-secondary opacity-25 mb-4">

                    <!-- Info blocks grid -->
                    <div class="row g-3 mb-5">
                        <!-- Shipping Info -->
                        <div class="col-md-4">
                            <div class="info-card p-3 h-100 d-flex align-items-start gap-3">
                                <div class="info-circle-icon flex-shrink-0">
                                    <img src="img/shipping-icon.svg" alt="Shipping" class="img-fluid">
                                </div>
                                <div>
                                    <h6 class="heading-italic-font text-white mb-2">Shipping Information</h6>
                                    <p class="text-secondary small mb-0 lh-base">
                                        Lorem ipsum dolor sit amet<br>
                                        Washington<br>
                                        78965
                                    </p>
                                </div>
                            </div>
                        </div>

                        <!-- Payment Info -->
                        <div class="col-md-4">
                            <div class="info-card p-3 h-100 d-flex align-items-start gap-3">
                                <div class="info-circle-icon flex-shrink-0">
                                    <img src="img/card-icon.svg" alt="Payment" class="img-fluid">
                                </div>
                                <div>
                                    <h6 class="heading-italic-font text-white mb-2">Payment Info</h6>
                                    <p class="text-secondary small mb-1 lh-base">
                                        98** **** **** **53<br>
                                        Exp: 09/32
                                    </p>
                                    <span class="badge badge-paid d-inline-flex align-items-center gap-1 mt-1">
                                        <i class="fa-solid fa-check"></i> Paid
                                    </span>
                                </div>
                            </div>
                        </div>

                        <!-- Order Info -->
                        <div class="col-md-4">
                            <div class="info-card p-3 h-100 d-flex align-items-start gap-3">
                                <div class="info-circle-icon flex-shrink-0">
                                    <img src="img/list-icon.svg" alt="Order" class="img-fluid">
                                </div>
                                <div>
                                    <h6 class="heading-italic-font text-white mb-2">Order Info</h6>
                                    <p class="text-secondary small mb-0 lh-base">
                                        Shipping: <span class="text-white fw-medium">United States</span><br>
                                        Payment: <span class="text-white fw-medium">PayPal</span><br>
                                        Status: <span class="text-orange fw-medium">Approved</span>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Products List & Total Panel Split Layout -->
                    <div class="row g-4">
                        <!-- Product Table Segment -->
                        <div class="col-lg-7">
                            <h5 class="heading-italic-font text-orange mb-3 fs-6">Product List</h5>
                            <div class="table-responsive">
                                <table class="table text-white align-middle custom-detail-table m-0">
                                    <thead>
                                        <tr>
                                            <th scope="col" style="width: 50px;">Select</th>
                                            <th scope="col">Product</th>
                                            <th scope="col">Qty</th>
                                            <th scope="col" class="text-end">Price</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>
                                                <input type="radio" name="product" checked class="custom-radio">
                                            </td>
                                            <td>
                                                <div class="d-flex align-items-center gap-3">
                                                    <div class="prod-thumb">
                                                        <img src="img/prod-img1.png" alt="item" class="img-fluid rounded">
                                                    </div>
                                                    <span class="fw-medium text-white fs-7">Marvel Ae Toys</span>
                                                </div>
                                            </td>
                                            <td class="text-secondary">#03</td>
                                            <td class="text-end fw-bold text-white">$49.00</td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <input type="radio" name="product" class="custom-radio">
                                            </td>
                                            <td>
                                                <div class="d-flex align-items-center gap-3">
                                                    <div class="prod-thumb">
                                                        <img src="img/prod-img2.png" alt="item" class="img-fluid rounded">
                                                    </div>
                                                    <span class="fw-medium text-white fs-7">Batman Figure</span>
                                                </div>
                                            </td>
                                            <td class="text-secondary">#04</td>
                                            <td class="text-end fw-bold text-white">$59.00</td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <input type="radio" name="product" class="custom-radio">
                                            </td>
                                            <td>
                                                <div class="d-flex align-items-center gap-3">
                                                    <div class="prod-thumb">
                                                        <img src="img/prod-img3.png" alt="item" class="img-fluid rounded">
                                                    </div>
                                                    <span class="fw-medium text-white fs-7">Goku Action Figure</span>
                                                </div>
                                            </td>
                                            <td class="text-secondary">#05</td>
                                            <td class="text-end fw-bold text-white">$69.00</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>

                        <!-- Right Summary Segment -->
                        <div class="col-lg-5">
                            <div class="payment-summary-card p-4 rounded-4">
                                <h5 class="heading-italic-font text-white mb-3 fs-6">Payment Summary</h5>
                                <hr class="border-secondary opacity-25 mb-3">
                                
                                <div class="d-flex justify-content-between mb-2 text-secondary small">
                                    <span>Sub Total</span>
                                    <span class="text-white fw-semibold">$450.00</span>
                                </div>
                                <div class="d-flex justify-content-between mb-2 text-secondary small">
                                    <span>Shipping Fee</span>
                                    <span class="text-white fw-semibold">$100.00</span>
                                </div>
                                <div class="d-flex justify-content-between mb-2 text-secondary small">
                                    <span>United Kingdom</span>
                                    <span class="text-white fw-semibold">+$100.00</span>
                                </div>
                                <div class="d-flex justify-content-between mb-3 text-secondary small">
                                    <span>Discount Code</span>
                                    <span class="text-orange fw-semibold">-$150.00</span>
                                </div>
                                
                                <hr class="border-secondary opacity-25 mb-3">
                                
                                <div class="d-flex justify-content-between align-items-center pt-1">
                                    <h5 class="heading-italic-font text-white m-0 fs-6">Total Amount</h5>
                                    <h4 class="heading-italic-font text-orange m-0">$700.00</h4>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</section>

<!-- Theme Custom Styling -->
<style>
.profile-section {
    background-color: #0b0f19;
    color: #ffffff;
    font-family: 'Poppins', sans-serif;
}

.my-profile-wrapper {
    background-color: #121824;
    border: 1px solid rgba(255, 255, 255, 0.08);
    border-radius: 20px;
}

.heading-italic-font {
    font-weight: 900;
    font-style: italic;
    text-transform: uppercase;
    letter-spacing: -0.5px;
}

.text-orange {
    color: #ff7a00 !important;
}

/* Info Cards */
.info-card {
    background-color: #161f2e;
    border: 1px solid rgba(255, 255, 255, 0.08);
    border-radius: 12px;
}

.info-circle-icon {
    width: 40px;
    height: 40px;
    background-color: rgba(255, 122, 0, 0.1);
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    padding: 8px;
}

/* Status Badges */
.badge-paid {
    background-color: rgba(34, 197, 94, 0.15);
    color: #22c55e;
    border: 1px solid rgba(34, 197, 94, 0.3);
    padding: 4px 10px;
    border-radius: 20px;
    font-weight: 600;
    font-size: 11px;
}

/* Buttons */
.btn-orange-gradient {
    background: linear-gradient(90deg, #ff7a00 0%, #ff4500 100%);
    color: #ffffff;
    font-weight: 700;
    border-radius: 30px;
    border: none;
    box-shadow: 0 4px 12px rgba(255, 122, 0, 0.25);
    transition: opacity 0.2s, transform 0.2s;
    text-decoration: none;
    font-size: 13px;
}

.btn-orange-gradient:hover {
    opacity: 0.9;
    transform: translateY(-1px);
    color: #fff;
}

/* Table Design */
.custom-detail-table th {
    background-color: #161f2e;
    color: #a0aec0;
    font-size: 12px;
    text-transform: uppercase;
    padding: 12px;
    border-bottom: 1px solid rgba(255, 255, 255, 0.08);
}

.custom-detail-table td {
    padding: 14px 12px;
    border-bottom: 1px solid rgba(255, 255, 255, 0.05);
    font-size: 14px;
}

.prod-thumb {
    width: 45px;
    height: 45px;
    background-color: #161f2e;
    border-radius: 8px;
    overflow: hidden;
    display: flex;
    align-items: center;
    justify-content: center;
}

.prod-thumb img {
    max-width: 100%;
    max-height: 100%;
    object-fit: cover;
}

.custom-radio {
    accent-color: #ff7a00;
    transform: scale(1.1);
    cursor: pointer;
}

/* Payment Summary Card */
.payment-summary-card {
    background-color: #161f2e;
    border: 1px solid rgba(255, 255, 255, 0.08);
}

.fs-7 {
    font-size: 13px;
}
</style>

<?php include 'inc/footerlinks.php'; ?>