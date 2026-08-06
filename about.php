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
$pageTitle = "About Us";
include 'inc/sub-banner.php';
?>
<!-- banner Include End Here  -->

<style>
    /* Custom Styling for Image Section matching the layout */
    .about-section {
        background-color: #050b14;
        color: #fff;
        padding: 80px 0;
    }
    .about-img-box img {
        border-radius: 24px;
        width: 100%;
        height: auto;
        object-fit: cover;
    }
    .about-content .sub-title {
        color: #00bcd4;
        font-size: 14px;
        letter-spacing: 2px;
        text-transform: uppercase;
        font-weight: 600;
        margin-bottom: 15px;
    }
    .about-content h2 {
        font-size: 42px;
        font-weight: 700;
        line-height: 1.2;
        margin-bottom: 25px;
    }
    .about-content h2 span {
        color: #00bcd4;
    }
    .about-content p {
        color: #a0abbb;
        font-size: 15px;
        line-height: 1.8;
        margin-bottom: 20px;
    }
    .custom-btn {
        background: linear-gradient(90deg, #00bcd4 0%, #009688 100%);
        color: #fff;
        padding: 12px 30px;
        border-radius: 30px;
        font-weight: 500;
        text-decoration: none;
        display: inline-block;
        margin-top: 15px;
    }
    .custom-btn:hover {
        color: #fff;
        opacity: 0.9;
    }
    /* Vision & Mission Boxes */
    .vision-box, .mission-box {
        border-radius: 24px;
        padding: 40px;
        margin-top: 50px;
        height: 100%;
    }
    .vision-box {
        background-color: #0a1424;
        border: 1px solid rgba(255, 255, 255, 0.05);
    }
    .mission-box {
        background-color: #00a8cc;
        color: #fff;
    }
    .box-title-area {
        display: flex;
        align-items: center;
        justify-content: space-between;
        margin-bottom: 25px;
    }
    .box-title-area h3 {
        font-size: 24px;
        font-weight: 600;
        margin: 0;
    }
    .box-title-area .line {
        flex-grow: 1;
        height: 1px;
        background: rgba(255, 255, 255, 0.2);
        margin-left: 20px;
    }
    .vision-box p, .mission-box p {
        font-size: 14px;
        line-height: 1.8;
        margin: 0;
    }
    .vision-box p {
        color: #a0abbb;
    }
    .mission-box p {
        color: #ffffff;
    }
</style>

<!-- About Us Section Start Here -->
<section class="about-section">
    <div class="container">
        <!-- Top Row: Image & Main Content -->
        <div class="row align-items-center">
            <div class="col-lg-5 mb-5 mb-lg-0">
                <div class="about-img-box">
                    <img src="img/collection-img1.png" alt="Children flying kite">
                </div>
            </div>
            <div class="col-lg-7 ps-lg-5">
                <div class="about-content">
                    <span class="sub-title">THE WIND EXPERIENCE</span>
                    <h2>More than a hobby.<br><span>A feeling.</span></h2>
                    <p>kiteflyershop started in 2012 with a simple idea — bring the joy of flying something beautiful to as many people as possible. Today we ship premium kites, wind spinners and outdoor wind art to flyers around the world.</p>
                    <p>We obsess over the details: weatherproof fabrics, balanced frames, festival-ready performance and gear that lasts season after season. Every product we list is one we'd happily fly ourselves on a windy Saturday.</p>
                    <p>From quiet lakeside mornings to thunderous festival skies, our community is what keeps us going. Welcome aboard.</p>
                    <a href="#" class="custom-btn">Shop the collection</a>
                </div>
            </div>
        </div>

        <!-- Bottom Row: Vision & Mission Boxes -->
        <div class="row">
            <!-- Our Vision Box -->
            <div class="col-lg-6 mb-4 mb-lg-0">
                <div class="vision-box">
                    <div class="box-title-area">
                        <h3>Our Vision</h3>
                        <div class="line"></div>
                    </div>
                    <p>Lorem Ipsum Dolor Sit Amet, Consectetur Adipiscing Elit, Sed Do Eiusmod Tempor Incididunt Ut Labore Et Dolore Magna Aliqua. Ut Enim Ad Minim Veniam, Quis Nostrud Exercitation Ullamco Laboris Nisi Ut Aliquip Ex Ea Commodo Consequat. Duis Aute Irure Dolor In Reprehenderit In Voluptate Velit Esse Cillum Dolore Eu Fugiat Nulla Pariatur. Excepteur Sint Occaecat Cupidatat Non Proident, Sunt In Culpa Qui Officia Deserunt Mollit Anim Id Est Laborum. Lorem Ipsum Dolor Sit Amet, Consectetur Adipiscing Elit, Sed Do Eiusmod Tempor Incididunt Ut Labore Et Dolore Magna Aliqua.</p>
                </div>
            </div>
            <!-- Our Mission Box -->
            <div class="col-lg-6">
                <div class="mission-box">
                    <div class="box-title-area">
                        <h3>Our Mission</h3>
                        <div class="line"></div>
                    </div>
                    <p>Lorem Ipsum Dolor Sit Amet, Consectetur Adipiscing Elit, Sed Do Eiusmod Tempor Incididunt Ut Labore Et Dolore Magna Aliqua. Ut Enim Ad Minim Veniam, Quis Nostrud Exercitation Ullamco Laboris Nisi Ut Aliquip Ex Ea Commodo Consequat. Duis Aute Irure Dolor In Reprehenderit In Voluptate Velit Esse Cillum Dolore Eu Fugiat Nulla Pariatur. Excepteur Sint Occaecat Cupidatat Non Proident, Sunt In Culpa Qui Officia Deserunt Mollit Anim Id Est Laborum. Lorem Ipsum Dolor Sit Amet, Consectetur Adipiscing Elit, Sed Do Eiusmod Tempor Incididunt Ut Labore Et Dolore Magna Aliqua.</p>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- About Us Section End Here -->

<!-- Body Content End Here -->

<!-- Footer Include Here -->
<?php include 'inc/footer.php'; ?>
<!-- Footer Include Here -->