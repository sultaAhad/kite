<?php 
$headerClasslink = 'header-classlinkmenu';
$headerClass = 'header-absolute';
$logoImg = 'img/inner-logo.png'; // Inner page logo path
include 'inc/app.php'; 
?>

<?php
$pageTitle = "My Orders";
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
                <div class="my-profile-wrapper p-0">

                    <!-- Title Header -->
                    <div class="d-flex justify-content-between align-items-center border-bottom border-secondary border-opacity-25 p-4 pb-3">
                        <h3 class="heading-italic-font primary-color mb-0">My Orders</h3>
                    </div>

                    <!-- Table Wrapper -->
                    <div class="p-4">
                        <div class="table-responsive">
                            <table class="table align-middle text-white custom-order-table m-0">
                                <thead class="table-dark-header">
                                    <tr>
                                        <th scope="col" class="heading-font text-uppercase letter-spacing-1">Order Number</th>
                                        <th scope="col" class="heading-font text-uppercase letter-spacing-1">Date</th>
                                        <th scope="col" class="heading-font text-uppercase letter-spacing-1">Payment Status</th>
                                        <th scope="col" class="heading-font text-uppercase letter-spacing-1 text-center">Total</th>
                                        <th scope="col" class="heading-font text-uppercase letter-spacing-1">Delivery Status</th>
                                        <th scope="col" class="heading-font text-uppercase letter-spacing-1 text-end">Details</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <!-- Order Row 1 -->
                                    <tr>
                                        <td class="fw-semibold text-orange">#00098796</td>
                                        <td class="text-secondary">25/12/26</td>
                                        <td><span class="badge badge-paid">Paid</span></td>
                                        <td class="text-center fw-bold text-white">$45.00</td>
                                        <td><span class="badge badge-delivered">Delivered</span></td>
                                        <td class="text-end">
                                            <a href="kite-my-orders-detail.php" class="btn btn-orange-gradient btn-sm px-3 py-2">View Detail</a>
                                        </td>
                                    </tr>

                                    <!-- Order Row 2 -->
                                    <tr>
                                        <td class="fw-semibold text-orange">#00098795</td>
                                        <td class="text-secondary">20/12/26</td>
                                        <td><span class="badge badge-paid">Paid</span></td>
                                        <td class="text-center fw-bold text-white">$120.00</td>
                                        <td><span class="badge badge-pending">Pending</span></td>
                                        <td class="text-end">
                                            <a href="kite-my-orders-detail.php" class="btn btn-orange-gradient btn-sm px-3 py-2">View Detail</a>
                                        </td>
                                    </tr>

                                    <!-- Order Row 3 -->
                                    <tr>
                                        <td class="fw-semibold text-orange">#00098794</td>
                                        <td class="text-secondary">15/12/26</td>
                                        <td><span class="badge badge-unpaid">Unpaid</span></td>
                                        <td class="text-center fw-bold text-white">$85.50</td>
                                        <td><span class="badge badge-cancelled">Cancelled</span></td>
                                        <td class="text-end">
                                            <a href="kite-my-orders-detail.php" class="btn btn-orange-gradient btn-sm px-3 py-2">View Detail</a>
                                        </td>
                                    </tr>

                                    <!-- Order Row 4 -->
                                    <tr>
                                        <td class="fw-semibold text-orange">#00098793</td>
                                        <td class="text-secondary">10/12/26</td>
                                        <td><span class="badge badge-paid">Paid</span></td>
                                        <td class="text-center fw-bold text-white">$65.00</td>
                                        <td><span class="badge badge-delivered">Delivered</span></td>
                                        <td class="text-end">
                                            <a href="kite-my-orders-detail.php" class="btn btn-orange-gradient btn-sm px-3 py-2">View Detail</a>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>

                        <!-- Pagination Section -->
                        <div class="pagination-container pt-4 d-flex justify-content-end">
                            <ul class="pagination-list-wrapper m-0 p-0 d-flex align-items-center gap-2 list-unstyled">
                                <li><a href="?page=1" class="page-link-item active-page">1</a></li>
                                <li><a href="?page=2" class="page-link-item">2</a></li>
                                <li><a href="?page=3" class="page-link-item">3</a></li>
                            </ul>
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
    overflow: hidden;
}

.heading-italic-font {
    font-weight: 900;
    font-style: italic;
    text-transform: uppercase;
    letter-spacing: -0.5px;
    color: #ff7a00;
}

/* Custom Table Design */
.custom-order-table {
    border-color: rgba(255, 255, 255, 0.08) !important;
}

.custom-order-table th {
    background-color: #161f2e;
    color: #a0aec0;
    font-size: 13px;
    padding: 15px 12px;
    border-bottom: 1px solid rgba(255, 255, 255, 0.08);
}

.custom-order-table td {
    padding: 18px 12px;
    border-bottom: 1px solid rgba(255, 255, 255, 0.05);
    color: #e2e8f0;
    font-size: 14px;
}

.text-orange {
    color: #ff7a00 !important;
}

/* Status Badges */
.badge-paid, .badge-delivered {
    background-color: rgba(34, 197, 94, 0.15);
    color: #22c55e;
    border: 1px solid rgba(34, 197, 94, 0.3);
    padding: 6px 12px;
    border-radius: 20px;
    font-weight: 600;
    font-size: 11px;
}

.badge-pending {
    background-color: rgba(234, 179, 8, 0.15);
    color: #eab308;
    border: 1px solid rgba(234, 179, 8, 0.3);
    padding: 6px 12px;
    border-radius: 20px;
    font-weight: 600;
    font-size: 11px;
}

.badge-unpaid, .badge-cancelled {
    background-color: rgba(239, 68, 68, 0.15);
    color: #ef4444;
    border: 1px solid rgba(239, 68, 68, 0.3);
    padding: 6px 12px;
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
}

.btn-orange-gradient:hover {
    opacity: 0.9;
    transform: translateY(-1px);
    color: #fff;
}

/* Pagination Styling */
.page-link-item {
    display: flex;
    align-items: center;
    justify-content: center;
    width: 36px;
    height: 36px;
    background-color: #161f2e;
    color: #ffffff;
    border: 1px solid rgba(255, 255, 255, 0.08);
    border-radius: 8px;
    text-decoration: none;
    font-weight: 600;
    font-size: 13px;
    transition: all 0.2s ease;
}

.page-link-item:hover, .page-link-item.active-page {
    background: linear-gradient(90deg, #ff7a00 0%, #ff4500 100%);
    color: #ffffff;
    border-color: transparent;
}
</style>

<?php include 'inc/footerlinks.php'; ?>