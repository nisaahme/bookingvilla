<?php
require_once 'classes/Booking.php';
require_once 'includes/auth.php';
requireLogin();

$myBookings = Booking::getAll();
// Filtro vetëm rezervimet e përdoruesit aktual
$myBookings = array_filter($myBookings, function($booking) {
    return $booking->getUsername() === getCurrentUser();
});

require_once 'includes/header.php';
require_once 'includes/nav.php';
?>

<h1>My Dashboard</h1>
<h2>My Bookings</h2>

<?php if (empty($myBookings)): ?>
    <p>You have no bookings yet. <a href="villas.php">Book a villa now!</a></p>
<?php else: ?>
    <table border="1" cellpadding="10">
        <tr>
            <th>Villa ID</th>
            
            <th>Date</th>
            <th>Created At</th>
        </tr>
        <?php foreach ($myBookings as $booking): ?>
            <tr>
                <td><?php echo $booking->getVillaId(); ?></td>
                <td><?php echo htmlspecialchars($booking->getDate()); ?></td>
                <td><?php echo $booking->getCreatedAt(); ?></td>
            </tr>
        <?php endforeach; ?>
    </table>
<?php endif; ?>

<?php require_once 'includes/footer.php'; ?>