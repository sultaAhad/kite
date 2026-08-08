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
$pageTitle = "Legal Policy";
include 'inc/sub-banner.php';
?>
<!-- banner Include End Here  -->


<main class="site-main py-5  text-white">
    <div class="container py-4">
        
        <!-- Navigation Tabs / Quick Jump -->
        <div class="d-flex justify-content-center gap-3 mb-5 flex-wrap">
            <a href="#legal-policy" class="btn btn-outline-warning rounded-pill px-4 fw-bold">Legal & Safety Policy</a>
        </div>

        <div class="row justify-content-center">
            <div class="col-lg-10">

                <!-- 3. LEGAL & SAFETY POLICY SECTION -->
                <section id="legal-policy" class="p-4 p-md-5  bg-opacity-10 rounded-4 border border-secondary border-opacity-25">
                    <h2 class="text-orange fw-bold mb-4"><i class="fa-solid fa-gavel me-2"></i>Legal & Kite Safety Disclaimer</h2>
                    <p class="text-light opacity-75">Last Updated: August 2026</p>

                    <h5 class="text-white mt-4 fw-bold">1. Kite Flying Safety Requirements</h5>
                    <p class="text-light opacity-75">Kite flying can carry inherent risks if done improperly. Users must never fly kites near high-voltage power lines, roads, airport airspace, or during thunderstorm conditions. Always ensure adequate space from crowds when flying high-powered stunt kites.</p>

                    <h5 class="text-white mt-4 fw-bold">2. Limitation of Liability</h5>
                    <p class="text-light opacity-75">Kite Flyer Shop will not be held liable for any personal injury, property damage, or accidents resulting from improper kite usage, negligence, or violation of local aviation/kite flying laws.</p>

                    <h5 class="text-white mt-4 fw-bold">3. Intellectual Property Rights</h5>
                    <p class="text-light opacity-75">All content, graphics, logos, images, and text content on this site are the property of Kite Flyer Shop and protected by international copyright laws.</p>
                </section>

            </div>
        </div>
    </div>
</main>



<!-- Body Content End Here -->

<!-- Footer Include Here -->
<?php include 'inc/footer.php'; ?>
<!-- Footer Include Here -->