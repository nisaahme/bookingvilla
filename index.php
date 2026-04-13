<?php
require_once 'includes/auth.php';
require_once 'includes/header.php';
require_once 'includes/nav.php';

// Cookie për vizitën e fundit
$last_visit = "This is your first visit!";
if (isset($_COOKIE['last_visit'])) {
    $last_visit = "Last visit: " . $_COOKIE['last_visit'];
}
setcookie('last_visit', date('Y-m-d H:i:s'), time() + (86400 * 30));
?>

<!-- HERO SECTION -->
<header class="welcome-card" data-aos="fade-up">
    <div style="color:#c19d77; font-size:22px; margin-bottom:15px;">★★★★★</div>
    <h1>LUXURY VILLAS</h1>
    <p>Experience the most prestigious stays in Kosovo</p>
</header>

<?php if (isLoggedIn()): ?>
    <div class="alert-success" data-aos="fade-right">
        ✨ Welcome back, <strong><?php echo htmlspecialchars(getCurrentUser()); ?></strong>! You are logged in as <em><?php echo getCurrentRole(); ?></em>.
    </div>
<?php else: ?>
    <div class="alert-info" data-aos="fade-right">
        🔑 Please <a href="login.php" style="color:#c19d77; font-weight: bold;">login</a> to book villas and manage your reservations.
    </div>
<?php endif; ?>

<div class="alert-info" data-aos="fade-left" style="background: #f5f0e8;">
    📅 <?php echo $last_visit; ?>
</div>

<!-- STORY SECTION -->
<section style="padding: 60px 0; text-align: center;" data-aos="zoom-in">
    <span class="gold-txt">SINCE 2020</span>
    <h2>HOW WE BEGAN</h2>
    <p style="max-width: 800px; margin: 0 auto; color: #666; line-height: 2;">
        Villa Booking System u krijua nga pasioni për mikpritjen luksoze dhe natyrën e egër të Kosovës. 
        Ne ofrojmë vilat më ekskluzive në Pristinë, Pejë, Gjakovë dhe Prizren.
    </p>
</section>

<!-- FEATURED VILLAS -->
<section style="padding: 60px 0;">
    <span class="gold-txt" style="text-align: center; display: block;">EXQUISITE SELECTION</span>
    <h2 style="text-align: center;">Featured Villas</h2>
    
    <div class="villas-list">
        <?php
        require_once 'classes/Villa.php';
        $previewVillas = Villa::getAll();
        $previewVillas = array_slice($previewVillas, 0, 3);
        foreach ($previewVillas as $villa):
        ?>
            <div class="villa-card" data-aos="flip-up">
                <div class="villa-image">
                    <img src="assets/images/<?php echo $villa->getImage(); ?>" 
                         alt="<?php echo htmlspecialchars($villa->getName()); ?>">
                </div>
                <h3><?php echo htmlspecialchars($villa->getName()); ?></h3>
                <p>📍 <?php echo htmlspecialchars($villa->getLocation()); ?></p>
                <p class="price">€<?php echo $villa->getPrice(); ?> <span style="font-size: 13px;">/ night</span></p>
                <a href="villas.php" class="btn">VIEW DETAILS →</a>
            </div>
        <?php endforeach; ?>
    </div>
    
    <div style="text-align: center; margin-top: 40px;">
        <a href="villas.php" class="btn-browse">BROWSE ALL VILLAS →</a>
    </div>
</section>

<!-- FACILITIES SECTION -->
<section style="padding: 80px 0; background: #fafafa; text-align: center;">
    <span class="gold-txt">AMENITIES</span>
    <h2>World Class Facilities</h2>
    <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(250px, 1fr)); gap: 50px; margin-top: 60px;">
        <div data-aos="fade-up" data-aos-delay="100">
            <div style="font-size: 45px; margin-bottom: 20px;">🏊</div>
            <h4>Private Pool</h4>
            <p style="color: #777;">Each villa has its own pool</p>
        </div>
        <div data-aos="fade-up" data-aos-delay="200">
            <div style="font-size: 45px; margin-bottom: 20px;">📶</div>
            <h4>Ultra-Fast WiFi</h4>
            <p style="color: #777;">Stay connected everywhere</p>
        </div>
        <div data-aos="fade-up" data-aos-delay="300">
            <div style="font-size: 45px; margin-bottom: 20px;">🅿️</div>
            <h4>Free Parking</h4>
            <p style="color: #777;">Secure 24/7 parking</p>
        </div>
        <div data-aos="fade-up" data-aos-delay="400">
            <div style="font-size: 45px; margin-bottom: 20px;">🍽️</div>
            <h4>Gourmet Kitchen</h4>
            <p style="color: #777;">Fully equipped kitchen</p>
        </div>
    </div>
</section>

<?php require_once 'includes/footer.php'; ?>