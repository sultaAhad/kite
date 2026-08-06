<?php 
$headerClasslink = 'header-classlinkmenu';
$headerClass = 'header-absolute';
$logoImg = 'img/inner-logo.png'; // Yahan apna inner page wala logo ka path dalein
include 'inc/app.php'; 
?>

<?php
$pageTitle = "My Addresses";
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
                        <h3 class="heading-italic-font text-white mb-0">My Addresses</h3>
                        <button class="btn-orange-gradient-pill py-2 px-4">Add New Address</button>
                    </div>
                    <hr class="mb-4 border-secondary-subtle">

                    <div class="row g-4">
                        <!-- Address Box 1 (Home) -->
                        <div class="col-md-6">
                            <div class="address-box-card active-border">
                                <div class="d-flex justify-content-between align-items-center mb-3">
                                    <h5 class="text-white fw-bold mb-0">MY HOME (Default)</h5>
                                    <div class="dropdown">
                                        <button class="btn text-muted p-0" data-bs-toggle="dropdown"><i class="fa-solid fa-ellipsis-vertical"></i></button>
                                        <ul class="dropdown-menu dropdown-menu-dark bg-dark">
                                            <li><a class="dropdown-item" href="#">Edit</a></li>
                                            <li><a class="dropdown-item text-danger" href="#">Delete</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <p class="text-muted small mb-2">4806 Fittro Street hughes, Victoria</p>
                                <p class="text-white small fw-bold mb-0">Ottawa, IL 61350</p>
                            </div>
                        </div>

                        <!-- Address Box 2 (Office) -->
                        <div class="col-md-6">
                            <div class="address-box-card">
                                <div class="d-flex justify-content-between align-items-center mb-3">
                                    <h5 class="text-white fw-bold mb-0">OFFICE</h5>
                                    <div class="dropdown">
                                        <button class="btn text-muted p-0" data-bs-toggle="dropdown"><i class="fa-solid fa-ellipsis-vertical"></i></button>
                                        <ul class="dropdown-menu dropdown-menu-dark bg-dark">
                                            <li><a class="dropdown-item" href="#">Set as Default</a></li>
                                            <li><a class="dropdown-item" href="#">Edit</a></li>
                                            <li><a class="dropdown-item text-danger" href="#">Delete</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <p class="text-muted small mb-2">742 Evergreen Terrace, Suite 4B</p>
                                <p class="text-white small fw-bold mb-0">Springfield, OR 97477</p>
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
.address-box-card { background-color: #161f2e; border: 2px solid rgba(255, 255, 255, 0.08); border-radius: 14px; padding: 25px; transition: 0.2s; }
.address-box-card.active-border { border-color: #ff7a00; background-color: #1a2333; }
.btn-orange-gradient-pill { background: linear-gradient(90deg, #ff7a00 0%, #ff4500 100%); color: #ffffff; font-size: 13px; font-weight: 700; border-radius: 30px; border: none; box-shadow: 0 4px 15px rgba(255, 122, 0, 0.3); }
</style>

<?php include 'inc/footerlinks.php'; ?>