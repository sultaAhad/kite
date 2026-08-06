<?php 
$headerClasslink = 'header-classlinkmenu';
$headerClass = 'header-absolute';
$logoImg = 'img/inner-logo.png'; // Yahan apna inner page wala logo ka path dalein
include 'inc/app.php'; 
?>

<?php
$pageTitle = "Change Password";
include 'inc/sub-banner.php';
?>

<section class="profile-section py-5">
    <div class="container">
        <div class="row g-4">
            <div class="col-lg-4">
<?php include 'inc/siderbar.php'; ?>            </div>
            <div class="col-lg-8">
                <div class="my-profile-wrapper h-100">
                    <h3 class="heading-italic-font text-white mb-3">Change Password</h3>
                    <hr class="mb-4 border-secondary-subtle">

                    <form action="" method="POST">
                        <div class="row g-4">
                            <div class="col-md-12">
                                <label class="profile-info-label">Current Password</label>
                                <input type="password" class="form-control custom-dark-input" placeholder="Enter current password" required>
                            </div>
                            <div class="col-md-12">
                                <label class="profile-info-label">New Password</label>
                                <input type="password" class="form-control custom-dark-input" placeholder="Enter new password" required>
                            </div>
                            <div class="col-md-12">
                                <label class="profile-info-label">Confirm New Password</label>
                                <input type="password" class="form-control custom-dark-input" placeholder="Confirm new password" required>
                            </div>
                            <div class="col-12 mt-4">
                                <button type="submit" class="btn-orange-gradient-pill">Update Password</button>
                                <a href="kite-profile.php" class="btn btn-dark rounded-pill px-4 ms-2 text-muted fw-bold">Cancel</a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>

<style>
.profile-section { background-color: #0b0f19; color: #ffffff; font-family: 'Poppins', sans-serif; }
.my-profile-wrapper { background-color: #121824; border: 1px solid rgba(255, 255, 255, 0.08); border-radius: 20px; padding: 35px; }
.heading-italic-font { font-weight: 900; font-style: italic; text-transform: uppercase; letter-spacing: -0.5px; }
.btn-orange-gradient-pill { background: linear-gradient(90deg, #ff7a00 0%, #ff4500 100%); color: #ffffff; font-size: 13px; font-weight: 700; padding: 12px 30px; border-radius: 30px; border: none; box-shadow: 0 4px 15px rgba(255, 122, 0, 0.3); transition: opacity 0.2s, transform 0.2s; }
.btn-orange-gradient-pill:hover { opacity: 0.9; transform: translateY(-1px); color: #fff; }
.profile-info-label { font-size: 13px; color: #9ca3af; font-weight: 600; margin-bottom: 8px; }
.custom-dark-input { background-color: #161f2e; border: 1px solid rgba(255, 255, 255, 0.1); border-radius: 30px; padding: 12px 20px; font-size: 13px; color: #fff; }
.custom-dark-input:focus { border-color: #ff7a00; background-color: #161f2e; color: #fff; box-shadow: none; }
</style>

<?php include 'inc/footerlinks.php'; ?>