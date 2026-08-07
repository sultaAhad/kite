<?php 
$headerClasslink = 'header-classlinkmenu';
$headerClass = 'header-absolute';
$logoImg = 'img/inner-logo.png'; // Yahan apna inner page wala logo ka path dalein
include 'inc/app.php'; 
?>

<!-- banner Include Here  -->
<?php
$pageTitle = "Account";
include 'inc/sub-banner.php';
?>
<!-- banner Include End Here  -->

<section class="profile-section py-5">
    <div class="container">
        <div class="row g-4">
            <div class="col-lg-4">
<?php include 'inc/siderbar.php'; ?>            </div>
            <div class="col-lg-8">
                <div class="my-profile-wrapper h-100">
                    <div class="d-flex justify-content-between align-items-center mb-3">
                        <h3 class="heading-italic-font text-white mb-0">My Info</h3>
                        <a href="kite-edit.php" class="btn">Edit Profile</a>
                    </div>
                    <hr class="mb-4 border-secondary-subtle">

                    <div class="row">
                        <div class="col-md-4 mb-4">
                            <h5 class="profile-info-label">First Name :</h5>
                            <p class="profile-info-value">Alexander</p>
                        </div>
                        <div class="col-md-4 mb-4">
                            <h5 class="profile-info-label">Last Name :</h5>
                            <p class="profile-info-value">Volk</p>
                        </div>
                        <div class="col-md-4 mb-4">
                            <h5 class="profile-info-label">Email Address</h5>
                            <p class="profile-info-value">John Williams@gmail.com</p>
                        </div>
                        <div class="col-md-12 mb-4">
                            <h5 class="profile-info-label">Password</h5>
                            <p class="profile-info-value d-flex align-items-center gap-2">
                                <span>********</span>
                                <a class="change-pass-link" href="kite-change-password.php">Change Password</a>
                            </p>
                        </div>
                    </div>
                    <hr class="my-3 border-secondary-subtle">
                    <div class="row">
                        <div class="col-12">
                            <h5 class="profile-info-label">Address</h5>
                            <p class="profile-info-value mb-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit,</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

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
    padding: 35px;
}
.heading-italic-font {
    font-weight: 900;
    font-style: italic;
    text-transform: uppercase;
    letter-spacing: -0.5px;
}
.btn-orange-gradient-pill {
    background: linear-gradient(90deg, #ff7a00 0%, #ff4500 100%);
    color: #ffffff;
    font-size: 13px;
    font-weight: 700;
    padding: 10px 25px;
    border-radius: 30px;
    border: none;
    text-decoration: none;
    box-shadow: 0 4px 15px rgba(255, 122, 0, 0.3);
    transition: opacity 0.2s, transform 0.2s;
}
.btn-orange-gradient-pill:hover {
    opacity: 0.9;
    transform: translateY(-1px);
    color: #fff;
}
.profile-info-label {
    font-size: 13px;
    color: #9ca3af;
    font-weight: 600;
    margin-bottom: 6px;
}
.profile-info-value {
    font-size: 15px;
    color: #ffffff;
    font-weight: 500;
}
.change-pass-link {
    color: #ff7a00;
    font-size: 13px;
    font-weight: 700;
    text-decoration: none;
}
.change-pass-link:hover {
    text-decoration: underline;
}
</style>

<?php include 'inc/footerlinks.php'; ?>