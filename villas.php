<?php
require_once 'classes/Villa.php';
require_once 'includes/auth.php';

requireLogin();

$villas = Villa::getAll(); // Tani merr 6 vila

require_once 'includes/header.php';
require_once 'includes/nav.php';
?>

<h1>🏡 Our Luxury Villas</h1>
<p style="color: #666; margin-bottom: 30px;">Discover our collection of 6 stunning villas in the most beautiful locations</p>

<div class="villas-list">
    <?php foreach ($villas as $villa): ?>
        <div class="villa-card">
            <div class="villa-image">
                <img src="assets/images/<?php echo $villa->getImage(); ?>" 
                     alt="<?php echo htmlspecialchars($villa->getName()); ?>">
            </div>
            <h3><?php echo htmlspecialchars($villa->getName()); ?></h3>
            <p>📍 <?php echo htmlspecialchars($villa->getLocation()); ?></p>
            <p>⭐ 4.9 · Superhost</p>
            <p class="price">€<?php echo $villa->getPrice(); ?> <span style="font-size: 0.9rem; font-weight: normal;">/ night</span></p>
            <a href="booking.php?villa_id=<?php echo $villa->getId(); ?>" class="btn">Book Now →</a>
        </div>
    <?php endforeach; ?>
</div>

<?php require_once 'includes/footer.php'; ?>