<!-- App Include Here -->
<?php 
$headerClasslink = 'header-classlinkmenu';
$headerClass = 'header-absolute';
$logoImg = 'img/inner-logo.png'; 
include 'inc/app.php'; 
?>

<!-- Banner Include Here -->
<?php
$pageTitle = "Thank You";
include 'inc/sub-banner.php';
?>

<style>
    .thankyou-section {
        background-color: #050b14;
        color: #fff;
        padding: 90px 0;
        min-height: 85vh;
        display: flex;
        align-items: center;
        justify-content: center;
        position: relative;
        overflow: hidden;
    }

    .thankyou-card {
        background: linear-gradient(145deg, #0d1b2a, #07111e);
        border: 1px solid rgba(255, 255, 255, 0.08);
        border-radius: 32px;
        padding: 55px 40px;
        text-align: center;
        position: relative;
        z-index: 2;
        box-shadow: 0 30px 60px rgba(0, 0, 0, 0.6);
    }

    /* Kite Stage Wrapper */
    .kite-stage {
        position: relative;
        width: 220px;
        height: 200px;
        margin: 0 auto 10px auto;
        display: flex;
        align-items: center;
        justify-content: center;
    }

    /* SVG Kite Container */
    .vector-kite-wrapper {
        position: relative;
        width: 150px;
        height: 180px;
        transform-origin: bottom center;
        filter: drop-shadow(0 15px 25px rgba(255, 69, 0, 0.45));
    }

    /* SVG Kite Vector Styling */
    .vector-kite-svg {
        width: 100%;
        height: 100%;
        overflow: visible;
    }

    /* Background Ambient Lines */
    .string-line {
        position: absolute;
        stroke: rgba(255, 255, 255, 0.25);
        stroke-width: 1.5;
        stroke-dasharray: 4 2;
    }

    /* Content Styling */
    .thankyou-subtitle {
        color: #00bcd4;
        font-size: 14px;
        font-weight: 700;
        text-transform: uppercase;
        letter-spacing: 2px;
        margin-bottom: 12px;
        display: block;
    }

    .thankyou-title {
        font-size: 38px;
        font-weight: 800;
        color: #ffffff;
        margin-bottom: 14px;
        line-height: 1.2;
    }

    .thankyou-desc {
        color: #8fa0b5;
        font-size: 16px;
        line-height: 1.7;
        max-width: 500px;
        margin: 0 auto 32px auto;
    }

    /* Action Buttons */
    .btn-wrap {
        display: flex;
        justify-content: center;
        gap: 16px;
        flex-wrap: wrap;
    }

    .btn-orange {
        background: linear-gradient(130deg, #ff7a2f, #d94100);
        color: #fff;
        font-weight: 700;
        padding: 14px 34px;
        border-radius: 50px;
        text-decoration: none;
        transition: transform 0.3s ease, box-shadow 0.3s ease;
        display: inline-flex;
        align-items: center;
        gap: 8px;
        border: none;
    }

    .btn-orange:hover {
        transform: translateY(-3px);
        box-shadow: 0 12px 28px rgba(217, 65, 0, 0.45);
        color: #fff;
    }

    .btn-outline-custom {
        background: transparent;
        border: 1px solid rgba(255, 255, 255, 0.18);
        color: #8fa0b5;
        font-weight: 600;
        padding: 14px 28px;
        border-radius: 50px;
        text-decoration: none;
        transition: all 0.3s ease;
    }

    .btn-outline-custom:hover {
        border-color: #00bcd4;
        color: #00bcd4;
        transform: translateY(-2px);
    }

    @media (max-width: 576px) {
        .thankyou-card { padding: 40px 20px; }
        .thankyou-title { font-size: 28px; }
        .vector-kite-wrapper { width: 120px; height: 150px; }
    }
</style>

<section class="thankyou-section">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-7 col-md-9">
                <div class="thankyou-card">
                    
                    <!-- Exact Style Kite Stage -->
                    <div class="kite-stage">
                        <div class="vector-kite-wrapper" id="kiteWrapper">
                            
                            <!-- Custom SVG Matching Image Design -->
                            <svg class="vector-kite-svg" viewBox="0 0 100 130" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <!-- Outer Diamond Body -->
                                <path d="M50 5 L92 50 L50 105 L8 50 Z" fill="#ff3b00" stroke="#ff7a2f" stroke-width="2"/>
                                
                                <!-- Top/Corner Decorative Triangles -->
                                <path d="M50 5 L60 20 L40 20 Z" fill="#ffb700"/>
                                <path d="M8 50 L20 40 L20 60 Z" fill="#ffb700"/>
                                <path d="M92 50 L80 40 L80 60 Z" fill="#ffb700"/>
                                
                                <!-- Center Mandala Design Pattern -->
                                <circle cx="50" cy="50" r="18" fill="none" stroke="#ffa200" stroke-width="2" stroke-dasharray="2 2"/>
                                <circle cx="50" cy="50" r="10" fill="#d94100" stroke="#fff" stroke-width="1.5"/>

                                <!-- Inner Structure Bow & Cross Frame Sticks -->
                                <path d="M50 5 L50 105" stroke="#ffffff" stroke-width="1.5" opacity="0.8"/>
                                <path d="M8 50 Q50 10 92 50" fill="none" stroke="#ffffff" stroke-width="1.5" opacity="0.8"/>

                                <!-- Bottom Tail Corner -->
                                <path d="M50 105 L58 115 L42 115 Z" fill="#ffb700"/>

                                <!-- Flying Strings / Dori -->
                                <path class="string-line-svg" d="M50 115 C 30 140, 10 160, -20 190" stroke="#ffffff" stroke-width="1.2" opacity="0.7"/>
                                <path class="string-line-svg" d="M50 115 C 70 140, 90 160, 120 190" stroke="#ffffff" stroke-width="1.2" opacity="0.7"/>

                                <!-- Flowing Ribbon Tail Tassels -->
                                <path class="kite-tail-ribbon" d="M50 115 Q 40 130 55 145 T 45 165" fill="none" stroke="#00bcd4" stroke-width="2.5" stroke-linecap="round"/>
                                <path class="kite-tail-ribbon" d="M50 115 Q 60 130 45 145 T 60 165" fill="none" stroke="#e040fb" stroke-width="2" stroke-linecap="round"/>
                            </svg>

                        </div>
                    </div>

                    <!-- Content Details -->
                    <span class="thankyou-subtitle" id="tySub">Submission Confirmed</span>
                    <h1 class="thankyou-title" id="tyTitle">Your Request Is Soaring High!</h1>
                    <p class="thankyou-desc" id="tyDesc">
                        Thank you for reaching out. We have successfully received your details and our team will connect with you very soon.
                    </p>

                    <!-- Buttons -->
                    <div class="btn-wrap" id="tyBtns">
                        <a href="./" class="btn-orange">
                            <i class="fa-solid fa-house"></i> Back To Home
                        </a>
                        <a href="festival.php" class="btn-outline-custom">
                            Explore Festivals
                        </a>
                    </div>

                </div>
            </div>
        </div>
    </div>
</section>

<!-- GSAP Animation Engine -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.5/gsap.min.js"></script>
<script>
document.addEventListener("DOMContentLoaded", function () {
    const tl = gsap.timeline({ defaults: { ease: "power3.out" } });

    // 1. Kite Launch Animation (Bottom to Top)
    tl.fromTo("#kiteWrapper", 
        { 
            y: 550,        // Screen ke niche se soar karti hui aayegi
            x: -90,        // Swooping diagonal angle
            scale: 0.25,   // Small initial size
            rotation: -35, // Curved rotation tilt
            opacity: 0 
        }, 
        { 
            y: 0, 
            x: 0, 
            scale: 1, 
            rotation: 0, 
            opacity: 1, 
            duration: 2.2, 
            ease: "power4.out" // Smooth deceleration at target position
        }
    )

    // 2. Text Content Reveal Sequence
    .fromTo("#tySub", { opacity: 0, y: 20 }, { opacity: 1, y: 0, duration: 0.5 }, "-=0.7")
    .fromTo("#tyTitle", { opacity: 0, y: 20 }, { opacity: 1, y: 0, duration: 0.5 }, "-=0.5")
    .fromTo("#tyDesc", { opacity: 0, y: 20 }, { opacity: 1, y: 0, duration: 0.5 }, "-=0.4")
    .fromTo("#tyBtns > *", 
        { opacity: 0, y: 20, scale: 0.9 }, 
        { opacity: 1, y: 0, scale: 1, duration: 0.5, stagger: 0.15 }, 
        "-=0.2"
    );

    // 3. Floating Wind Physics Motion (Natural Loop)
    gsap.to("#kiteWrapper", {
        y: -16,
        x: 8,
        rotation: 4,
        duration: 3.2,
        repeat: -1,
        yoyo: true,
        ease: "sine.inOut",
        delay: 2.2
    });

    // 4. Ribbon Tails Wave Animation (Real Wind Wave)
    gsap.to(".kite-tail-ribbon", {
        skewX: 12,
        scaleY: 1.08,
        duration: 1.5,
        repeat: -1,
        yoyo: true,
        ease: "sine.inOut",
        stagger: 0.2
    });
});
</script>

<!-- Footer Include Here -->
<?php include 'inc/footer.php'; ?>