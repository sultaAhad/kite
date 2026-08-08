<!-- App Include Here -->
<?php 
$headerClasslink = 'header-classlinkmenu';
$headerClass = 'header-absolute';
$logoImg = 'img/inner-logo.png'; 
include 'inc/app.php'; 
?>

<!-- Body Content Start Here -->

<!-- Banner Include Here -->
<?php
$pageTitle = "Coastal Sky Fest";
include 'inc/sub-banner.php';
?>
<!-- Banner Include End Here -->

<style>
    .festival-detail-section {
        background-color: #050b14;
        color: #fff;
        padding: 80px 0;
        min-height: 80vh;
    }

    /* Hero Preview Media */
    .detail-hero-img-wrapper {
        position: relative;
        width: 100%;
        height: 420px;
        border-radius: 24px;
        overflow: hidden;
        margin-bottom: 40px;
        border: 1px solid rgba(255, 255, 255, 0.08);
    }

    .detail-hero-img-wrapper img {
        width: 100%;
        height: 100%;
        object-fit: cover;
    }

    .detail-badge {
        position: absolute;
        top: 20px;
        left: 20px;
        background: rgba(0, 188, 212, 0.9);
        color: #050b14;
        font-weight: 700;
        font-size: 13px;
        padding: 6px 16px;
        border-radius: 50px;
        text-transform: uppercase;
        letter-spacing: 0.5px;
    }

    /* Content Cards */
    .detail-card {
        background-color: #0d1b2a;
        border: 1px solid rgba(255, 255, 255, 0.08);
        border-radius: 24px;
        padding: 32px;
        margin-bottom: 30px;
    }

    .detail-heading {
        font-size: 26px;
        font-weight: 700;
        color: #ffffff;
        margin-bottom: 18px;
        border-bottom: 2px solid rgba(255, 255, 255, 0.08);
        padding-bottom: 12px;
    }

    .detail-description {
        color: #8fa0b5;
        font-size: 16px;
        line-height: 1.8;
        margin-bottom: 0;
    }

    /* Schedule Timeline */
    .schedule-list {
        list-style: none;
        padding: 0;
        margin: 0;
    }

    .schedule-item {
        display: flex;
        gap: 20px;
        padding: 16px 0;
        border-bottom: 1px solid rgba(255, 255, 255, 0.05);
    }

    .schedule-item:last-child {
        border-bottom: none;
    }

    .schedule-time {
        min-width: 100px;
        font-weight: 700;
        color: #00bcd4;
        font-size: 14px;
    }

    .schedule-text h5 {
        font-size: 16px;
        font-weight: 600;
        color: #fff;
        margin: 0 0 4px 0;
    }

    .schedule-text p {
        font-size: 14px;
        color: #8fa0b5;
        margin: 0;
    }

    /* Gallery Grid */
    .gallery-grid {
        display: grid;
        grid-template-columns: repeat(3, 1fr);
        gap: 16px;
    }

    .gallery-item {
        aspect-ratio: 1 / 1;
        border-radius: 16px;
        overflow: hidden;
        border: 1px solid rgba(255, 255, 255, 0.08);
    }

    .gallery-item img {
        width: 100%;
        height: 100%;
        object-fit: cover;
        transition: transform 0.4s ease;
    }

    .gallery-item:hover img {
        transform: scale(1.08);
    }

    /* Sidebar Widgets */
    .sidebar-widget {
        background-color: #0d1b2a;
        border: 1px solid rgba(255, 255, 255, 0.08);
        border-radius: 24px;
        padding: 28px;
        margin-bottom: 30px;
    }

    .widget-title {
        font-size: 20px;
        font-weight: 700;
        color: #fff;
        margin-bottom: 20px;
    }

    .info-list {
        list-style: none;
        padding: 0;
        margin: 0 0 24px 0;
    }

    .info-item {
        display: flex;
        align-items: center;
        gap: 12px;
        margin-bottom: 16px;
        color: #8fa0b5;
        font-size: 15px;
    }

    .info-item i {
        color: #ff4500;
        font-size: 18px;
        width: 24px;
    }

    .btn-festival {
        display: block;
        width: 100%;
        text-align: center;
        background: linear-gradient(130deg, #ff7a2f, #d94100);
        color: #fff;
        font-weight: 700;
        padding: 14px 20px;
        border-radius: 50px;
        text-decoration: none;
        transition: transform 0.3s ease, box-shadow 0.3s ease;
        border: none;
    }

    .btn-festival:hover {
        transform: translateY(-3px);
        box-shadow: 0 10px 25px rgba(217, 65, 0, 0.4);
        color: #fff;
    }

    .btn-back {
        display: inline-flex;
        align-items: center;
        gap: 8px;
        color: #8fa0b5;
        text-decoration: none;
        font-size: 14px;
        margin-bottom: 20px;
        transition: color 0.3s ease;
    }

    .btn-back:hover {
        color: #00bcd4;
    }

    @media (max-width: 768px) {
        .detail-hero-img-wrapper {
            height: 280px;
        }

        .gallery-grid {
            grid-template-columns: repeat(2, 1fr);
        }
    }
</style>

<section class="festival-detail-section">
    <div class="container">
        
        <!-- Back Link -->
        <a href="festival.php" class="btn-back">
            <i class="fa-solid fa-arrow-left"></i> Back to All Festivals
        </a>

        <!-- Hero Image Header -->
        <div class="detail-hero-img-wrapper">
            <span class="detail-badge">Upcoming Event</span>
            <img src="img/shopkite2.png" alt="Coastal Sky Fest">
        </div>

        <div class="row g-4">
            <!-- Left Main Content -->
            <div class="col-lg-8">
                
                <!-- Overview -->
                <div class="detail-card">
                    <h3 class="detail-heading">Event Overview</h3>
                    <p class="detail-description">
                        Join us at the annual Coastal Sky Fest, where professional kite fliers and enthusiasts gather to fill the shoreline with vibrant colors, massive 3D show kites, and synchronized stunt kite performances. Whether you are a competitive flier or visiting with family, enjoy a weekend full of wind-powered spectacle, kite-making workshops, and local food vendors right along the Outer Banks coast.
                    </p>
                </div>

                <!-- Event Highlights / Schedule -->
                <div class="detail-card">
                    <h3 class="detail-heading">Festival Schedule</h3>
                    <ul class="schedule-list">
                        <li class="schedule-item">
                            <span class="schedule-time">Day 1 · 10:00 AM</span>
                            <div class="schedule-text">
                                <h5>Opening Fly & Giant Kites Launch</h5>
                                <p>Mass launch of synchronized giant inflatable and 3D kites over the beach line.</p>
                            </div>
                        </li>
                        <li class="schedule-item">
                            <span class="schedule-time">Day 1 · 02:00 PM</span>
                            <div class="schedule-text">
                                <h5>Stunt Kite Choreography</h5>
                                <p>Dual-line and quad-line team routines performed to live background music.</p>
                            </div>
                        </li>
                        <li class="schedule-item">
                            <span class="schedule-time">Day 2 · 11:30 AM</span>
                            <div class="schedule-text">
                                <h5>Kids Kite Building Workshop</h5>
                                <p>Free interactive kite-building and decorating session for all ages.</p>
                            </div>
                        </li>
                        <li class="schedule-item">
                            <span class="schedule-time">Day 3 · 08:30 PM</span>
                            <div class="schedule-text">
                                <h5>Night Glow Kite Show</h5>
                                <p>Illuminated kites with LED setups lighting up the evening ocean sky.</p>
                            </div>
                        </li>
                    </ul>
                </div>

                <!-- Event Gallery -->
                <div class="detail-card">
                    <h3 class="detail-heading">Past Event Highlights</h3>
                    <div class="gallery-grid">
                        <div class="gallery-item">
                            <img src="img/shopkite1.png" alt="Festival Shot 1">
                        </div>
                        <div class="gallery-item">
                            <img src="img/shopkite2.png" alt="Festival Shot 2">
                        </div>
                        <div class="gallery-item">
                            <img src="img/shopkite3.png" alt="Festival Shot 3">
                        </div>
                    </div>
                </div>

            </div>

            <!-- Right Sidebar -->
            <div class="col-lg-4">
                
                <!-- Event Info Card -->
                <div class="sidebar-widget">
                    <h4 class="widget-title">Festival Information</h4>
                    <ul class="info-list">
                        <li class="info-item">
                            <i class="fa-regular fa-calendar-days"></i>
                            <span><strong>Date:</strong> June 14–16</span>
                        </li>
                        <li class="info-item">
                            <i class="fa-solid fa-location-dot"></i>
                            <span><strong>Location:</strong> Outer Banks, NC</span>
                        </li>
                        <li class="info-item">
                            <i class="fa-solid fa-ticket"></i>
                            <span><strong>Admission:</strong> Free Entry</span>
                        </li>
                        <li class="info-item">
                            <i class="fa-solid fa-users"></i>
                            <span><strong>Organizer:</strong> Sky High Flyers Club</span>
                        </li>
                    </ul>
                    <a href="#" class="btn-festival">Register / RSVP Now</a>
                </div>

                <!-- Location Map Placeholder -->
                <div class="sidebar-widget">
                    <h4 class="widget-title">Event Location</h4>
                    <p class="text-muted" font-size: 14px;>Outer Banks Beachfront Park, NC 27954</p>
                    <div style="width: 100%; height: 180px; background-color: #050b14; border-radius: 16px; border: 1px solid rgba(255,255,255,0.08); display: flex; align-items: center; justify-content: center; color: #8fa0b5; font-size: 14px;">
                        <i class="fa-solid fa-map-location-dot me-2"></i> Map View Placeholder
                    </div>
                </div>

            </div>
        </div>

    </div>
</section>

<!-- Body Content End Here -->

<!-- Footer Include Here -->
<?php include 'inc/footer.php'; ?>