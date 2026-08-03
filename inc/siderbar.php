<?php
$current_page = basename($_SERVER['PHP_SELF']);
?>
<div class="agent-sidebar-card">
    <div class="sidebar-profile text-center mb-4">
        <div class="profile-img-wrap mx-auto mb-3">
            <img src="img/profile.png" alt="Profile Picture" class="rounded-circle img-fluid" onerror="this.src='https://cdn-icons-png.flaticon.com/512/3135/3135715.png'">
        </div>
        <h5 class="text-white fw-bold mb-1">JOHN SAMUAL 👋</h5>
        <p class="text-muted small mb-0">JohnSamual@outlook.com</p>
    </div>

    <ul class="sidebar-menu list-unstyled m-0">
        <li>
            <a href="kite-profile.php" class="<?php echo ($current_page == 'kite-profile.php' || $current_page == 'kite-edit.php' || $current_page == 'kite-change-password.php') ? 'active' : ''; ?>">
                <i class="fa-solid fa-user me-2"></i> My Profile
            </a>
        </li>
        <li>
            <a href="kite-my-orders.php" class="<?php echo ($current_page == 'kite-my-orders.php') ? 'active' : ''; ?>">
                <i class="fa-solid fa-box-archive me-2"></i> My Orders
            </a>
        </li>
        <li>
            <a href="kite-wishlist.php" class="<?php echo ($current_page == 'kite-wishlist.php') ? 'active' : ''; ?>">
                <i class="fa-solid fa-heart me-2"></i> Wishlist
            </a>
        </li>
        <li>
            <a href="kite-my-addresses.php" class="<?php echo ($current_page == 'kite-my-addresses.php') ? 'active' : ''; ?>">
                <i class="fa-solid fa-location-dot me-2"></i> My Addresses
            </a>
        </li>
        <li>
            <a href="kite-my-collection.php" class="<?php echo ($current_page == 'kite-my-collection.php') ? 'active' : ''; ?>">
                <i class="fa-solid fa-layer-group me-2"></i> My Collection
            </a>
        </li>
        <li>
            <a href="kite-my-stats.php" class="<?php echo ($current_page == 'kite-my-stats.php') ? 'active' : ''; ?>">
                <i class="fa-solid fa-chart-pie me-2"></i> My Stats
            </a>
        </li>
        <li class="border-none-last">
            <a href="logout.php" class="text-danger">
                <i class="fa-solid fa-right-from-bracket me-2"></i> Log Out
            </a>
        </li>
    </ul>
</div>

<style>
.agent-sidebar-card {
    background-color: #121824;
    border: 1px solid rgba(255, 255, 255, 0.08);
    border-radius: 20px;
    padding: 30px 20px;
}
.profile-img-wrap {
    width: 80px;
    height: 80px;
    background: #1f2937;
    border-radius: 50%;
    padding: 4px;
    border: 2px solid #ff7a00;
}
.profile-img-wrap img {
    width: 100%;
    height: 100%;
    object-fit: cover;
    border-radius: 50%;
}
.sidebar-menu li {
    border-bottom: 1px solid rgba(255, 255, 255, 0.06);
}
.sidebar-menu li.border-none-last {
    border-bottom: none;
}
.sidebar-menu li a {
    display: block;
    padding: 14px 15px;
    color: #9ca3af;
    font-size: 14px;
    font-weight: 600;
    text-decoration: none;
    transition: all 0.2s ease;
    border-radius: 10px;
}
.sidebar-menu li a:hover,
.sidebar-menu li a.active {
    color: #ffffff;
    background: linear-gradient(90deg, #ff7a00 0%, #ff4500 100%);
}
</style>