<?php 
$headerClass = 'header-absolute';
$logoImg = 'img/inner-logo.png';
include 'inc/app.php'; 
$order_id = isset($_GET['id']) ? $_GET['id'] : '94821';
?>

<?php
$pageTitle = "Order Details";
include 'inc/sub-banner.php';
?>

<section class="profile-section py-5">
    <div class="container">
        <div class="row g-4">
            <div class="col-lg-4">
<?php include 'inc/siderbar.php'; ?>            </div>
            <div class="col-lg-8">
                <div class="my-profile-wrapper h-100">
                    <div class="d-flex justify-content-between align-items-center mb-3">
                        <h3 class="heading-italic-font text-white mb-0">Order #<?php echo $order_id; ?></h3>
                        <a href="kite-my-orders.php" class="btn btn-dark btn-sm rounded-pill px-3 text-muted fw-bold">Back to Orders</a>
                    </div>
                    <hr class="mb-4 border-secondary-subtle">

                    <div class="row g-4 mb-4">
                        <div class="col-md-6">
                            <div class="p-3 bg-dark-sub rounded-3 border border-secondary-subtle">
                                <h6 class="text-orange fw-bold mb-2">Shipping Address</h6>
                                <p class="text-muted small mb-1">John Samual</p>
                                <p class="text-muted small mb-0">4806 Fittro Street hughes, Victoria, Ottawa, IL 61350</p>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="p-3 bg-dark-sub rounded-3 border border-secondary-subtle">
                                <h6 class="text-orange fw-bold mb-2">Payment Info</h6>
                                <p class="text-muted small mb-1">Method: Credit Card (**** **** **** 4821)</p>
                                <p class="text-muted small mb-0">Status: <span class="text-success fw-bold">Paid</span></p>
                            </div>
                        </div>
                    </div>

                    <h5 class="text-white fw-bold mb-3 fs-6">Ordered Items</h5>
                    <div class="d-flex flex-column gap-3 mb-4">
                        <div class="order-card-item d-flex justify-content-between align-items-center p-3">
                            <div class="d-flex align-items-center gap-3">
                                <div class="order-thumb">
                                    <img src="img/toy-product.png" alt="Item" onerror="this.src='https://cdn-icons-png.flaticon.com/512/3082/3082060.png'">
                                </div>
                                <div>
                                    <h6 class="text-white fw-bold mb-1">Star Wars Ae Toys</h6>
                                    <p class="text-muted small mb-0">Size: L | Qty: 3</p>
                                </div>
                            </div>
                            <span class="text-orange fw-bold">$550.00</span>
                        </div>
                    </div>

                    <div class="p-3 bg-dark-sub rounded-3 border border-secondary-subtle">
                        <div class="d-flex justify-content-between mb-2"><span class="text-muted">Subtotal</span><span class="text-white">$500.00</span></div>
                        <div class="d-flex justify-content-between mb-2"><span class="text-muted">Shipping</span><span class="text-white">$200.00</span></div>
                        <div class="d-flex justify-content-between pt-2 border-top border-secondary-subtle"><span class="text-white fw-bold">Total Amount</span><span class="text-orange fw-bold fs-5">$550.00</span></div>
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
.order-card-item { background-color: #161f2e; border: 1px solid rgba(255, 255, 255, 0.08); border-radius: 14px; }
.order-thumb { width: 45px; height: 45px; background: #1f2937; border-radius: 8px; display: flex; align-items: center; justify-content: center; padding: 5px; }
.order-thumb img { max-width: 100%; max-height: 100%; object-fit: contain; }
.bg-dark-sub { background-color: #161f2e !important; }
.text-orange { color: #ff7a00 !important; }
</style>

<?php include 'inc/footerlinks.php'; ?>