<?php 
$headerClasslink = 'header-classlinkmenu';
$headerClass = 'header-absolute';
$logoImg = 'img/inner-logo.png'; // Inner page logo path
include 'inc/app.php'; 
?>

<?php
$pageTitle = "Wishlist";
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
                        <h3 class="heading-italic-font primary-color mb-0">My Wishlist</h3>
                    </div>

                    <!-- Table Wrapper -->
                    <div class="p-4">
                        <div class="table-responsive">
                            <table class="table align-middle text-white custom-wishlist-table m-0">
                                <thead class="table-dark-header">
                                    <tr>
                                        <th scope="col" style="width: 50px;"></th>
                                        <th scope="col" class="heading-font text-uppercase letter-spacing-1">Product</th>
                                        <th scope="col" class="heading-font text-uppercase letter-spacing-1">Title</th>
                                        <th scope="col" class="heading-font text-uppercase letter-spacing-1">Unit Price</th>
                                        <th scope="col" class="heading-font text-uppercase letter-spacing-1">Stock Status</th>
                                        <th scope="col" class="heading-font text-uppercase letter-spacing-1 text-end">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <!-- Static Row 1: Out of Stock -->
                                    <tr>
                                        <td class="text-center">
                                            <button type="button" class="cross____btn bg-transparent border-0 text-secondary fs-4 p-0" onclick="this.closest('tr').remove()" title="Remove Item">&times;</button>
                                        </td>
                                        <td>
                                            <figure class="wishlist____fig m-0">
                                                <img src="img/wishlist-img1.png" alt="Product 1" class="img-fluid product-img">
                                            </figure>
                                        </td>
                                        <td class="primary-medium-font text-capitalize">reprehenderit in voluptate velit</td>
                                        <td class="primary-medium-font text-orange fw-bold">$49.00</td>
                                        <td>
                                            <span class="badge badge-out-stock">OUT OF STOCK</span>
                                        </td>
                                        <td class="text-end">
                                            <button class="btn btn-notify-me btn-sm px-3 py-2">Notify Me</button>
                                        </td>
                                    </tr>

                                    <!-- Static Row 2: In Stock -->
                                    <tr>
                                        <td class="text-center">
                                            <button type="button" class="cross____btn bg-transparent border-0 text-secondary fs-4 p-0" onclick="this.closest('tr').remove()" title="Remove Item">&times;</button>
                                        </td>
                                        <td>
                                            <figure class="wishlist____fig m-0">
                                                <img src="img/wishlist-img2.png" alt="Product 2" class="img-fluid product-img">
                                            </figure>
                                        </td>
                                        <td class="primary-medium-font text-capitalize">reprehenderit in voluptate velit</td>
                                        <td class="primary-medium-font text-orange fw-bold">$49.00</td>
                                        <td>
                                            <span class="badge badge-in-stock">IN STOCK <span class="ms-1 fw-normal text-muted">(15)</span></span>
                                        </td>
                                        <td class="text-end">
                                            <button class="btn btn-orange-gradient btn-sm px-3 py-2" type="button" onclick="window.location.href='cart.php';">Add To Cart</button>
                                        </td>
                                    </tr>

                                    <!-- Static Row 3: In Stock -->
                                    <tr>
                                        <td class="text-center">
                                            <button type="button" class="cross____btn bg-transparent border-0 text-secondary fs-4 p-0" onclick="this.closest('tr').remove()" title="Remove Item">&times;</button>
                                        </td>
                                        <td>
                                            <figure class="wishlist____fig m-0">
                                                <img src="img/wishlist-img3.png" alt="Product 3" class="img-fluid product-img">
                                            </figure>
                                        </td>
                                        <td class="primary-medium-font text-capitalize">reprehenderit in voluptate velit</td>
                                        <td class="primary-medium-font text-orange fw-bold">$49.00</td>
                                        <td>
                                            <span class="badge badge-in-stock">IN STOCK <span class="ms-1 fw-normal text-muted">(05)</span></span>
                                        </td>
                                        <td class="text-end">
                                            <button class="btn btn-orange-gradient btn-sm px-3 py-2" type="button" onclick="window.location.href='cart.php';">Add To Cart</button>
                                        </td>
                                    </tr>

                                    <!-- Row shown when table is empty -->
                                    <tr id="no-data-row" style="display:none;">
                                        <td colspan="6" class="text-center primary-medium-font py-5">
                                            <h4 class="heading-font text-muted">No items in your wishlist.</h4>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
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

.custom-wishlist-table {
    border-color: rgba(255, 255, 255, 0.08) !important;
}

.custom-wishlist-table th {
    background-color: #161f2e;
    color: #a0aec0;
    font-size: 13px;
    padding: 15px 10px;
    border-bottom: 1px solid rgba(255, 255, 255, 0.08);
}

.custom-wishlist-table td {
    padding: 15px 10px;
    border-bottom: 1px solid rgba(255, 255, 255, 0.05);
    color: #e2e8f0;
    font-size: 14px;
}

.wishlist____fig {
    width: 60px;
    height: 60px;
    background: #1f2937;
    border-radius: 8px;
    display: flex;
    align-items: center;
    justify-content: center;
    padding: 5px;
}

.wishlist____fig img {
    max-height: 100%;
    object-fit: contain;
}

.cross____btn {
    transition: color 0.2s;
    cursor: pointer;
}

.cross____btn:hover {
    color: #ff4500 !important;
}

.text-orange {
    color: #ff7a00;
}

/* Badges */
.badge-out-stock {
    background-color: rgba(220, 38, 38, 0.15);
    color: #ef4444;
    border: 1px solid rgba(239, 68, 68, 0.3);
    padding: 6px 12px;
    border-radius: 20px;
    font-weight: 600;
    font-size: 11px;
}

.badge-in-stock {
    background-color: rgba(34, 197, 94, 0.15);
    color: #22c55e;
    border: 1px solid rgba(34, 197, 94, 0.3);
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
}

.btn-orange-gradient:hover {
    opacity: 0.9;
    transform: translateY(-1px);
    color: #fff;
}

.btn-notify-me {
    background: #1f2937;
    color: #ffffff;
    border: 1px solid rgba(255, 255, 255, 0.2);
    border-radius: 30px;
    font-weight: 600;
    transition: background 0.2s;
}

.btn-notify-me:hover {
    background: #374151;
    color: #fff;
}
</style>

<?php include 'inc/footerlinks.php'; ?>