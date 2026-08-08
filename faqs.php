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
$pageTitle = "Faqs";
include 'inc/sub-banner.php';
?>
<!-- banner Include End Here  -->

<main class="site-main py-5  text-white">
    <div class="container py-4">
        <!-- Page Title -->
        <div class="text-center mb-5">
            <h1 class="display-4 fw-bold text-orange mb-3">Frequently Asked Questions</h1>
            <p class="text-light lead">Got questions about our kites, festival events, or shipping? We've got answers!
            </p>
        </div>

        <div class="row justify-content-center">
            <div class="col-lg-10">
                <div class="accordion custom-accordion" id="kiteFaqAccordion">

                    <!-- FAQ Item 1 -->
                    <div
                        class="accordion-item  bg-opacity-10 border border-secondary border-opacity-25 mb-3 rounded-3 overflow-hidden">
                        <h2 class="accordion-header" id="faqHeadingOne">
                            <button
                                class="accordion-button collapsed bg-transparent text-white shadow-none d-flex justify-content-between align-items-center"
                                type="button" data-bs-toggle="collapse" data-bs-target="#faqCollapseOne"
                                aria-expanded="false" aria-controls="faqCollapseOne">
                                <span>What types of kites do you sell?</span>
                                <i class="fa-solid fa-plus accordion-icon text-orange ms-auto"></i>
                            </button>
                        </h2>
                        <div id="faqCollapseOne" class="accordion-collapse collapse" aria-labelledby="faqHeadingOne"
                            data-bs-parent="#kiteFaqAccordion">
                            <div class="accordion-body text-light opacity-75 pt-0">
                                We offer a wide variety of kites ranging from beginner single-line kites, diamond kites,
                                and delta kites to professional stunt kites, power kites for kiteboarding, and
                                traditional handmade festival kites.
                            </div>
                        </div>
                    </div>

                    <!-- FAQ Item 2 -->
                    <div
                        class="accordion-item  bg-opacity-10 border border-secondary border-opacity-25 mb-3 rounded-3 overflow-hidden">
                        <h2 class="accordion-header" id="faqHeadingTwo">
                            <button
                                class="accordion-button collapsed bg-transparent text-white shadow-none d-flex justify-content-between align-items-center"
                                type="button" data-bs-toggle="collapse" data-bs-target="#faqCollapseTwo"
                                aria-expanded="false" aria-controls="faqCollapseTwo">
                                <span>Do your kites come ready to fly (RTF)?</span>
                                <i class="fa-solid fa-plus accordion-icon text-orange ms-auto"></i>
                            </button>
                        </h2>
                        <div id="faqCollapseTwo" class="accordion-collapse collapse" aria-labelledby="faqHeadingTwo"
                            data-bs-parent="#kiteFaqAccordion">
                            <div class="accordion-body text-light opacity-75 pt-0">
                                Yes! Most of our beginner and intermediate kites come fully assembled with flight line
                                and handles included. Professional or custom stunt kites may require specific lines,
                                which are clearly mentioned in the product description.
                            </div>
                        </div>
                    </div>

                    <!-- FAQ Item 3 -->
                    <div
                        class="accordion-item  bg-opacity-10 border border-secondary border-opacity-25 mb-3 rounded-3 overflow-hidden">
                        <h2 class="accordion-header" id="faqHeadingThree">
                            <button
                                class="accordion-button collapsed bg-transparent text-white shadow-none d-flex justify-content-between align-items-center"
                                type="button" data-bs-toggle="collapse" data-bs-target="#faqCollapseThree"
                                aria-expanded="false" aria-controls="faqCollapseThree">
                                <span>What is your standard shipping delivery time?</span>
                                <i class="fa-solid fa-plus accordion-icon text-orange ms-auto"></i>
                            </button>
                        </h2>
                        <div id="faqCollapseThree" class="accordion-collapse collapse" aria-labelledby="faqHeadingThree"
                            data-bs-parent="#kiteFaqAccordion">
                            <div class="accordion-body text-light opacity-75 pt-0">
                                Standard domestic shipping usually takes 3 to 5 business days. Express shipping options
                                are also available at checkout if you need your kites for an upcoming festival or event.
                            </div>
                        </div>
                    </div>

                    <!-- FAQ Item 4 -->
                    <div
                        class="accordion-item  bg-opacity-10 border border-secondary border-opacity-25 mb-3 rounded-3 overflow-hidden">
                        <h2 class="accordion-header" id="faqHeadingFour">
                            <button
                                class="accordion-button collapsed bg-transparent text-white shadow-none d-flex justify-content-between align-items-center"
                                type="button" data-bs-toggle="collapse" data-bs-target="#faqCollapseFour"
                                aria-expanded="false" aria-controls="faqCollapseFour">
                                <span>How do I choose the right kite for my skill level?</span>
                                <i class="fa-solid fa-plus accordion-icon text-orange ms-auto"></i>
                            </button>
                        </h2>
                        <div id="faqCollapseFour" class="accordion-collapse collapse" aria-labelledby="faqHeadingFour"
                            data-bs-parent="#kiteFaqAccordion">
                            <div class="accordion-body text-light opacity-75 pt-0">
                                For kids and beginners, single-line delta or Parafoil kites are best because they are
                                easy to launch and stable. For thrill-seekers and experienced flyers, dual-line stunt
                                kites or traction kites offer great control and maneuverability.
                            </div>
                        </div>
                    </div>

                    <!-- FAQ Item 5 -->
                    <div
                        class="accordion-item  bg-opacity-10 border border-secondary border-opacity-25 mb-3 rounded-3 overflow-hidden">
                        <h2 class="accordion-header" id="faqHeadingFive">
                            <button
                                class="accordion-button collapsed bg-transparent text-white shadow-none d-flex justify-content-between align-items-center"
                                type="button" data-bs-toggle="collapse" data-bs-target="#faqCollapseFive"
                                aria-expanded="false" aria-controls="faqCollapseFive">
                                <span>What is your return and refund policy?</span>
                                <i class="fa-solid fa-plus accordion-icon text-orange ms-auto"></i>
                            </button>
                        </h2>
                        <div id="faqCollapseFive" class="accordion-collapse collapse" aria-labelledby="faqHeadingFive"
                            data-bs-parent="#kiteFaqAccordion">
                            <div class="accordion-body text-light opacity-75 pt-0">
                                We accept returns on all unused and unopened items within 30 days of purchase. If your
                                product arrives damaged or defective, please contact our support team immediately with
                                photos for a full replacement or refund.
                            </div>
                        </div>
                    </div>

                    <!-- FAQ Item 6 -->
                    <div
                        class="accordion-item  bg-opacity-10 border border-secondary border-opacity-25 mb-3 rounded-3 overflow-hidden">
                        <h2 class="accordion-header" id="faqHeadingSix">
                            <button
                                class="accordion-button collapsed bg-transparent text-white shadow-none d-flex justify-content-between align-items-center"
                                type="button" data-bs-toggle="collapse" data-bs-target="#faqCollapseSix"
                                aria-expanded="false" aria-controls="faqCollapseSix">
                                <span>Do you organize or sponsor kite flying festivals?</span>
                                <i class="fa-solid fa-plus accordion-icon text-orange ms-auto"></i>
                            </button>
                        </h2>
                        <div id="faqCollapseSix" class="accordion-collapse collapse" aria-labelledby="faqHeadingSix"
                            data-bs-parent="#kiteFaqAccordion">
                            <div class="accordion-body text-light opacity-75 pt-0">
                                Yes! We actively host and sponsor local and regional kite festivals. Check our
                                "Festivals" page regularly for event announcements, schedules, and ticket info.
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</main>

