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
$pageTitle = "Page Not Found";
include 'inc/sub-banner.php';
?>
<!-- banner Include End Here  -->

<!-- Body Content Starts Here  -->
<section class="Thankyou-section section py-5 overflow-hidden">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-md-8 mx-auto">
                <div class="thankyou-wrapper extra-bg-1 p-sm-5 p-4 rounded-4 text-center shadow-lg position-relative">
                    
                    <!-- Floating Background Shape Elements for GSAP Parallax -->
                    <div class="floating-shape shape-1"></div>
                    <div class="floating-shape shape-2"></div>

                    <!-- Animated 404 Heading with Character Split Effect -->
                    <div class="error-code-wrap overflow-hidden mb-3">
                        <h2 class="level-2 heading-font primary-color mb-0 fw-bold display-1 glitch-text" id="errorCode">404</h2>
                    </div>

                    <!-- Subheading with Reveal Animation -->
                    <h2 class="level-3 heading-font dark-color mb-4" id="errorTitle">Page Not Found</h2>

                    <!-- Descriptive Paragraph -->
                    <p class="text-muted mb-4 px-lg-3" id="errorDesc">
                        Oops! The page you are looking for might have been removed, had its name changed, or is temporarily unavailable. Let's get you back on track.
                    </p>

                    <!-- Interactive Advanced Action Buttons -->
                    <div class="back-btn pt-2 d-flex justify-content-center gap-3 flex-wrap" id="errorBtns">
                        <a href="./" class="btn btn-orange-gradient px-4 py-3 rounded-pill shadow-sm text-decoration-none">
                            <i class="fa-solid fa-house me-2"></i>Back To Home
                        </a>
                        <a href="shop" class="btn btn-outline-light px-4 py-3 rounded-pill text-dark border-secondary text-decoration-none">
                            <i class="fa-solid fa-store me-2"></i>Browse Shop
                        </a>
                    </div>

                </div>
            </div>
        </div>
    </div>
</section>
<!-- Body Content Ends Here  -->

<style>
/* Advanced Styling & Animation States */
.Thankyou-section {
    position: relative;
    background: #000;
}

.thankyou-wrapper {
    background: #ffffff;
    border: 1px solid rgba(0, 0, 0, 0.05);
    z-index: 2;
}

.error-code-wrap {
    line-height: 1;
}

#errorCode {
    font-size: 110px;
    letter-spacing: -2px;
    background: linear-gradient(135deg, #ff7a00 0%, #ff4500 100%);
    -webkit-background-clip: text;
    -webkit-text-fill-color: transparent;
}

/* Floating Shapes */
.floating-shape {
    position: absolute;
    border-radius: 50%;
    z-index: -1;
    opacity: 0.15;
    pointer-events: none;
}

.shape-1 {
    width: 120px;
    height: 120px;
    background: #ff7a00;
    top: -20px;
    left: -20px;
}

.shape-2 {
    width: 90px;
    height: 90px;
    background: #0b0f19;
    bottom: -15px;
    right: -15px;
}

.btn-orange-gradient {
    background: linear-gradient(90deg, #ff7a00 0%, #ff4500 100%);
    color: #ffffff !important;
    font-weight: 600;
    border: none;
    transition: transform 0.3s ease, box-shadow 0.3s ease;
}

.btn-orange-gradient:hover {
    transform: translateY(-3px);
    box-shadow: 0 10px 20px rgba(255, 122, 0, 0.3);
}
</style>

<!-- GSAP & ScrollTrigger CDN -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/gsap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/ScrollTrigger.min.js"></script>

<script>
document.addEventListener('DOMContentLoaded', function() {
    gsap.registerPlugin(ScrollTrigger);

    // Master Timeline for Advanced Staggered Entry Animation
    const tl = gsap.timeline({
        defaults: { ease: "power3.out" }
    });

    // 1. Wrapper Card Scale & Fade In
    tl.fromTo(".thankyou-wrapper", {
        scale: 0.85,
        opacity: 0,
        y: 60
    }, {
        scale: 1,
        opacity: 1,
        y: 0,
        duration: 1.0
    })

    // 2. 404 Number Bounce / Elastic Reveal
    .fromTo("#errorCode", {
        scale: 0.3,
        opacity: 0,
        rotation: -15
    }, {
        scale: 1,
        opacity: 1,
        rotation: 0,
        duration: 0.9,
        ease: "back.out(1.7)"
    }, "-=0.6")

    // 3. Title Slide Up
    .fromTo("#errorTitle", {
        y: 30,
        opacity: 0
    }, {
        y: 0,
        opacity: 1,
        duration: 0.6
    }, "-=0.4")

    // 4. Description Fade & Blur Effect
    .fromTo("#errorDesc", {
        y: 20,
        opacity: 0,
        filter: "blur(5px)"
    }, {
        y: 0,
        opacity: 1,
        filter: "blur(0px)",
        duration: 0.6
    }, "-=0.3")

    // 5. Buttons Staggered Slide In
    .fromTo("#errorBtns > *", {
        y: 25,
        opacity: 0
    }, {
        y: 0,
        opacity: 1,
        duration: 0.6,
        stagger: 0.15
    }, "-=0.3");

    // Continuous Advanced Parallax Floating Effect on Background Shapes
    gsap.to(".shape-1", {
        y: -25,
        x: 15,
        rotation: 10,
        duration: 4,
        repeat: -1,
        yoyo: true,
        ease: "sine.inOut"
    });

    gsap.to(".shape-2", {
        y: 20,
        x: -20,
        rotation: -15,
        duration: 5,
        repeat: -1,
        yoyo: true,
        ease: "sine.inOut"
    });

    // Mouse Move Interactive Parallax Tilt Effect on Wrapper Card
    const wrapperCard = document.querySelector('.thankyou-wrapper');
    
    if (wrapperCard) {
        wrapperCard.addEventListener('mousemove', (e) => {
            const rect = wrapperCard.getBoundingClientRect();
            const x = e.clientX - rect.left - rect.width / 2;
            const y = e.clientY - rect.top - rect.height / 2;
            
            gsap.to(wrapperCard, {
                rotationY: x * 0.03,
                rotationX: -y * 0.03,
                transformPerspective: 800,
                ease: "power1.out",
                duration: 0.5
            });
        });

        wrapperCard.addEventListener('mouseleave', () => {
            gsap.to(wrapperCard, {
                rotationY: 0,
                rotationX: 0,
                ease: "power2.out",
                duration: 0.8
            });
        });
    }
});
</script>

<!-- Footer Include Here -->
<?php include 'inc/footer.php'; ?>
<!-- Footer Include Here -->