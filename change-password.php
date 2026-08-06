<!-- App Include Here -->
<?php 
$headerClasslink = 'header-classlinkmenu';
$headerClass = 'header-absolute';
$logoImg = 'img/inner-logo.png'; 
include 'inc/app.php'; 
?>

<!-- Body Content Start Here -->

<!-- banner Include Here  -->
<?php
$pageTitle = "Change Password";
include 'inc/sub-banner.php';
?>
<!-- banner Include End Here  -->

<style>
    .auth-section {
        background-color: #050b14;
        color: #fff;
        padding: 80px 0;
    }
    .auth-card {
        background-color: #0d1b2a;
        border: 1px solid rgba(255, 255, 255, 0.08);
        border-radius: 20px;
        padding: 40px;
        box-shadow: 0 10px 30px rgba(0, 0, 0, 0.5);
    }
    .auth-title {
        font-size: 26px;
        font-weight: 700;
        margin-bottom: 8px;
        color: #fff;
    }
    .auth-subtitle {
        font-size: 14px;
        color: #a0abbb;
        margin-bottom: 25px;
    }
    .auth-form .form-label {
        font-size: 14px;
        color: #a0abbb;
        margin-bottom: 8px;
    }
    .password-input-group {
        position: relative;
    }
    .auth-form .form-control {
        background-color: #050b14;
        border: 1px solid rgba(255, 255, 255, 0.15);
        color: #fff;
        padding: 12px 45px 12px 20px;
        border-radius: 30px;
        font-size: 14px;
        outline: none;
    }
    .auth-form .form-control:focus {
        border-color: #ff4500;
        box-shadow: none;
        background-color: #050b14;
        color: #fff;
    }
    .auth-form .form-control::placeholder {
        color: #6c757d;
    }
    .toggle-password {
        position: absolute;
        right: 18px;
        top: 50%;
        transform: translateY(-50%);
        color: #a0abbb;
        cursor: pointer;
        font-size: 14px;
        transition: color 0.3s;
    }
    .toggle-password:hover {
        color: #ff4500;
    }
    .auth-btn {
        background: linear-gradient(90deg, #ff7a00 0%, #ff4500 100%);
        color: #fff;
        border: none;
        width: 100%;
        padding: 12px;
        border-radius: 30px;
        font-weight: 600;
        font-size: 15px;
        cursor: pointer;
        transition: opacity 0.3s;
        margin-top: 15px;
    }
    .auth-btn:hover {
        opacity: 0.9;
        color: #fff;
    }
    .auth-bottom-text {
        text-align: center;
        margin-top: 25px;
        font-size: 14px;
        color: #a0abbb;
    }
    .auth-bottom-text a {
        color: #ff4500;
        text-decoration: none;
        font-weight: 600;
    }
</style>

<section class="auth-section">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-5 col-md-7">
                <div class="auth-card">
                    <h2 class="auth-title">Change Password</h2>
                    <p class="auth-subtitle">Please enter your current password and set a new one.</p>
                    
                    <form class="auth-form" action="kite-profile" method="POST">
                        <div class="mb-3">
                            <label class="form-label">Current Password</label>
                            <div class="password-input-group">
                                <input type="password" class="form-control" id="current_password" placeholder="Enter current password" required>
                                <i class="fa-regular fa-eye toggle-password" onclick="togglePasswordVisibility('current_password', this)"></i>
                            </div>
                        </div>

                        <div class="mb-3">
                            <label class="form-label">New Password</label>
                            <div class="password-input-group">
                                <input type="password" class="form-control" id="new_password" placeholder="Enter new password" required>
                                <i class="fa-regular fa-eye toggle-password" onclick="togglePasswordVisibility('new_password', this)"></i>
                            </div>
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Confirm New Password</label>
                            <div class="password-input-group">
                                <input type="password" class="form-control" id="confirm_password" placeholder="Confirm new password" required>
                                <i class="fa-regular fa-eye toggle-password" onclick="togglePasswordVisibility('confirm_password', this)"></i>
                            </div>
                        </div>

                        <button type="submit" class="auth-btn">Update Password</button>
                    </form>

                    <div class="auth-bottom-text">
                        Back to <a href="login.php">Login</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<script>
function togglePasswordVisibility(inputId, icon) {
    const input = document.getElementById(inputId);
    if (input.type === "password") {
        input.type = "text";
        icon.classList.remove("fa-eye");
        icon.classList.add("fa-eye-slash");
    } else {
        input.type = "password";
        icon.classList.remove("fa-eye-slash");
        icon.classList.add("fa-eye");
    }
}
</script>

<!-- Body Content End Here -->

<!-- Footer Include Here -->
<?php include 'inc/footer.php'; ?>