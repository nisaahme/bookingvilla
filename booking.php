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
} ?>
