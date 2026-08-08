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
$pageTitle = "Kite Festivals";
include 'inc/sub-banner.php';
?>
<!-- banner Include End Here -->

<style>
    .festival-section {
        background-color: #050b14;
        color: #fff;
        padding: 80px 0;
        min-height: 70vh;
    }
    .festival-card {
        background-color: #0d1b2a;
        border: 1px solid rgba(255, 255, 255, 0.08);
        border-radius: 24px;
        overflow: hidden;
        transition: transform 0.4s ease, box-shadow 0.4s ease;
        height: 100%;
        display: flex;
        flex-direction: column;
    }
    .festival-card:hover {
        transform: translateY(-8px);
        box-shadow: 0 15px 35px rgba(0, 0, 0, 0.6);
        border-color: rgba(255, 69, 0, 0.3);
    }
    .festival-img-wrapper {
        position: relative;
        width: 100%;
        aspect-ratio: 4 / 3;
        overflow: hidden;
    }
    .festival-img-wrapper img {
        width: 100%;
        height: 100%;
        object-fit: cover;
        transition: transform 0.5s ease;
    }
    .festival-card:hover .festival-img-wrapper img {
        transform: scale(1.06);
    }
    .festival-content {
        padding: 24px 28px 30px 28px;
        display: flex;
        flex-direction: column;
        justify-content: flex-start;
    }
    .festival-date {
        font-size: 13px;
        font-weight: 600;
        color: #00bcd4;
        text-transform: uppercase;
        letter-spacing: 0.5px;
        margin-bottom: 8px;
        display: block;
    }
    .festival-title {
        font-size: 22px;
        font-weight: 700;
        color: #ffffff;
        margin-bottom: 6px;
        text-decoration: none;
        line-height: 1.3;
        transition: color 0.3s ease;
    }
    .festival-title:hover {
        color: #ff4500;
    }
    .festival-location {
        font-size: 14px;
        color: #8fa0b5;
        margin: 0;
    }
</style>

<section class="festival-section">
    <div class="container">
        <div class="row g-4">
            
            <!-- Festival Card 1 -->
            <div class="col-lg-4 col-md-6">
                <div class="festival-card">
                    <div class="festival-img-wrapper">
                        <img src="img/shopkite2.png" alt="Coastal Sky Fest">
                    </div>
                    <div class="festival-content">
                        <span class="festival-date">JUN 14–16</span>
                        <a href="festival-detail.php" class="festival-title">Coastal Sky Fest</a>
                        <p class="festival-location">Outer Banks, NC</p>
                    </div>
                </div>
            </div>

            <!-- Festival Card 2 -->
            <div class="col-lg-4 col-md-6">
                <div class="festival-card">
                    <div class="festival-img-wrapper">
                        <img src="img/shopkite3.png" alt="International Kite Fly">
                    </div>
                    <div class="festival-content">
                        <span class="festival-date">JUL 22–24</span>
                        <a href="festival-detail.php" class="festival-title">International Kite Fly</a>
                        <p class="festival-location">Berck-sur-Mer, FR</p>
                    </div>
                </div>
            </div>

            <!-- Festival Card 3 -->
            <div class="col-lg-4 col-md-6">
                <div class="festival-card">
                    <div class="festival-img-wrapper">
                        <img src="img/shopkite1.png" alt="Lakeside Wind Days">
                    </div>
                    <div class="festival-content">
                        <span class="festival-date">AUG 09–11</span>
                        <a href="festival-detail.php" class="festival-title text-decoration-underline">Lakeside Wind Days</a>
                        <p class="festival-location">Lake Como, IT</p>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>

<!-- Body Content End Here -->

<!-- Footer Include Here -->
<?php include 'inc/footer.php'; ?>