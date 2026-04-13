<?php
require_once 'classes/Booking.php';
require_once 'classes/Villa.php'; // Shto këtë rresht
require_once 'includes/auth.php';
requireLogin();

$myBookings = Booking::getAll();
// Filtro vetëm rezervimet e përdoruesit aktual
$myBookings = array_filter($myBookings, function($booking) {
    return $booking->getUsername() === getCurrentUser();
});

// Merr të gjitha vilat për të gjetur emrin
$allVillas = Villa::getAll();
$villaNames = [];
foreach ($allVillas as $villa) {
    $villaNames[$villa->getId()] = $villa->getName();
}

require_once 'includes/header.php';
require_once 'includes/nav.php';
?>

<h1>My Dashboard</h1>
<h2>My Bookings</h2>

<?php if (empty($myBookings)): ?>
    <p>Nuk keni rezervime të regjistruara. <a href="villas.php">Rezervoni një villë tani!</a></p>
<?php else: ?>
    <table border="1" cellpadding="10">
        <tr>
            <th>Villa Name</th>
            <th>Date</th>
            <th>Booked On</th>
        </tr>
        <?php foreach ($myBookings as $booking): ?>
            <tr>
                <td>
                    <?php 
                    $villaId = $booking->getVillaId();
                    echo isset($villaNames[$villaId]) ? htmlspecialchars($villaNames[$villaId]) : "Villa #$villaId";
                    ?>
                </td>
                <td><?php echo htmlspecialchars($booking->getDate()); ?></td>
                <td><?php echo $booking->getCreatedAt(); ?></td>
            </tr>
        <?php endforeach; ?>
    </table>
<?php endif; ?>

<?php require_once 'includes/footer.php'; ?>
