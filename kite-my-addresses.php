<?php 
$headerClasslink = 'header-classlinkmenu';
$headerClass = 'header-absolute';
$logoImg = 'img/inner-logo.png'; // Inner page logo path
include 'inc/app.php'; 
?>

<?php
$pageTitle = "My Addresses";
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
                <div class="my-profile-wrapper position-relative p-4 p-md-5 pb-5">

                    <!-- Top Bar Header -->
                    <div class="d-flex flex-sm-row flex-column gap-sm-0 gap-2 justify-content-between align-items-center mb-3">
                        <h3 class="heading-italic-font text-orange mb-0">MY ADDRESSES</h3>
                        <a href="kite-add-address.php" class="btn">Add New Address</a>
                    </div>
                    
                    <hr class="border-secondary opacity-25 mb-4">

                    <!-- Address Cards Grid Box -->
                    <div class="row g-4 mb-5" id="addressCardGroup">

                        <!-- Card 1: HOME (Default Active Setup) -->
                        <div class="col-md-6">
                            <div class="address-box-card clickable-address-box is-active" data-card-id="home">
                                <div class="d-flex justify-content-between align-items-center pb-3 border-bottom border-secondary border-opacity-25 mb-3">
                                    <h4 class="heading-italic-font card-title-text mb-0">HOME</h4>
                                    <div class="card-action-icons d-flex align-items-center gap-3">
                                        <label class="custom-radio-wrap m-0">
                                            <input type="radio" name="default_address" class="address-radio-input" checked>
                                            <span class="custom-radio-dot"></span>
                                        </label>
                                        <a href="kite-edit-address.php" class="action-icon-link"><i class="fa-solid fa-pen"></i></a>
                                        <a href="javascript:void(0)" class="action-icon-link"><i class="fa-solid fa-trash-can"></i></a>
                                    </div>
                                </div>
                                <div class="address-details-text">
                                    <p class="desc-text mb-3">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt.</p>
                                    <p class="location-text mb-1">Washington, Texas</p>
                                    <p class="zipcode-text mb-0">98765</p>
                                </div>
                            </div>
                        </div>

                        <!-- Card 2: OFFICE (Inactive Setup) -->
                        <div class="col-md-6">
                            <div class="address-box-card clickable-address-box" data-card-id="office">
                                <div class="d-flex justify-content-between align-items-center pb-3 border-bottom border-secondary border-opacity-25 mb-3">
                                    <h4 class="heading-italic-font card-title-text mb-0">OFFICE</h4>
                                    <div class="card-action-icons d-flex align-items-center gap-3">
                                        <label class="custom-radio-wrap m-0">
                                            <input type="radio" name="default_address" class="address-radio-input">
                                            <span class="custom-radio-dot"></span>
                                        </label>
                                        <a href="kite-edit-address.php" class="action-icon-link"><i class="fa-solid fa-pen"></i></a>
                                        <a href="javascript:void(0)" class="action-icon-link"><i class="fa-solid fa-trash-can"></i></a>
                                    </div>
                                </div>
                                <div class="address-details-text">
                                    <p class="desc-text mb-3">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt.</p>
                                    <p class="location-text mb-1">Washington, Texas</p>
                                    <p class="zipcode-text mb-0">98765</p>
                                </div>
                            </div>
                        </div>

                    </div>

                    <!-- Custom Pagination Bar -->
                    <div class="pagination-wrapper pt-3 mt-4">
                        <ul class="pagination-list m-0 p-0 d-flex align-items-center gap-2 list-unstyled">
                            <li><a href="?page=1" class="page-num active-page">1</a></li>
                            <li><a href="?page=2" class="page-num">2</a></li>
                            <li><a href="?page=3" class="page-num">3</a></li>
                        </ul>
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

/* Button */
.btn-orange-gradient {
    background: linear-gradient(90deg, #ff7a00 0%, #ff4500 100%);
    color: #ffffff;
    font-weight: 700;
    border-radius: 30px;
    border: none;
    box-shadow: 0 4px 12px rgba(255, 122, 0, 0.25);
    transition: opacity 0.2s, transform 0.2s;
    text-decoration: none;
    font-size: 14px;
}

.btn-orange-gradient:hover {
    opacity: 0.9;
    transform: translateY(-1px);
    color: #fff;
}

/* Address Box Cards Styling */
.address-box-card {
    background-color: #161f2e;
    border: 1px solid rgba(255, 255, 255, 0.08);
    border-radius: 16px;
    padding: 24px;
    cursor: pointer;
    transition: all 0.3s ease;
}

.address-box-card .card-title-text {
    color: #ffffff;
}

.address-box-card .desc-text {
    color: #a0aec0;
    font-size: 13px;
    line-height: 1.5;
}

.address-box-card .location-text, 
.address-box-card .zipcode-text {
    color: #e2e8f0;
    font-size: 14px;
    font-weight: 500;
}

.address-box-card .action-icon-link {
    color: #a0aec0;
    font-size: 14px;
    transition: color 0.2s;
}

.address-box-card .action-icon-link:hover {
    color: #ffffff;
}

/* Active State (Highlighted Card) */
.address-box-card.is-active {
    background: #ff7a00 !important;
    border-color: #ff7a00 !important;
}

.address-box-card.is-active .card-title-text,
.address-box-card.is-active .desc-text,
.address-box-card.is-active .location-text,
.address-box-card.is-active .zipcode-text,
.address-box-card.is-active .action-icon-link {
    color: #ffffff !important;
}

/* Custom Radio Circle */
.custom-radio-wrap {
    position: relative;
    display: inline-block;
    width: 20px;
    height: 20px;
    cursor: pointer;
}

.custom-radio-wrap input {
    opacity: 0;
    width: 0;
    height: 0;
}

.custom-radio-dot {
    position: absolute;
    top: 0;
    left: 0;
    height: 20px;
    width: 20px;
    background-color: transparent;
    border: 2px solid #a0aec0;
    border-radius: 50%;
    transition: all 0.2s ease;
}

.address-box-card.is-active .custom-radio-dot {
    border-color: #ffffff;
}

.custom-radio-wrap input:checked ~ .custom-radio-dot {
    border-color: #ffffff;
}

.custom-radio-wrap input:checked ~ .custom-radio-dot::after {
    content: "";
    position: absolute;
    top: 4px;
    left: 4px;
    width: 8px;
    height: 8px;
    border-radius: 50%;
    background: #ffffff;
}

/* Pagination Styling */
.page-num {
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

.page-num.active-page {
        background: linear-gradient(90deg, #ff7a00 0%, #ff4500 100%);
    color: #ffffff;
    border-color: transparent;
}

.page-num:hover:not(.active-page) {
    background-color: #161f2e;
    color: #ffffff;
}
</style>

<!-- Active Card Switching Script -->
<script>
document.addEventListener('DOMContentLoaded', function() {
    const cards = document.querySelectorAll('.clickable-address-box');

    cards.forEach(card => {
        card.addEventListener('click', function(e) {
            // Prevent trigger if pen/trash icons are clicked
            if (e.target.closest('.action-icon-link')) return;

            cards.forEach(c => {
                c.classList.remove('is-active');
                const radio = c.querySelector('.address-radio-input');
                if (radio) radio.checked = false;
            });

            this.classList.add('is-active');
            const currentRadio = this.querySelector('.address-radio-input');
            if (currentRadio) currentRadio.checked = true;
        });
    });
});
</script>

<?php include 'inc/footerlinks.php'; ?>