<!-- App Include Here -->
<?php 
$headerClasslink = 'header-classlinkmenu';
$headerClass = 'header-absolute';
$logoImg = 'img/inner-logo.png'; // Yahan apna inner page wala logo ka path dalein
include 'inc/app.php'; 
?>

<!-- Body Content Start Here -->

<!-- banner Include Here  -->
<?php
$pageTitle = "Forgot Password";
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
        margin-bottom: 10px;
        color: #fff;
    }
    .auth-desc {
        font-size: 14px;
        color: #a0abbb;
        margin-bottom: 25px;
    }
    .auth-form .form-label {
        font-size: 14px;
        color: #a0abbb;
        margin-bottom: 8px;
    }
    .auth-form .form-control {
        background-color: #050b14;
        border: 1px solid rgba(255, 255, 255, 0.15);
        color: #fff;
        padding: 12px 20px;
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
        margin-top: 10px;
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
                    <h2 class="auth-title">Reset Password</h2>
                    <p class="auth-desc">Enter your registered email address and we'll send you a link to reset your password.</p>
                    <form class="auth-form" action="otp" method="POST">
                        <div class="mb-3">
                            <label class="form-label">Email Address</label>
                            <input type="email" class="form-control" placeholder="Enter your email" required>
                        </div>
                        <button href="otp" type="submit" class="auth-btn">Send Reset Link</button>
                    </form>
                    <div class="auth-bottom-text">
                        Remember your password? <a href="login.php">Login</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Body Content End Here -->

<!-- Footer Include Here -->
<?php include 'inc/footer.php'; ?>