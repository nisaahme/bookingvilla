<?php
require_once 'classes/Villa.php';
require_once 'classes/Booking.php';
require_once 'includes/auth.php';

requireLogin();

$villa_id = $_GET['villa_id'] ?? null;
$villa = null;

// Gjej vilën përkatëse
$allVillas = Villa::getAll();
foreach ($allVillas as $v) {
    if ($v->getId() == $villa_id) {
        $villa = $v;
        break;
    }
}

if (!$villa) {
    die("Villa not found!");
}

$error = '';
$success = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $booking_date = $_POST['booking_date'] ?? '';
    $email = $_POST['email'] ?? '';
    $phone = $_POST['phone'] ?? '';
    
    // VALIDIMI ME REGEX (kërkesa e fazës 1)
    
    // 1. Validimi i email-it
    if (!preg_match("/^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/", $email)) {
        $error = "Invalid email address!";
    }
    // 2. Validimi i numrit të telefonit (vetëm numra, 8-15 shifra)
    elseif (!preg_match("/^[0-9]{8,15}$/", $phone)) {
        $error = "Phone number must contain only digits (8-15 digits)!";
    }
    // 3. Validimi i datës (format YYYY-MM-DD dhe jo e kaluar)
    elseif (!preg_match("/^[0-9]{4}-[0-9]{2}-[0-9]{2}$/", $booking_date)) {
        $error = "Invalid date format! Use YYYY-MM-DD.";
    }
    elseif (strtotime($booking_date) < strtotime(date('Y-m-d'))) {
        $error = "Booking date cannot be in the past!";
    }
    else {
        // Krijo dhe ruaj rezervimin
        $booking = new Booking($villa_id, getCurrentUser(), $booking_date);
        $booking->save();
        $success = "Booking confirmed for " . htmlspecialchars($villa->getName()) . " on $booking_date!";
    }
}

require_once 'includes/header.php';
require_once 'includes/nav.php';
?>

<h1>Book Villa: <?php echo htmlspecialchars($villa->getName()); ?></h1>
<p>Location: <?php echo htmlspecialchars($villa->getLocation()); ?></p>
<p>Price: €<?php echo $villa->getPrice(); ?> / night</p>

<?php if ($error): ?>
    <p style="color: red;">Error: <?php echo $error; ?></p>
<?php endif; ?>

<?php if ($success): ?>
    <p style="color: green;"><?php echo $success; ?></p>
<?php endif; ?>

<form method="post" action="">
    <div>
        <label>Email (for confirmation):</label>
        <input type="email" name="email" required>
    </div>
    <div>
        <label>Phone Number:</label>
        <input type="text" name="phone" required>
    </div>
    <div>
        <label>Booking Date:</label>
        <input type="date" name="booking_date" required>
    </div>
    <div>
        <button type="submit">Confirm Booking</button>
    </div>
</form>

<p><a href="villas.php">← Back to Villas</a></p>

<?php require_once 'includes/footer.php'; ?>