<?php 
$headerClasslink = 'header-classlinkmenu';
$headerClass = 'header-absolute';
$logoImg = 'img/inner-logo.png'; // Inner page logo path
include 'inc/app.php'; 
?>

<?php
$pageTitle = "EDIT ADDRESS";
include 'inc/sub-banner.php';
?>

<section class="profile-section py-5">
    <div class="container">
        <div class="row g-4">
            <!-- Sidebar Include -->
            <div class="col-lg-4">
                <?php include 'inc/siderbar.php'; ?> 
            </div>

            <!-- Main Content Area -->
            <div class="col-lg-8">
                <div class="my-profile-wrapper my-address p-4 p-md-5">

                    <form action="" method="POST">
                        <!-- Top Header & Save Action Button -->
                        <div class="d-flex flex-sm-row flex-column gap-sm-0 gap-2 justify-content-between align-items-center mb-3">
                            <h3 class="heading-italic-font text-orange mb-0">EDIT ADDRESS</h3>
                            <button type="submit" class="btn">Save Changes</button>
                        </div>
                        
                        <hr class="border-secondary opacity-25 mb-4">

                        <!-- Form Input Fields Grid -->
                        <div class="row g-4">
                            <div class="col-md-6">
                                <label class="form-label text-secondary small fw-medium">Email Address</label>
                                <input type="email" class="form-control custom-address-input px-4 py-3"
                                    placeholder="Email Address" value="JohnSamual@outlook.com">
                            </div>
                            <div class="col-md-6">
                                <label class="form-label text-secondary small fw-medium">Phone Number</label>
                                <input type="text" class="form-control custom-address-input px-4 py-3"
                                    placeholder="Phone Number" value="+1 (555) 019-2834">
                            </div>
                            <div class="col-12">
                                <label class="form-label text-secondary small fw-medium">Address Line</label>
                                <input type="text" class="form-control custom-address-input px-4 py-3"
                                    placeholder="Address Line" value="1234 Constitution Ave NW, Washington DC">
                            </div>
                            <div class="col-md-6">
                                <label class="form-label text-secondary small fw-medium">Country</label>
                                <input type="text" class="form-control custom-address-input px-4 py-3"
                                    placeholder="Country" value="United States">
                            </div>
                            <div class="col-md-6">
                                <label class="form-label text-secondary small fw-medium">City</label>
                                <input type="text" class="form-control custom-address-input px-4 py-3"
                                    placeholder="City" value="Washington">
                            </div>
                            <div class="col-md-6">
                                <label class="form-label text-secondary small fw-medium">State</label>
                                <input type="text" class="form-control custom-address-input px-4 py-3"
                                    placeholder="State" value="Texas">
                            </div>
                            <div class="col-md-6">
                                <label class="form-label text-secondary small fw-medium">Postal Code</label>
                                <input type="text" class="form-control custom-address-input px-4 py-3"
                                    placeholder="Postal Code" value="98765">
                            </div>
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </div>
</section>

<!-- Theme Custom Styling -->
<style>
.profile-section {
    background-color: #0b0f19;
    color: #ffffff;
    font-family: 'Poppins', sans-serif;
}

.my-profile-wrapper {
    background-color: #121824;
    border: 1px solid rgba(255, 255, 255, 0.08);
    border-radius: 20px;
}

.heading-italic-font {
    font-weight: 900;
    font-style: italic;
    text-transform: uppercase;
    letter-spacing: -0.5px;
}

.text-orange {
    color: #ff7a00 !important;
}

/* Custom Input Styling */
.custom-address-input {
    background-color: #161f2e !important;
    border: 1px solid rgba(255, 255, 255, 0.08) !important;
    color: #ffffff !important;
    border-radius: 50px !important;
    font-size: 14px;
    transition: all 0.3s ease;
}

.custom-address-input:focus {
    border-color: #ff7a00 !important;
    box-shadow: 0 0 10px rgba(255, 122, 0, 0.2) !important;
    outline: none;
}

.custom-address-input::placeholder {
    color: #6c757d;
}

/* Save Button */
.btn-orange-gradient {
    background: linear-gradient(90deg, #ff7a00 0%, #ff4500 100%);
    color: #ffffff;
    font-weight: 700;
    border-radius: 30px;
    border: none;
    box-shadow: 0 4px 12px rgba(255, 122, 0, 0.25);
    transition: opacity 0.2s, transform 0.2s;
    text-decoration: none;
    font-size: 14px;
}

.btn-orange-gradient:hover {
    opacity: 0.9;
    transform: translateY(-1px);
    color: #fff;
}
</style>

<?php include 'inc/footerlinks.php'; ?>