<?php
require_once 'classes/Booking.php';
require_once 'classes/Villa.php';
require_once 'includes/auth.php';
requireAdmin(); // Vetëm admin ka qasje

$allBookings = Booking::getAll();
$allVillas = Villa::getAll();

require_once 'includes/header.php';
require_once 'includes/nav.php';
?>

<h1>Admin Dashboard</h1> 

<h2>All Bookings</h2>
<?php if (empty($allBookings)): ?>
    <p>No bookings yet.</p>
<?php else: ?>
    <table border="1" cellpadding="10">
        <tr>
            <th>Username</th>
            <th>Villa ID</th>
            <th>Date</th>
            <th>Created At</th>
        </tr>
        <?php foreach ($allBookings as $booking): ?>
            <tr>
                <td><?php echo htmlspecialchars($booking->getUsername()); ?></td>
                <td><?php echo $booking->getVillaId(); ?></td>
                <td><?php echo htmlspecialchars($booking->getDate()); ?></td>
                <td><?php echo $booking->getCreatedAt(); ?></td>
            </tr>
        <?php endforeach; ?>
    </table>
<?php endif; ?>

<h2>All Villas</h2>
<ul>
    <?php foreach ($allVillas as $villa): ?>
        <li><?php echo htmlspecialchars($villa->getName()); ?> - <?php echo $villa->getLocation(); ?> - €<?php echo $villa->getPrice(); ?></li>
    <?php endforeach; ?>
</ul>

<?php require_once 'includes/footer.php'; ?>