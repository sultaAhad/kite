<!-- App Include Here -->
<?php 
$headerClasslink = 'header-classlinkmenu';
$headerClass = 'header-absolute';
$logoImg = 'img/inner-logo.png'; 
include 'inc/app.php'; 
?>

<!-- Body Content Start Here -->

<!-- banner Include Here -->
<?php
$pageTitle = "Contact Us";
include 'inc/sub-banner.php';
?>
<!-- banner Include End Here -->

<style>
    .contact-section {
        background-color: #050b14;
        color: #fff;
        padding: 80px 0;
        min-height: 70vh;
    }
    
    /* Main Form Container */
    .contact-form-card {
        background-color: #121927;
        border: 1px solid rgba(255, 255, 255, 0.05);
        border-radius: 24px;
        padding: 40px;
        box-shadow: 0 10px 30px rgba(0, 0, 0, 0.4);
    }
    
    .contact-form .form-control {
        background-color: #1c2333;
        border: 1px solid rgba(255, 255, 255, 0.08);
        color: #fff;
        padding: 14px 22px;
        border-radius: 30px;
        font-size: 14px;
        outline: none;
        transition: border-color 0.3s ease;
    }
    
    .contact-form textarea.form-control {
        border-radius: 20px;
        resize: none;
    }
    
    .contact-form .form-control:focus {
        border-color: #ff4500;
        box-shadow: none;
        background-color: #1c2333;
        color: #fff;
    }
    
    .contact-form .form-control::placeholder {
        color: #6c7e93;
        font-size: 13.5px;
    }

    .btn-send {
        background: linear-gradient(90deg, #ff7a00 0%, #ff4500 100%);
        color: #fff;
        border: none;
        padding: 12px 32px;
        border-radius: 30px;
        font-weight: 600;
        font-size: 14px;
        cursor: pointer;
        transition: opacity 0.3s ease, transform 0.2s ease;
    }

    .btn-send:hover {
        opacity: 0.9;
        color: #fff;
        transform: translateY(-2px);
    }

    /* Right Side Info Cards */
    .info-card {
        background-color: #121927;
        border: 1px solid rgba(255, 255, 255, 0.05);
        border-radius: 20px;
        padding: 20px 24px;
        display: flex;
        align-items: center;
        gap: 18px;
        margin-bottom: 20px;
        transition: border-color 0.3s ease;
    }

    .info-card:last-child {
        margin-bottom: 0;
    }

    .info-card:hover {
        border-color: rgba(0, 188, 212, 0.3);
    }

    .info-icon {
        width: 44px;
        height: 44px;
        background-color: #00bcd4;
        color: #050b14;
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 16px;
        flex-shrink: 0;
    }

    .info-details {
        display: flex;
        flex-direction: column;
    }

    .info-label {
        font-size: 11px;
        font-weight: 700;
        color: #5c6e82;
        text-transform: uppercase;
        letter-spacing: 0.8px;
        margin-bottom: 2px;
    }

    .info-value {
        font-size: 14px;
        font-weight: 600;
        color: #ffffff;
        text-decoration: none;
    }

    .info-value:hover {
        color: #00bcd4;
    }
</style>

<section class="contact-section">
    <div class="container">
        <div class="row g-4 align-items-center">
            
            <!-- Contact Form Left Side -->
            <div class="col-lg-8">
                <div class="contact-form-card">
                    <form class="contact-form">
                        <div class="row g-3">
                            <div class="col-md-6">
                                <input type="text" class="form-control" placeholder="Your name" required>
                            </div>
                            <div class="col-md-6">
                                <input type="email" class="form-control" placeholder="Email" required>
                            </div>
                            <div class="col-12">
                                <input type="text" class="form-control" placeholder="Subject" required>
                            </div>
                            <div class="col-12">
                                <textarea class="form-control" rows="5" placeholder="How can we help?" required></textarea>
                            </div>
                            <div class="col-12 mt-4">
                                <button type="submit" class="btn-send">Send message</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>

            <!-- Contact Details Right Side -->
            <div class="col-lg-4">
                <div class="d-flex flex-column justify-content-center">
                    
                    <!-- Email Card -->
                    <div class="info-card">
                        <div class="info-icon">
                            <i class="fa-regular fa-envelope"></i>
                        </div>
                        <div class="info-details">
                            <span class="info-label">EMAIL</span>
                            <a href="mailto:hello@kiteflyershop.com" class="info-value">hello@kiteflyershop.com</a>
                        </div>
                    </div>

                    <!-- Phone Card -->
                    <div class="info-card">
                        <div class="info-icon">
                            <i class="fa-solid fa-phone"></i>
                        </div>
                        <div class="info-details">
                            <span class="info-label">PHONE</span>
                            <a href="tel:+15551234567" class="info-value">+1 (555) 123-4567</a>
                        </div>
                    </div>

                    <!-- Address Card -->
                    <div class="info-card">
                        <div class="info-icon">
                            <i class="fa-solid fa-location-dot"></i>
                        </div>
                        <div class="info-details">
                            <span class="info-label">ADDRESS</span>
                            <span class="info-value">On the beach, somewhere windy</span>
                        </div>
                    </div>

                </div>
            </div>

        </div>
    </div>
</section>

<!-- Body Content End Here -->

<!-- Footer Include Here -->
<?php include 'inc/footer.php'; ?>