<style>
/* Remove default Bootstrap accordion arrow */
.custom-accordion .accordion-button::after {
    display: none !important;
}

.custom-accordion .accordion-button {
    font-size: 1.1rem;
    font-weight: 600;
    padding: 1.25rem 1.5rem;
}

/* Icon rotation and swap on active */
.custom-accordion .accordion-button:not(.collapsed) .accordion-icon {
    transform: rotate(180deg);
}

.custom-accordion .accordion-button:not(.collapsed) {
    color: #ff7a00 !important;
}
</style>

<script>
document.addEventListener('DOMContentLoaded', function() {
    const accordionButtons = document.querySelectorAll('.custom-accordion .accordion-button');

    accordionButtons.forEach(button => {
        const collapseTarget = document.querySelector(button.getAttribute('data-bs-target'));
        const icon = button.querySelector('.accordion-icon');

        collapseTarget.addEventListener('show.bs.collapse', function() {
            icon.classList.remove('fa-plus');
            icon.classList.add('fa-minus');
        });

        collapseTarget.addEventListener('hide.bs.collapse', function() {
            icon.classList.remove('fa-minus');
            icon.classList.add('fa-plus');
        });
    });
});
</script>

<!-- Body Content End Here -->

<!-- Footer Include Here -->
<?php include 'inc/footer.php'; ?>
<!-- Footer Include Here -->