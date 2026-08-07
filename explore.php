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
$pageTitle = "Explore";
include 'inc/sub-banner.php';
?>
<!-- banner Include End Here -->

<style>
    .explore-section {
        background-color: #050b14;
        color: #fff;
        padding: 80px 0;
        min-height: 80vh;
    }

    /* Search & Filter Bar */
    .explore-filter-bar {
        background-color: #0d1b2a;
        border: 1px solid rgba(255, 255, 255, 0.08);
        border-radius: 20px;
        padding: 20px;
        margin-bottom: 40px;
        box-shadow: 0 10px 30px rgba(0, 0, 0, 0.4);
    }
    
    .explore-search-input {
        background-color: #050b14;
        border: 1px solid rgba(255, 255, 255, 0.15);
        color: #fff;
        padding: 12px 20px 12px 45px;
        border-radius: 30px;
        font-size: 14px;
        width: 100%;
        outline: none;
    }
    .explore-search-input:focus {
        border-color: #00bcd4;
    }
    .explore-search-box {
        position: relative;
    }
    .explore-search-icon {
        position: absolute;
        left: 18px;
        top: 50%;
        transform: translateY(-50%);
        color: #6c7e93;
    }

    .filter-chip {
        background-color: #050b14;
        border: 1px solid rgba(255, 255, 255, 0.1);
        color: #a0abbb;
        padding: 8px 20px;
        border-radius: 20px;
        font-size: 13px;
        font-weight: 500;
        cursor: pointer;
        transition: all 0.3s ease;
        text-decoration: none;
        display: inline-block;
        white-space: nowrap;
    }
    .filter-chip:hover,
    .filter-chip.active {
        background: rgba(0, 188, 212, 0.15);
        color: #00bcd4;
        border-color: #00bcd4;
    }

    /* Hero / Featured Card */
    .featured-explore-card {
        background-color: #0d1b2a;
        border: 1px solid rgba(255, 255, 255, 0.08);
        border-radius: 24px;
        overflow: hidden;
        margin-bottom: 40px;
        transition: transform 0.3s ease;
    }
    .featured-explore-card:hover {
        transform: translateY(-5px);
        border-color: rgba(255, 69, 0, 0.3);
    }
    .featured-img-box {
        position: relative;
        aspect-ratio: 16 / 9;
        overflow: hidden;
        background-color: #050b14;
    }
    .featured-img-box img {
        width: 100%;
        height: 100%;
        object-fit: cover;
    }
    .featured-badge {
        position: absolute;
        top: 20px;
        left: 20px;
        background: linear-gradient(90deg, #ff7a00 0%, #ff4500 100%);
        color: #fff;
        font-size: 11px;
        font-weight: 700;
        text-transform: uppercase;
        padding: 6px 14px;
        border-radius: 20px;
        letter-spacing: 0.5px;
    }

    /* Grid Cards */
    .explore-card {
        background-color: #0d1b2a;
        border: 1px solid rgba(255, 255, 255, 0.08);
        border-radius: 20px;
        overflow: hidden;
        height: 100%;
        display: flex;
        flex-direction: column;
        transition: transform 0.3s ease, box-shadow 0.3s ease;
    }
    .explore-card:hover {
        transform: translateY(-6px);
        box-shadow: 0 12px 30px rgba(0, 0, 0, 0.5);
        border-color: rgba(0, 188, 212, 0.3);
    }
    .explore-img-wrapper {
        aspect-ratio: 4 / 3;
        overflow: hidden;
        position: relative;
        background-color: #050b14;
    }
    .explore-img-wrapper img {
        width: 100%;
        height: 100%;
        object-fit: cover;
        transition: transform 0.5s ease;
    }
    .explore-card:hover .explore-img-wrapper img {
        transform: scale(1.05);
    }
    .explore-content {
        padding: 22px;
        display: flex;
        flex-direction: column;
        flex-grow: 1;
    }
    .explore-category {
        font-size: 12px;
        color: #00bcd4;
        font-weight: 600;
        text-transform: uppercase;
        letter-spacing: 0.5px;
        margin-bottom: 6px;
    }
    .explore-title {
        font-size: 18px;
        font-weight: 700;
        color: #fff;
        text-decoration: none;
        margin-bottom: 10px;
        line-height: 1.4;
        transition: color 0.3s ease;
    }
    .explore-title:hover {
        color: #ff4500;
    }
    .explore-desc {
        font-size: 13.5px;
        color: #8fa0b5;
        margin-bottom: 20px;
        line-height: 1.5;
    }
    .explore-meta {
        margin-top: auto;
        padding-top: 15px;
        border-top: 1px solid rgba(255, 255, 255, 0.06);
        display: flex;
        justify-content: space-between;
        align-items: center;
        font-size: 13px;
        color: #6c7e93;
    }
    .action-btn-group {
        display: flex;
        gap: 12px;
    }
    .action-icon {
        color: #8fa0b5;
        cursor: pointer;
        transition: color 0.3s ease;
    }
    .action-icon:hover {
        color: #ff4500;
    }
</style>

<section class="explore-section">
    <div class="container">
        
        <!-- Search & Filter Options Header -->
        <div class="explore-filter-bar">
            <div class="row g-3 align-items-center">
                <div class="col-lg-5">
                    <div class="explore-search-box">
                        <i class="fa-solid fa-magnifying-glass explore-search-icon"></i>
                        <input type="text" class="explore-search-input" placeholder="Search kites, spots, or gear...">
                    </div>
                </div>
                <div class="col-lg-7">
                    <div class="d-flex gap-2 overflow-auto pb-1 pt-1">
                        <a href="javascript:void(0)" class="filter-chip active">All Spots</a>
                        <a href="javascript:void(0)" class="filter-chip">Stunt Kites</a>
                        <a href="javascript:void(0)" class="filter-chip">Beach Locations</a>
                        <a href="javascript:void(0)" class="filter-chip">Pro Gear</a>
                        <a href="javascript:void(0)" class="filter-chip">Festivals</a>
                    </div>
                </div>
            </div>
        </div>

        <!-- Featured Highlight Post -->
        <div class="featured-explore-card">
            <div class="row g-0 align-items-center">
                <div class="col-lg-7">
                    <div class="featured-img-box">
                        <span class="featured-badge">Featured Spot</span>
                        <img src="img/collection-img1.png" alt="Featured Wind Location">
                    </div>
                </div>
                <div class="col-lg-5">
                    <div class="p-4 p-md-5">
                        <span class="explore-category">Wind Paradise</span>
                        <h2 class="text-white font-weight-bold mb-3">Top 10 Windiest Beaches for Kite Flying in 2026</h2>
                        <p class="explore-desc">Discover the ultimate coastal destinations with consistent high-velocity winds, open shores, and thriving kite flying communities worldwide.</p>
                        <div class="d-flex align-items-center justify-content-between pt-2">
                            <span class="text-white-50 fs-13"><i class="fa-regular fa-clock me-1"></i> 5 min read</span>
                            <a href="article-detail.php" class="btn-send text-decoration-none">Read Guide</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Explore Grid Cards -->
        <div class="row g-4">
            
            <!-- Explore Card 1 -->
            <div class="col-lg-4 col-md-6">
                <div class="explore-card">
                    <div class="explore-img-wrapper">
                        <img src="img/collection-img3.png" alt="Speed Kites">
                    </div>
                    <div class="explore-content">
                        <span class="explore-category">Gear Spotlight</span>
                        <a href="#" class="explore-title">Dual-Line Stunt Kites Precision Control Guide</a>
                        <p class="explore-desc">Master trick flying and high-speed maneuvers with proper line tension and handle grips.</p>
                        <div class="explore-meta">
                            <span><i class="fa-regular fa-eye me-1"></i> 1.2k Views</span>
                            <div class="action-btn-group">
                                <i class="fa-regular fa-heart action-icon" onclick="toggleLike(this)"></i>
                                <i class="fa-regular fa-bookmark action-icon"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Explore Card 2 -->
            <div class="col-lg-4 col-md-6">
                <div class="explore-card">
                    <div class="explore-img-wrapper">
                        <img src="img/collection-img4.png" alt="Night Flying">
                    </div>
                    <div class="explore-content">
                        <span class="explore-category">Community</span>
                        <a href="#" class="explore-title">LED Night Kite Flying: Safety & Setup Tips</a>
                        <p class="explore-desc">Illuminate the night sky safely using lightweight micro-LED strands and battery rigs.</p>
                        <div class="explore-meta">
                            <span><i class="fa-regular fa-eye me-1"></i> 890 Views</span>
                            <div class="action-btn-group">
                                <i class="fa-regular fa-heart action-icon" onclick="toggleLike(this)"></i>
                                <i class="fa-regular fa-bookmark action-icon"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Explore Card 3 -->
            <div class="col-lg-4 col-md-6">
                <div class="explore-card">
                    <div class="explore-img-wrapper">
                        <img src="img/collection-img5.png" alt="Kite Crafting">
                    </div>
                    <div class="explore-content">
                        <span class="explore-category">Tutorial</span>
                        <a href="#" class="explore-title">DIY Ripstop Nylon Kite Framing Techniques</a>
                        <p class="explore-desc">Learn how carbon fiber spars and durable bridle setups increase aerodynamic stability.</p>
                        <div class="explore-meta">
                            <span><i class="fa-regular fa-eye me-1"></i> 2.4k Views</span>
                            <div class="action-btn-group">
                                <i class="fa-regular fa-heart action-icon" onclick="toggleLike(this)"></i>
                                <i class="fa-regular fa-bookmark action-icon"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>

    </div>
</section>

<script>
function toggleLike(icon) {
    if (icon.classList.contains('fa-regular')) {
        icon.classList.remove('fa-regular');
        icon.classList.add('fa-solid');
        icon.style.color = '#ff4500';
    } else {
        icon.classList.remove('fa-solid');
        icon.classList.add('fa-regular');
        icon.style.color = '#8fa0b5';
    }
}
</script>

<!-- Body Content End Here -->

<!-- Footer Include Here -->
<?php include 'inc/footer.php'; ?>